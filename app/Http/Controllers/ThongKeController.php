<?php

namespace App\Http\Controllers;
use App\requirementtypeModel;
use App\requirementModel;


use Illuminate\Http\Request;
//use App\Item;
use Input;
use DB;
use Excel;

class ThongKeController extends Controller
{
    //Hàm trả về danh sách Vai trò
    public function getThongKe(){
        $data=array();
        $list = requirementtypeModel::all();
        $s_all = 0;
        $s_cho= 0;
        $s_xuly= 0;
        $s_tuchoi= 0;
        $s_huy= 0;
        foreach($list as $key => $value){
            $data[$value->RT_NAME] =
                [
                    'all'=> requirementModel::join('requirement_type','requirement_type.RT_ID', '=','requirement.RT_ID')->where('requirement.RT_ID',$value->RT_ID)->count(),
                    'cho'=> requirementModel::join('requirement_type','requirement_type.RT_ID', '=','requirement.RT_ID')->where('ST_ID','1')->where('requirement.RT_ID',$value->RT_ID)->count(),
                    'xuly'=> requirementModel::join('requirement_type','requirement_type.RT_ID', '=','requirement.RT_ID')->where('ST_ID','2')->where('requirement.RT_ID',$value->RT_ID)->count(),
                    'tuchoi'=> requirementModel::join('requirement_type','requirement_type.RT_ID', '=','requirement.RT_ID')->where('ST_ID','3')->where('requirement.RT_ID',$value->RT_ID)->count(),
                    'huy'=> requirementModel::join('requirement_type','requirement_type.RT_ID', '=','requirement.RT_ID')->where('ST_ID','4')->where('requirement.RT_ID',$value->RT_ID)->count(),
                ];
            $s_all = $data[$value->RT_NAME]['all']+ $s_all;
        $s_cho= $data[$value->RT_NAME]['cho']+$s_cho;
        $s_xuly= $data[$value->RT_NAME]['xuly']+$s_xuly;
        $s_tuchoi= $data[$value->RT_NAME]['tuchoi']+$s_tuchoi;
        $s_huy= $data[$value->RT_NAME]['huy']+$s_huy;
        }
        $sum=[
            's_all' => $s_all,
            's_cho'=> $s_cho,
            's_xuly'=>$s_xuly,
            's_tuchoi'=>$s_tuchoi,
            's_huy'=>$s_huy
        ];

        return view('admin.ThongKe.thongke',['data'=>$data, 'sum'=> $sum]);
    }

