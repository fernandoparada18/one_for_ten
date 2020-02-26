<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateChiefRequest;
use App\Http\Requests\UpdateChiefRequest;
use App\Repositories\ChiefRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ChiefController extends AppBaseController
{
    /** @var  ChiefRepository */
    private $chiefRepository;

    public function __construct(ChiefRepository $chiefRepo)
    {
        $this->chiefRepository = $chiefRepo;
    }

    /**
     * Display a listing of the Chief.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $chiefs = $this->chiefRepository->all()->sortByDesc('id');

        return view('chiefs.index')
            ->with('chiefs', $chiefs);
    }

    /**
     * Show the form for creating a new Chief.
     *
     * @return Response
     */
    public function create()
    {
        return view('chiefs.create');
    }

    /**
     * Store a newly created Chief in storage.
     *
     * @param CreateChiefRequest $request
     *
     * @return Response
     */
    public function store(CreateChiefRequest $request)
    {
        $input = $request->all();

        $chief = $this->chiefRepository->create($input);

        Flash::success('Registro almacenado Correctamente.');

        return redirect(route('chiefs.index'));
    }

    /**
     * Display the specified Chief.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $chief = $this->chiefRepository->find($id);

        if (empty($chief)) {
            Flash::error('No se encuentra este registro');

            return redirect(route('chiefs.index'));
        }

        return view('chiefs.show')->with('chief', $chief);
    }

    /**
     * Show the form for editing the specified Chief.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $chief = $this->chiefRepository->find($id);

        if (empty($chief)) {
            Flash::error('No se encuentra este registro');

            return redirect(route('chiefs.index'));
        }

        return view('chiefs.edit')->with('chief', $chief);
    }

    /**
     * Update the specified Chief in storage.
     *
     * @param int $id
     * @param UpdateChiefRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateChiefRequest $request)
    {
        $chief = $this->chiefRepository->find($id);

        if (empty($chief)) {
            Flash::error('No se encuentra este registro');

            return redirect(route('chiefs.index'));
        }

        $chief = $this->chiefRepository->update($request->all(), $id);

        Flash::success('Registro Actualizado Correctamente.');

        return redirect(route('chiefs.index'));
    }

    /**
     * Remove the specified Chief from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $chief = $this->chiefRepository->find($id);

        if (empty($chief)) {
            Flash::error('No se encuentra este registro');

            return redirect(route('chiefs.index'));
        }

        $this->chiefRepository->delete($id);

        Flash::success('Registro Eliminado Correctamente.');

        return redirect(route('chiefs.index'));
    }

    public function approved($id)
    {
        $chief = $this->chiefRepository->find($id);

        if (empty($chief)) {
            Flash::error('No se encuentra este registro');

            return redirect(route('chiefs.index'));
        }

        $chief = $this->chiefRepository->update(['approved' => true], $id);

        Flash::success('Registro Aprobado.');

        return redirect(route('chiefs.index'));
    }
}
