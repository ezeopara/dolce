<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateErcasRequest;
use App\Http\Requests\UpdateErcasRequest;
use App\Repositories\ErcasRepository;
use Illuminate\Http\Request;
use Flash;
use Session;
use App\Models\Ercas;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ErcasController extends AppBaseController
{
    /** @var  ErcasRepository */
    private $ercasRepository;

    public function __construct(ErcasRepository $ercasRepo)
    {
        $this->ercasRepository = $ercasRepo;
    }

    /**
     * Display a listing of the Ercas.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

           
    }

    /**
     * Show the form for creating a new Ercas.
     *
     * @return Response
     */
    public function create()
    {
        return view('ercas.create');
    }

    /**
     * Store a newly created Ercas in storage.
     *
     * @param CreateErcasRequest $request
     *
     * @return Response
     */
    public function store(CreateErcasRequest $request)
    {
//        $input = $request->all();
//
//        $ercas = $this->ercasRepository->create($input);
//
//        Flash::success('Ercas saved successfully.');
//
//        return redirect(route('ercas.index'));
        $user = Ercas::where('username',$request['email'])->first();
        if ($user['username'] == $request['email']) {
            Session::put('key',$user['username']);
            return redirect('register/user');
        } else{
            Session::flash('message','Invalid User identification');
            return redirect('register');
        }
    }

    /**
     * Display the specified Ercas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ercas = $this->ercasRepository->findWithoutFail($id);

        if (empty($ercas)) {
            Flash::error('Ercas not found');

            return redirect(route('ercas.index'));
        }

        return view('ercas.show')->with('ercas', $ercas);
    }

    /**
     * Show the form for editing the specified Ercas.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ercas = $this->ercasRepository->findWithoutFail($id);

        if (empty($ercas)) {
            Flash::error('Ercas not found');

            return redirect(route('ercas.index'));
        }

        return view('ercas.edit')->with('ercas', $ercas);
    }

    /**
     * Update the specified Ercas in storage.
     *
     * @param  int              $id
     * @param UpdateErcasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateErcasRequest $request)
    {
        $ercas = $this->ercasRepository->findWithoutFail($id);

        if (empty($ercas)) {
            Flash::error('Ercas not found');

            return redirect(route('ercas.index'));
        }

        $ercas = $this->ercasRepository->update($request->all(), $id);

        Flash::success('Ercas updated successfully.');

        return redirect(route('ercas.index'));
    }

    /**
     * Remove the specified Ercas from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ercas = $this->ercasRepository->findWithoutFail($id);

        if (empty($ercas)) {
            Flash::error('Ercas not found');

            return redirect(route('ercas.index'));
        }

        $this->ercasRepository->delete($id);

        Flash::success('Ercas deleted successfully.');

        return redirect(route('ercas.index'));
    }
}
