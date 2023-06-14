<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getProjectsPaymentsDashboard(Company $company)
    {
        $report =  DB::select(DB::raw("SELECT
	pd.company_id , TRUNCATE((sum(pd.price))/10000000, 2) total_price, pp.project_id , p.name
FROM
	project_payment_details pd
	LEFT JOIN project_payments pp ON pp.id = pd.project_payment_id
	LEFT JOIN projects p ON p.id = pp.project_id
	where pd.company_id = $company->id and  pp.status_id = 4
	group by pd.company_id ,  pp.project_id , p.name
	order by pp.project_id desc "));
        return response($report, 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function getProjectsPaymentsVSpriceDashboard(Company $company)
    {
   
        $report =  DB::select(DB::raw(
    "SELECT $company->id company_id, sum(total_cost) total_cost,sum(price) price, 0 project_id, 
    ' سرجمع پروژه ها ' name from
    (SELECT
    pd.company_id , TRUNCATE((sum(pd.price))/10000000, 2) total_cost, TRUNCATE(IFNULL(p.last_approved_invoice_price,0)/10000000, 2)  price, pp.project_id , p.name
    FROM
    project_payment_details pd
    LEFT JOIN project_payments pp ON pp.id = pd.project_payment_id
    LEFT JOIN projects p ON p.id = pp.project_id
    where pd.company_id = $company->id and  pp.status_id = 4
    group by pd.company_id ,  pp.project_id , p.name,p.last_approved_invoice_price) AA
    UNION
    SELECT pd.company_id , (sum(pd.price))/10000000 total_cost, p.last_approved_invoice_price/10000000  price, pp.project_id , p.name
    FROM
    project_payment_details pd
    LEFT JOIN project_payments pp ON pp.id = pd.project_payment_id
    LEFT JOIN projects p ON p.id = pp.project_id
    where pd.company_id = $company->id and  pp.status_id = 4
    group by pd.company_id ,  pp.project_id , p.name,p.last_approved_invoice_price"

    ));
        return response($report, 200);
    }
//and  pp.status_id = 4

    public function getProjectsLastPaymentsDashboard(Company $company)
    {
        $now= date("Y-m-d");//Carbon::now();
        //return response($now);
        //and convert( pp.created_at,date)= $now
        $tt=DB::raw("SELECT pp.id,convert( pp.created_at,date) Recdate, left(convert( pp.created_at,time),5) Rectime,ROUND(totalPrice/1000000) price
        ,CONCAT(p.name, ' بابت ', IFNULL(b.name,' '), ' ', IFNULL(pp.description,' ') , ' به مبلغ ' ,ROUND(totalPrice/1000000), ' میلیون ریال ', '(',st.name,')') Des
        FROM
            project_payments pp
            LEFT JOIN
            (select project_payment_id,sum(price) totalPrice from project_payment_details group by 		project_payment_id) ppd
            ON pp.id = ppd.project_payment_id
            LEFT JOIN projects p ON p.id = pp.project_id
            left JOIN babats b on b.id = pp.babat_id
            left join statuses st on st.id = pp.status_id
            where pp.status_id in  (2,3) and p.company_id =  $company->id 
            order by pp.created_at desc LIMIT 10;");
            //return response($tt, 200);
        $report =  DB::select($tt);
        return response($report, 200);
    }//where pp.status_id in  (2,3,4) and p.company_id =  $company->id and convert( pp.created_at,date)= convert('$now',date)

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
