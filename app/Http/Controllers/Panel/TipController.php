<?php

namespace App\Http\Controllers\Panel;

use App\Http\Requests\UpdateTipRequest;
use App\Http\Requests\StoreTipRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleModel;
use App\Models\Vehicle;
use App\Models\Tip;

class TipController extends Controller
{
    public function index()
    {
        $tips = Tip::where('user_id', auth()->user()->id)->paginate(50);

        return view('panel.tips.index', compact('tips'));
    }

    public function create()
    {
        $vehicles = Vehicle::all();

        return view('panel.tips.create', compact('vehicles'));
    }

    public function store(StoreTipRequest $request)
    {
        try {
            $tip = new Tip();
            $tip->user_id = auth()->user()->id;
            $tip->vehicle_id = $request->vehicle;
            $tip->brand_id = $request->brand;
            $tip->model_id = $request->model;
            $tip->version = $request->version;
            $tip->tip = $request->tip;
            $tip->save();

            return redirect()->route('panel.tips.create')->with('success', 'Dica cadastrada com sucesso!')->withInput();
        } catch (\Throwable $th) {
            return redirect()->route('panel.tips.create')->with('error', 'Erro ao cadastrar dica!')->withInput();
        }
    }

    public function edit(Tip $tip)
    {
        abort_if($tip->user_id != auth()->user()->id, 404);

        $vehicles = Vehicle::all();

        return view('panel.tips.edit', compact('tip', 'vehicles'));
    }

    public function update(UpdateTipRequest $request, Tip $tip)
    {
        try {
            $tip->user_id = auth()->user()->id;
            $tip->vehicle_id = $request->vehicle;
            $tip->brand_id = $request->brand;
            $tip->model_id = $request->model;
            $tip->version = $request->version;
            $tip->tip = $request->tip;
            $tip->save();

            return redirect()->route('panel.tips.edit', $tip->id)->with('success', 'Dica atualizada com sucesso!')->withInput();
        } catch (\Throwable $th) {
            return redirect()->route('panel.tips.edit', $tip->id)->with('error', 'Erro ao atualizar dica!')->withInput();
        }
    }

    public function destroy(Tip $tip)
    {
        abort_if($tip->user_id != auth()->user()->id, 404);

        try {
            $tip->delete();

            return redirect()->route('panel.tips')->with('success', 'Dica excluída com sucesso!');
        } catch (\Throwable $th) {
            return redirect()->route('panel.tips')->with('error', 'Erro ao excluir dica!');
        }
    }

    public function fetchBrand(Request $request)
    {
        $brands = Vehicle::find($request->vehicle)->brands;
        return response()->json($brands);
    }

    public function fetchModel(Request $request)
    {
        $models = VehicleModel::where('vehicle_id', $request->vehicle)->where('brand_id', $request->brand)->get();
        return response()->json($models);
    }
}
