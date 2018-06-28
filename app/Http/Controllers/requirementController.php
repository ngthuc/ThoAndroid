<?php

namespace App\Http\Controllers;

use App\detailsModel;
use App\propertiesModel;
use App\requirementtypeModel;
use Illuminate\Http\Request;
use App\requirementModel;
use Illuminate\Support\Facades\Auth;
class requirementController extends Controller
{
    public  function  __construct(){
        $this->middleware('auth');
    }

    public function getThemYC()
    {

        $data= requirementtypeModel::all();
        return view('admin.QuanLyTruyXuatYC.them',['data'=>$data]);

    }
    public function getThemCT(Request $request)
    {
        $data = propertiesModel::where('RT_ID',$request->RT_ID)->get();
//        dd($data);
        return view('admin.QuanLyTruyXuatYC.themchitiet',['data'=>$data,'send'=> $request]);
    }

    public function postThemYC(Request $request){
//        dd($request);
        $id=time();
        requirementModel::insert([
            'RQ_ID' => $id,
            'RT_ID'=> $request->RT_ID,
            'US_ID' => (int)Auth::user()['id'],
            'US_SERVANT' => (int)Auth::user()['id'],
            'RQ_TITTLE' => $request->RQ_TITTLE,
            'ST_ID' => 1,
            'RQ_NOTE' => $request->RQ_NOTE,
            'RQ_DATECREATE' => date('Y-m-d'),
            'RQ_DATEUPDATE' => date('Y-m-d')
        ]);

        foreach ($request->PP_ID as $key => $value){
            detailsModel::insert([
                'RQ_ID' => $id,
                'PP_ID' => $value,
                'DT_VALUE' => $request->DT_VALUE[$key]
            ]);
        }
        return $this->getXemlichsu();



    }

    //xem chi tiết khi nhấp vào nút cây viết
    public function getChitietyeucau($id)
    {
        $data = requirementModel::join('requirement_type','requirement_type.RT_ID','=','requirement.RT_ID' )
            ->join('user','requirement.US_ID','=','user.id')
            ->where('RQ_ID', $id)
            ->first();
        $array_ = detailsModel::join('properties', 'details.PP_ID','=','properties.PP_ID')
            ->where('RQ_ID',$id)
            ->get();

        return view('admin.QuanLyTruyXuatYC.chitietyeucau',['data'=>$data, 'array'=>$array_]);

    }
    //xem chi tiết Ở Duyệt yêu cầu khi nhấp vào nút cây viết
    public function getChitietyeucauDuyet($id)
    {
        $data = requirementModel::join('requirement_type','requirement_type.RT_ID','=','requirement.RT_ID' )
            ->join('user','requirement.US_ID','=','user.id')
            ->where('RQ_ID', $id)
            ->first();
        $array_ = detailsModel::join('properties', 'details.PP_ID','=','properties.PP_ID')
            ->where('RQ_ID',$id)
            ->get();
        return view('admin.DuyetYeuCau.chitietyeucau',['data'=>$data, 'array'=>$array_]);

    }

    public function getXemlichsu()
    {
//        dd(Auth::user());
        $user_id = Auth::user()['id'];
//        $user_id = 4;

//        $unitsModel = unitsModel::all();
//        return view('admin.QuanLyPhongBan.danhsach',['unitsModel'=>$unitsModel]);
//
        $data = requirementModel::join('requirement_type','requirement_type.RT_ID','=','requirement.RT_ID' )
            ->join('user','requirement.US_ID','=','user.id')
            ->where('US_ID', $user_id)
            ->get();

//        dd($data);
        return view('admin.QuanLyTruyXuatYC.xemlichsu', ['data'=> $data]);

    }
    public function getDuyetYeuCau()
    {
        $role = Auth::user()['RO_ID'];
        $data = array();
        //        Admin
        if($role==1){

            $data = requirementModel::join('requirement_type','requirement_type.RT_ID','=','requirement.RT_ID' )
                ->join('user','requirement.US_ID','=','user.id')
                ->get();
        }

        if($role==2){

            $data = requirementModel::join('requirement_type','requirement_type.RT_ID','=','requirement.RT_ID' )
                ->join('user','requirement.US_ID','=','user.id')
                ->join('unit_requirementtype','requirement.RT_ID','=','unit_requirementtype.RT_ID')
                ->where('unit_requirementtype.UN_ID',Auth::user()['UN_ID'])
                ->get();
        }
        return view('admin.DuyetYeuCau.duyet',['data'=> $data]);

    }
    public function postDuyetYeuCau(Request $request){
//        dd($request->all());
        switch ($request->input('action')) {
            case 'xacnhan':
                requirementModel::where('RQ_ID',$request->RQ_ID)
                    ->update([
                        'RQ_REPLY' => $request->mota,
                        'ST_ID' => 2
                    ]);
                break;

            case 'tuchoi':
                requirementModel::where('RQ_ID',$request->RQ_ID)
                    ->update([
                        'RQ_REPLY' => $request->mota,
                        'ST_ID' => 3
                    ]);
                break;

        }
        return redirect()->route('duyet');
    }

    public function xoa($id){
        requirementModel::where('RQ_ID',$id)->delete();
    }

}
