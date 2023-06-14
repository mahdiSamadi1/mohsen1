<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        html {
            font-size: 100%;
        }

        .page-break {
            page-break-after: always;
        }

        @media screen {
            div.divFooter {
                display: none;
            }
        }
        @media print {
            div.divFooter {
                position: fixed;
                bottom: -20px;
                width: 100%;
                margin: 0px auto;
            }
        }
    </style>

</head>
<body dir="rtl">
<div style="text-align: center; width: 100%"><b>گزارش روزانه پروژه {{$project_report->project->name}}</b></div>
<div class="divFooter">سامانه مدیریت پروژه های عمرانی CARSHIE.IR</div>

<table width="100%" class="table" border="1" cellpadding="5" cellspacing="0">
    <thead>

    <tr>
        <td><b>کارفرما : {{$project_report->project->taskmaster}}</b></td>
        <td align="center" valign="top" rowspan="2">
            @if(isset($project_report->project->company->logo) && $project_report->project->company->logo != '')
                <img height="60px"
                     src="{{str_replace('storage','public/storage',storage_path($project_report->project->company->logo))}}">
                <br>
            @endif
            {{$project_report->project->company->company_name}}
        </td>
        <td align="center" rowspan="2"><b>شماره و تاریخ قرارداد</b><br>{{$project_report->project->contract_number}}
            - {{$project_report->project->contract_date}}</td>
        <td align="center" valign="top" rowspan="2">
            @if(isset($project_report->project->taskmaster_logo) && $project_report->project->taskmaster_logo != '')
                <img height="60px"
                     src="{{str_replace('storage','public/storage',storage_path($project_report->project->taskmaster_logo))}}">
                <br>
            @endif
            {{$project_report->project->taskmaster}}
        </td>
    </tr>
    <tr>
        <td><b>پیمانکار : {{$project_report->project->company->company_name}}</b></td>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td colspan="4">
            <b>مدت قرارداد : از تاریخ</b> {{$project_report->project->jStartDate}}
            <b>تا تاریخ </b>{{$project_report->project->jEndDate}}
            <b>زمان گذشته</b>{{$project_report->project->timeSpentDay}} روز
            <b>زمان
                مانده</b>{{$project_report->project->timeRemainedDay}}
            روز
            <b>گزارش شماره :</b>{{$project_report->id}}
        </td>
    </tr>
    <tr>
        <td colspan="4" style="padding: 0px">
            <table width="100%" border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <td>
                        <b>ایام هفته:</b>{{jDate('l',strtotime(jalaliToGero($project_report->report_date)))}}
                    </td>
                    <td>
                        <b>ساعت شروع:</b>{{substr($project_report->site_start_time,0,5)}}
                    </td>
                    <td>
                        <b>صورتمجلس تحویلی به نظارت</b>
                    </td>
                    <td rowspan="2" valign="top">
                        <b> صورتمجلس تاییدی توسط نظارت</b>
                    </td>
                    <td rowspan="2">
                        <b>شرایط جوی :</b>
                    </td>
                    <td>
                        <b>حداقل دما :</b>{{$project_report->low_temperature}}
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>تاریخ :</b>{{$project_report->report_date}}
                    </td>
                    <td>
                        <b>ساعت پایان:</b>{{substr($project_report->site_end_time,0,5)}}
                    </td>
                    <td>
                        <b>صورتمجلس تحویلی از نظارت</b>
                    </td>
                    <td>
                        <b>حداکثر دما :</b>{{$project_report->high_temperature}}
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <?php
    $emp = [];$mat = [];$mach = [];
    $i = 0;$j = 0;$k = 0;
    if (isset($project_report->RU)) {
        $emp[$i++] = collect($project_report->RU)->where('resource_type_id', '1')->chunk(2)->toArray();
        $mat[$j++] = collect($project_report->RU)->where('resource_type_id', '2')->chunk(2)->toArray();
        $mach[$k++] = collect($project_report->RU)->where('resource_type_id', '3')->chunk(2)->toArray();
    }
    // dd($mat[0])
    ?>
    <tr>
        <td valign="top" width="50%" colspan="4" style="padding: 0px">
            <table width="100%" border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <td>
                        <b>پرسنل کارگاهی</b>
                    </td>
                    <td>
                        <b>مهارت</b>
                    </td>
                    <td>
                        <b>از ساعت</b>
                    </td>
                    <td>
                        <b>تا ساعت</b>
                    </td>
                    <td>
                        <b>مدت</b>
                    </td>

                    <td>
                        <b>پرسنل کارگاهی</b>
                    </td>
                    <td>
                        <b>مهارت</b>
                    </td>
                    <td>
                        <b>از ساعت</b>
                    </td>
                    <td>
                        <b>تا ساعت</b>
                    </td>
                    <td>
                        <b>مدت</b>
                    </td>
                </tr>

                @for($x=0;$x<$j;$x++)
                    @foreach($emp[$x] as $row)
                            <?php
                            $keys = [];
                            $keys = array_keys($row);
                            ?>
                        <tr>
                            @if(isset($keys[0]) && isset($row[$keys[0]]))
                                <td>
                                    {{$row[$keys[0]]['title']!='' ? $row[$keys[0]]['title'] :$row[$keys[0]]['employee_name']}}
                                </td>
                                <td>
                                    {{$row[$keys[0]]['skill_name']}}
                                </td>
                                <td>
                                    {{substr($row[$keys[0]]['work_start_time'],0,5)}}
                                </td>
                                <td>
                                    {{substr($row[$keys[0]]['work_end_time'],0,5)}}
                                </td>
                                <td>
                                    {{date("H:i",(strtotime($row[$keys[0]]['work_end_time']) - strtotime($row[$keys[0]]['work_start_time'])))}}
                                </td>
                            @endif

                            @if(isset($keys[1]) && isset($row[$keys[1]]))
                                <td>
                                    {{$row[$keys[1]]['title']!='' ? $row[$keys[1]]['title'] :$row[$keys[1]]['employee_name']}}
                                </td>
                                <td>
                                    {{$row[$keys[1]]['skill_name']}}
                                </td>
                                <td>
                                    {{substr($row[$keys[1]]['work_start_time'],0,5)}}
                                </td>
                                <td>
                                    {{substr($row[$keys[1]]['work_end_time'],0,5)}}
                                </td>
                                <td>
                                    {{date("H:i",(strtotime($row[$keys[1]]['work_end_time']) - strtotime($row[$keys[1]]['work_start_time'])))}}
                                </td>
                            @endif
                        </tr>
                    @endforeach
                @endfor
            </table>
        </td>

    </tr>

    <tr>
        <td valign="top" width="50%" colspan="4" style="padding: 0px">
            <table width="100%" border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <td>
                        <b>ماشین آلات</b>
                    </td>
                    <td>
                        <b>تعداد</b>
                    </td>
                    <td>
                        <b>استفاده شده</b>
                    </td>

                    <td>
                        <b>ماشین آلات</b>
                    </td>
                    <td>
                        <b>تعداد</b>
                    </td>
                    <td>
                        <b>استفاده شده</b>
                    </td>
                </tr>
                @for($c=0;$c<$j;$c++)
                    @foreach($mach[$c] as $row)
                            <?php
                            $keys = [];
                            $keys = array_keys($row);
                            ?>
                        <tr>
                            @if(isset($keys[0]) && isset($row[$keys[0]]))
                                <td>
                                    {{$row[$keys[0]]['title']!='' ? $row[$keys[0]]['title'] :$row[$keys[0]]['material_name']}}
                                </td>
                                <td>
                                    {{$row[$keys[0]]['resource_usage']}}
                                </td>
                                <td>
                                    {{$row[$keys[0]]['inuse']=='Y'?'بلی':'خیر'}}
                                </td>
                            @endif

                            @if(isset($keys[1]) && isset($row[$keys[1]]))
                                <td>
                                    {{$row[$keys[1]]['title']!='' ? $row[$keys[1]]['title'] :$row[$keys[1]]['material_name']}}
                                </td>
                                <td>
                                    {{$row[$keys[1]]['resource_usage']}}
                                </td>
                                <td>
                                    {{$row[$keys[1]]['inuse']=='Y'?'بلی':'خیر'}}
                                </td>
                            @endif
                        </tr>
                    @endforeach
                @endfor
            </table>
        </td>
    </tr>

    <tr>
        <td valign="top" width="50%" colspan="4" style="padding: 0px">
            <table width="100%" border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <td>
                        <b>مصالح</b>
                    </td>
                    <td>
                        <b>واحد</b>
                    </td>
                    <td>
                        <b>مقدار</b>
                    </td>
                    <td>
                        <b>ورودی/مصرفی</b>
                    </td>
                    <td>
                        <b>مصالح</b>
                    </td>
                    <td>
                        <b>واحد</b>
                    </td>
                    <td>
                        <b>مقدار</b>
                    </td>
                    <td>
                        <b>ورودی/مصرفی</b>
                    </td>
                </tr>
                @for($z=0;$z<$j;$z++)
                    @foreach($mat[$z] as $row)
                            <?php
                            $keys = [];
                            $keys = array_keys($row);
                            ?>
                        <tr>
                            @if(isset($keys[0]) && isset($row[$keys[0]]))
                                <td width="150px">
                                    {{$row[$keys[0]]['title']!='' ? $row[$keys[0]]['title'] :$row[$keys[0]]['material_name']}}
                                </td>
                                <td>
                                    {{$row[$keys[0]]['resource_usage']}}
                                </td>
                                <td>
                                    {{$row[$keys[0]]['unit_name']}}
                                </td>
                                <td>
                                    {{$row[$keys[0]]['in_out']=='I'?'ورودی':'مصرفی'}}
                                </td>
                            @endif
                            @if(isset($keys[1]) && isset($row[$keys[1]]))
                                <td width="150px">
                                    {{$row[$keys[1]]['title']!='' ? $row[$keys[1]]['title'] :$row[$keys[1]]['material_name']}}
                                </td>
                                <td>
                                    {{$row[$keys[1]]['resource_usage']}}
                                </td>
                                <td>
                                    {{isset($row[$keys[1]]['unit_name'])??$row[$keys[1]]['unit_name']}}
                                </td>
                                <td>
                                    {{$row[$keys[1]]['in_out']=='I'?'ورودی':'مصرفی'}}
                                </td>
                            @endif
                        </tr>
                    @endforeach
                @endfor
            </table>
        </td>
    </tr>
    <tr>
        <td valign="top" width="50%" colspan="4" style="padding: 0px">
            <table width="100%" border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <td><b>وقایع </b><br><br>
                        {{$project_report->description}}</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td valign="top" width="50%" colspan="4" style="padding: 0px">
            <table width="100%" border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <td align="center" colspan="8"><b>نتایج </b></td>
                </tr>
                <tr>
                    <td><b>عنوان</b></td>
                    <td><b>واحد</b></td>
                    <td><b>عرض</b></td>
                    <td><b>طول</b></td>
                    <td><b>ارتفاع</b></td>
                    <td><b>وزن</b></td>
                    <td><b>تعداد</b></td>
                    <td><b>مقدار کل</b></td>
                </tr>
                @if (isset($project_report->outcomes))
                    @foreach($project_report->outcomes as $out)
                        <tr>
                            <td>{{$out->project_wbs_title ?? $out->price_list_description ?? $out->description}}</td>
                            <td>{{$out->unit_name}}</td>
                            <td>{{$out->width}}</td>
                            <td>{{$out->length}}</td>
                            <td>{{$out->height}}</td>
                            <td>{{$out->weight}}</td>
                            <td>{{$out->count}}</td>
                            <td>{{$out->qty}}</td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </td>
    </tr>
    <tr>
        <td valign="top" width="50%" colspan="4" style="padding: 0px">
            <table width="100%" border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <td width="30%" align="center"><b>پیمانکار</b></td>
                    <td width="30%" align="center"><b>دستگاه نظارت</b></td>
                    <td width="40%" align="center"><b>کارفرما</b></td>
                </tr>
                <tr>
                    <td width="30%" height="75px" align="center"></td>
                    <td width="30%" align="center"></td>
                    <td width="40%" align="center"></td>
                </tr>
            </table>
        </td>
    </tr>
    </tbody>
