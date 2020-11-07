<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateprofesRequest;
use App\Http\Requests\UpdateprofesRequest;
use App\Repositories\profesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class profesController extends AppBaseController
{
    /** @var  profesRepository */
    private $profesRepository;

    public function __construct(profesRepository $profesRepo)
    {
        $this->profesRepository = $profesRepo;
    }

    /**
     * Display a listing of the profes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $profes = $this->profesRepository->all();

        return view('profes.index')
            ->with('profes', $profes);
    }

    /**
     * Show the form for creating a new profes.
     *
     * @return Response
     */
    public function create()
    {
        return view('profes.create');
    }

    /**
     * Store a newly created profes in storage.
     *
     * @param CreateprofesRequest $request
     *
     * @return Response
     */
    public function store(CreateprofesRequest $request)
    {
        $input = $request->all();

        $profes = $this->profesRepository->create($input);

        Flash::success('Profe saved successfully.');

        return redirect(route('profes.index'));
    }

    /**
     * Display the specified profes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $profes = $this->profesRepository->find($id);

        if (empty($profes)) {
            Flash::error('Profes not found');

            return redirect(route('profes.index'));
        }

        return view('profes.show')->with('profes', $profes);
    }

    /**
     * Show the form for editing the specified profes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $profes = $this->profesRepository->find($id);

        if (empty($profes)) {
            Flash::error('Profe not found');

            return redirect(route('profes.index'));
        }

        return view('profes.edit')->with('profes', $profes);
    }

    /**
     * Update the specified profes in storage.
     *
     * @param int $id
     * @param UpdateprofesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprofesRequest $request)
    {
        $profes = $this->profesRepository->find($id);

        if (empty($profes)) {
            Flash::error('Profe not found');

            return redirect(route('profes.index'));
        }

        $profes = $this->profesRepository->update($request->all(), $id);

        Flash::success('Profe updated successfully.');

        return redirect(route('profes.index'));
    }

    /**
     * Remove the specified profes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $profes = $this->profesRepository->find($id);

        if (empty($profes)) {
            Flash::error('Profe not found');

            return redirect(route('profes.index'));
        }

        $this->profesRepository->delete($id);

        Flash::success('Profe deleted successfully.');

        return redirect(route('profes.index'));
    }
}
