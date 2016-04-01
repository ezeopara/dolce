<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Create$Ercas$Request;
use App\Http\Requests\Update$Ercas$Request;
use App\Repositories\$Ercas$Repository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class $Ercas$Controller extends AppBaseController
{
    /** @var  $Ercas$Repository */
    private $$Ercas$Repository;

    public function __construct($Ercas$Repository $$Ercas$Repo)
    {
        $this->$Ercas$Repository = $$Ercas$Repo;
    }

    /**
     * Display a listing of the $Ercas$.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->$Ercas$Repository->pushCriteria(new RequestCriteria($request));
        $$Ercas$s = $this->$Ercas$Repository->all();

        return view('$Ercas$s.index')
            ->with('$Ercas$s', $$Ercas$s);
    }

    /**
     * Show the form for creating a new $Ercas$.
     *
     * @return Response
     */
    public function create()
    {
        return view('$Ercas$s.create');
    }

    /**
     * Store a newly created $Ercas$ in storage.
     *
     * @param Create$Ercas$Request $request
     *
     * @return Response
     */
    public function store(Create$Ercas$Request $request)
    {
        $input = $request->all();

        $$Ercas$ = $this->$Ercas$Repository->create($input);

        Flash::success('$Ercas$ saved successfully.');

        return redirect(route('$Ercas$s.index'));
    }

    /**
     * Display the specified $Ercas$.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $$Ercas$ = $this->$Ercas$Repository->findWithoutFail($id);

        if (empty($$Ercas$)) {
            Flash::error('$Ercas$ not found');

            return redirect(route('$Ercas$s.index'));
        }

        return view('$Ercas$s.show')->with('$Ercas$', $$Ercas$);
    }

    /**
     * Show the form for editing the specified $Ercas$.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $$Ercas$ = $this->$Ercas$Repository->findWithoutFail($id);

        if (empty($$Ercas$)) {
            Flash::error('$Ercas$ not found');

            return redirect(route('$Ercas$s.index'));
        }

        return view('$Ercas$s.edit')->with('$Ercas$', $$Ercas$);
    }

    /**
     * Update the specified $Ercas$ in storage.
     *
     * @param  int              $id
     * @param Update$Ercas$Request $request
     *
     * @return Response
     */
    public function update($id, Update$Ercas$Request $request)
    {
        $$Ercas$ = $this->$Ercas$Repository->findWithoutFail($id);

        if (empty($$Ercas$)) {
            Flash::error('$Ercas$ not found');

            return redirect(route('$Ercas$s.index'));
        }

        $$Ercas$ = $this->$Ercas$Repository->update($request->all(), $id);

        Flash::success('$Ercas$ updated successfully.');

        return redirect(route('$Ercas$s.index'));
    }

    /**
     * Remove the specified $Ercas$ from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $$Ercas$ = $this->$Ercas$Repository->findWithoutFail($id);

        if (empty($$Ercas$)) {
            Flash::error('$Ercas$ not found');

            return redirect(route('$Ercas$s.index'));
        }

        $this->$Ercas$Repository->delete($id);

        Flash::success('$Ercas$ deleted successfully.');

        return redirect(route('$Ercas$s.index'));
    }
}