</table>
<div class="page-break"></div>
<h3>پیوست ها</h3>

<table width="100%" style="margin-top:10px; border: 1px solid black; border-radius: 10px">
    <thead>
    <tr>
        <td><b>وقایع و ماشین آلات</b></td>
    </tr>

    @if(isset($project_report->all_medias))
        @foreach($project_report->all_medias as $media)
            @if(isset($media->original_url))
                <tr>
                    <td>
                        <img style="max-height: 500px"
                             src="{{str_replace('storage','public/storage/uploads/medias/'.$media->id.'/',storage_path($media->file_name))}}">
                        <br>
                    </td>
                </tr>
            @endif
        @endforeach
    @endif
    </thead>
</table>
<table width="100%" style="margin-top:10px;">
    <thead>
    <tr>
        <td><a>نتایج</a></td>
    </tr>
    <?php
    $index = 0;
    ?>
    @if(isset($project_report->outcomes))
        @foreach($project_report->outcomes as $outcome)
            @if(isset($outcome->all_medias) && $outcome->all_medias != [])
                <table style="border: 1px solid gray;border-radius: 20px" width="100%">
                    <tr>
                        <td colspan="2">
                            <b>{{$outcome->project_wbs_title ?? $out->price_list_description ?? $out->description}}</b>
                        </td>
                    </tr>
                    @foreach($outcome->all_medias as $media)
                        @if($index++ % 2 ==0)
                            <tr>
                                @endif
                                <td>
                                    <img style="max-height: 500px"
                                         src="{{str_replace('storage','public/storage/uploads/medias/'.$media->id.'/',storage_path($media->file_name))}}">
                                    <br>
                                </td>
                                @if($index % 2 ==0)
                            </tr>
                        @endif
                    @endforeach
                </table>
            @endif

        @endforeach
    @endif

    </thead>
</table>
</body>
</html>
