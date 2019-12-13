<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\UsersModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class UsersController
 * @package App\Http\Controllers\Admin
 */
class UsersController extends Controller
{

    /**
     * list
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getList(Request $request)
    {
        $cond = $request->json()->all();
        $ret  = UsersModel::getListPaging($cond);
        return response()->json([
            'ret'     => 0,
            'errcode' => 0,
            'msg'     => 'success',
            'data'    => $ret
        ])->withHeaders([
            'Access-Control-Allow-Origin' => '*'
        ]);
    }


    /**
     *
     * detail
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDetail(Request $request)
    {
        $id = $request->json()->get('id');

        $ret = UsersModel::getDetailById($id);

        return response()->json([
            'ret'     => 0,
            'errcode' => 0,
            'msg'     => 'success',
            'data'    => $ret
        ])->withHeaders([
            'Access-Control-Allow-Origin' => '*'
        ]);
    }

    /**
     * save
     *
     * @param Request $request
     */
    public function save(Request $request)
    {
        $params = $request->json()->all();

        $ret = UsersModel::handleSave($params);

        return response()->json([
            'ret'     => 0,
            'errcode' => 0,
            'msg'     => 'success',
            'data'    => $ret
        ])->withHeaders([
            'Access-Control-Allow-Origin' => '*'
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        $id = $request->json()->get('id');

        $ret = UsersModel::deleteById($id);

        return response()->json([
            'ret'     => 0,
            'errcode' => 0,
            'msg'     => 'success',
            'data'    => $ret
        ])->withHeaders([
            'Access-Control-Allow-Origin' => '*'
        ]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function batchDelete(Request $request)
    {
        $ids = $request->json()->get('ids');

        $ret = UsersModel::batchDelete($ids);

        return response()->json([
            'ret'     => 0,
            'errcode' => 0,
            'msg'     => 'success',
            'data'    => $ret
        ])->withHeaders([
            'Access-Control-Allow-Origin' => '*'
        ]);
    }


}