    //Hàm xuất ra file excel
    public function xuatExcel(Request $request){

////        Xem cấu trúc data
//        $data=array();
//        $beginDay = $request->begin;
//        $endDay = $request->end;
//        $list = requirementtypeModel::all();
//        $s_all = 0;
//        $s_cho= 0;
//        $s_xuly= 0;
//        $s_tuchoi= 0;
//        $s_huy= 0;
//        foreach($list as $key => $value){
//            $data[$value->RT_NAME] =
//                [
//                    'all'=> requirementModel::join('requirement_type','requirement_type.RT_ID', '=','requirement.RT_ID')->where('requirement.RT_ID',$value->RT_ID)->where('RQ_DATECREATE','>=',$beginDay)->where('RQ_DATECREATE','<=',$endDay)->count(),
//                    'cho'=> requirementModel::join('requirement_type','requirement_type.RT_ID', '=','requirement.RT_ID')->where('ST_ID','1')->where('requirement.RT_ID',$value->RT_ID)->where('RQ_DATECREATE','>=',$beginDay)->where('RQ_DATECREATE','<=',$endDay)->count(),
//                    'xuly'=> requirementModel::join('requirement_type','requirement_type.RT_ID', '=','requirement.RT_ID')->where('ST_ID','2')->where('requirement.RT_ID',$value->RT_ID)->where('RQ_DATECREATE','>=',$beginDay)->where('RQ_DATECREATE','<=',$endDay)->count(),
//                    'tuchoi'=> requirementModel::join('requirement_type','requirement_type.RT_ID', '=','requirement.RT_ID')->where('ST_ID','3')->where('requirement.RT_ID',$value->RT_ID)->where('RQ_DATECREATE','>=',$beginDay)->where('RQ_DATECREATE','<=',$endDay)->count(),
//                    'huy'=> requirementModel::join('requirement_type','requirement_type.RT_ID', '=','requirement.RT_ID')->where('ST_ID','4')->where('requirement.RT_ID',$value->RT_ID)->where('RQ_DATECREATE','>=',$beginDay)->where('RQ_DATECREATE','<=',$endDay)->count(),
//                ];
//            $s_all = $data[$value->RT_NAME]['all']+ $s_all;
//            $s_cho= $data[$value->RT_NAME]['cho']+$s_cho;
//            $s_xuly= $data[$value->RT_NAME]['xuly']+$s_xuly;
//            $s_tuchoi= $data[$value->RT_NAME]['tuchoi']+$s_tuchoi;
//            $s_huy= $data[$value->RT_NAME]['huy']+$s_huy;
//        }
//        //Tính tổng
//        $sum=[
//            's_all' => $s_all,
//            's_cho'=> $s_cho,
//            's_xuly'=>$s_xuly,
//            's_tuchoi'=>$s_tuchoi,
//            's_huy'=>$s_huy
//        ];
//        dd($data);
        try {
            Excel::create('Danhsachyeucau', function($excel) {
                $excel->sheet('mySheet', function($sheet) {
                    $ds_th = DB::select('SELECT * from requirement');
                    $data = [
                        'dsYeuCau' => $ds_th,
                    ];

                    $header = ['font' => [
                        'name' =>  'Calibri',
                        'size' =>  13,
                        'bold' =>  true ]];


                    $sheet->setCellValue('A1', "DANH SÁCH TỔNG HỢP CÁC YÊU CẦU");
                    $sheet->getStyle('A1')->applyFromArray([
                        'font' => [ 'name' => 'Calibri',
                            'size' => 20,
                            'bold' => true ]]);
                    $sheet->mergeCells('A1:G1');

                    $sheet->cells('A1', function($cells) {
                        $cells->setAlignment('center');
                    });


                    $sheet->getColumnDimension('A')->setAutoSize(true);
                    $sheet->getColumnDimension('B')->setAutoSize(true);
                    $sheet->getColumnDimension('C')->setAutoSize(true);
                    $sheet->getColumnDimension('D')->setAutoSize(true);
                    $sheet->getColumnDimension('E')->setAutoSize(true);
                    $sheet->getColumnDimension('F')->setAutoSize(true);
                    $sheet->getColumnDimension('G')->setAutoSize(true);
                    $sheet->getStyle('A3')->applyFromArray($header);
                    $sheet->getStyle('B3')->applyFromArray($header);
                    $sheet->getStyle('C3')->applyFromArray($header);
                    $sheet->getStyle('D3')->applyFromArray($header);
                    $sheet->getStyle('E3')->applyFromArray($header);
                    $sheet->getStyle('F3')->applyFromArray($header);
                    $sheet->getStyle('G3')->applyFromArray($header);
                    $sheet->setCellValue('A3', "STT");
                    $sheet->setCellValue('B3', "Loại yêu cầu");
                    $sheet->setCellValue('C3', "Số lượng yêu cầu");
                    $sheet->setCellValue('D3', "Hoàn Thành");
                    $sheet->setCellValue('E3', "Đang chờ");
                    $sheet->setCellValue('F3', "Từ chối");
                    $sheet->setCellValue('G3', "Hủy bỏ");
                    $sheet->cells('A3:G3', function($cells) {
                        $cells->setAlignment('center');
                    });
                    $i = 3;
                    foreach ($ds_th as $key => $value) {
                        $i++;
                        $sheet->setCellValue('A'.$i, $i-3);
                        $sheet->setCellValue('B'.$i, $value->RQ_TITTLE);
                        $sheet->setCellValue('C'.$i, $value->US_ID);
                        $sheet->setCellValue('D'.$i,$value->US_SERVANT );
                        $sheet->setCellValue('E'.$i, $value->RQ_NOTE);
                        $sheet->setCellValue('F'.$i,$value->RQ_REPLY);
                    }
                    $sheet->cells("A4:A$i", function($cells) { $cells->setAlignment('center'); });
                    $sheet->cells("C4:C$i", function($cells) { $cells->setAlignment('center'); });
                    $sheet->cells("E4:E$i", function($cells) { $cells->setAlignment('center'); });
                    $sheet->cells("F4:F$i", function($cells) { $cells->setAlignment('right'); });
                });
            })->download('xlsx');

        } catch(QueryException $ex) {
            return response([
                'error'   => true,
                'message' => $ex->getMessage()
            ], 200);
        } catch (PDOException  $ex) {
            return response([
                'error'   => true,
                'message' => $ex->getMessage()
            ], 200);
        }

    }



}
