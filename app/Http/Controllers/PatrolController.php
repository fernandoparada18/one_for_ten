<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatrolRequest;
use App\Http\Requests\UpdatePatrolRequest;
use App\Repositories\PatrolRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PatrolController extends AppBaseController
{
    /** @var  PatrolRepository */
    private $patrolRepository;

    public function __construct(PatrolRepository $patrolRepo)
    {
        $this->patrolRepository = $patrolRepo;
    }

    /**
     * Display a listing of the Patrol.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patrols = $this->patrolRepository->all(['chief_id' => auth()->user()->chief->id]);

        if(auth()->user()->type == 'admin')
            $patrols = $this->patrolRepository->all();

        return view('patrols.index')
            ->with('patrols', $patrols);
    }

    /**
     * Show the form for creating a new Patrol.
     *
     * @return Response
     */
    public function create()
    {
        return view('patrols.create');
    }

    /**
     * Store a newly created Patrol in storage.
     *
     * @param CreatePatrolRequest $request
     *
     * @return Response
     */
    public function store(CreatePatrolRequest $request)
    {
        $input = $request->all();
	
        $input = array_add($input, 'chief_id', auth()->user()->chief->id);

        $patrol = $this->patrolRepository->create($input);

        Flash::success('Patrol saved successfully.');

        return redirect(route('patrols.index'));
    }

    /**
     * Display the specified Patrol.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patrol = $this->patrolRepository->find($id);

        if (empty($patrol)) {
            Flash::error('Patrol not found');

            return redirect(route('patrols.index'));
        }

        return view('patrols.show')->with('patrol', $patrol);
    }

    /**
     * Show the form for editing the specified Patrol.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patrol = $this->patrolRepository->find($id);

        if (empty($patrol)) {
            Flash::error('Patrol not found');

            return redirect(route('patrols.index'));
        }

        return view('patrols.edit')->with('patrol', $patrol);
    }

    /**
     * Update the specified Patrol in storage.
     *
     * @param int $id
     * @param UpdatePatrolRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatrolRequest $request)
    {
        $patrol = $this->patrolRepository->find($id);

        if (empty($patrol)) {
            Flash::error('Patrol not found');

            return redirect(route('patrols.index'));
        }

        $patrol = $this->patrolRepository->update($request->all(), $id);

        Flash::success('Patrol updated successfully.');

        return redirect(route('patrols.index'));
    }

    /**
     * Remove the specified Patrol from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patrol = $this->patrolRepository->find($id);

        if (empty($patrol)) {
            Flash::error('Patrol not found');

            return redirect(route('patrols.index'));
        }

        $this->patrolRepository->delete($id);

        Flash::success('Patrol deleted successfully.');

        return redirect(route('patrols.index'));
    }
}
