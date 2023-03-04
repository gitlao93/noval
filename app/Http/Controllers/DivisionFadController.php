<?php

namespace App\Http\Controllers;

use App\Models\Opcr;
use App\Models\Driver;
use App\Models\Measure;
use App\Models\Province;
use App\Models\AnnualTarget;
use Illuminate\Http\Request;
use App\Models\MonthlyTarget;

class DivisionFadController extends Controller
{
    public function bukidnunFadIndex() {

        $opcrs_active = Opcr::where('is_active', 1)->get();
        $provinces = Province::select('province_ID', 'province')
            ->orderBy('province_ID')
            ->get();

        $driversact = Driver::join('divisions', 'divisions.division_ID', '=', 'drivers.division_ID')
            ->whereHas('opcr', function ($query) use ($opcrs_active) {
                $query->whereIn('opcr_ID', $opcrs_active->pluck('opcr_ID'));
            })
            ->get(['drivers.*', 'divisions.division']);

        $measures = Measure::join('divisions', 'measures.division_ID', '=', 'divisions.division_ID')
            ->select('measures.*', 'divisions.division')
            ->get();

        $annual_targets = AnnualTarget::whereIn('measure_ID', $measures->pluck('measure_ID'))
            ->whereIn('province_ID', $provinces->pluck('province_ID'))
            ->get()
            ->groupBy(['measure_ID', 'province_ID']);

        $monthly_targets = MonthlyTarget::join('annual_targets', 'annual_targets.annual_target_ID', '=', 'monthly_targets.annual_target_ID')
            ->get(['monthly_targets.*', 'annual_targets.*'])
            ->groupBy(['month', 'annual_target_ID']);

            return view('division-fad-buk', compact('measures', 'provinces', 'annual_targets','driversact','monthly_targets'));

    }

    public function lanaoDNFadIndex() {

        $opcrs_active = Opcr::where('is_active', 1)->get();
        $provinces = Province::select('province_ID', 'province')
            ->orderBy('province_ID')
            ->get();

        $driversact = Driver::join('divisions', 'divisions.division_ID', '=', 'drivers.division_ID')
            ->whereHas('opcr', function ($query) use ($opcrs_active) {
                $query->whereIn('opcr_ID', $opcrs_active->pluck('opcr_ID'));
            })
            ->get(['drivers.*', 'divisions.division']);

        $measures = Measure::join('divisions', 'measures.division_ID', '=', 'divisions.division_ID')
            ->select('measures.*', 'divisions.division')
            ->get();

        $annual_targets = AnnualTarget::whereIn('measure_ID', $measures->pluck('measure_ID'))
            ->whereIn('province_ID', $provinces->pluck('province_ID'))
            ->get()
            ->groupBy(['measure_ID', 'province_ID']);

        $monthly_targets = MonthlyTarget::join('annual_targets', 'annual_targets.annual_target_ID', '=', 'monthly_targets.annual_target_ID')
            ->get(['monthly_targets.*', 'annual_targets.*'])
            ->groupBy(['month', 'annual_target_ID']);

            return view('division-fad-ldn', compact('measures', 'provinces', 'annual_targets','driversact','monthly_targets'));

    }

    public function misOrFadIndex() {

        $opcrs_active = Opcr::where('is_active', 1)->get();
        $provinces = Province::select('province_ID', 'province')
            ->orderBy('province_ID')
            ->get();

        $driversact = Driver::join('divisions', 'divisions.division_ID', '=', 'drivers.division_ID')
            ->whereHas('opcr', function ($query) use ($opcrs_active) {
                $query->whereIn('opcr_ID', $opcrs_active->pluck('opcr_ID'));
            })
            ->get(['drivers.*', 'divisions.division']);

        $measures = Measure::join('divisions', 'measures.division_ID', '=', 'divisions.division_ID')
            ->select('measures.*', 'divisions.division')
            ->get();

        $annual_targets = AnnualTarget::whereIn('measure_ID', $measures->pluck('measure_ID'))
            ->whereIn('province_ID', $provinces->pluck('province_ID'))
            ->get()
            ->groupBy(['measure_ID', 'province_ID']);

        $monthly_targets = MonthlyTarget::join('annual_targets', 'annual_targets.annual_target_ID', '=', 'monthly_targets.annual_target_ID')
            ->get(['monthly_targets.*', 'annual_targets.*'])
            ->groupBy(['month', 'annual_target_ID']);

            return view('division-fad-misor', compact('measures', 'provinces', 'annual_targets','driversact','monthly_targets'));

    }

    public function misOcFadIndex() {

        $opcrs_active = Opcr::where('is_active', 1)->get();
        $provinces = Province::select('province_ID', 'province')
            ->orderBy('province_ID')
            ->get();

        $driversact = Driver::join('divisions', 'divisions.division_ID', '=', 'drivers.division_ID')
            ->whereHas('opcr', function ($query) use ($opcrs_active) {
                $query->whereIn('opcr_ID', $opcrs_active->pluck('opcr_ID'));
            })
            ->get(['drivers.*', 'divisions.division']);

        $measures = Measure::join('divisions', 'measures.division_ID', '=', 'divisions.division_ID')
            ->select('measures.*', 'divisions.division')
            ->get();

        $annual_targets = AnnualTarget::whereIn('measure_ID', $measures->pluck('measure_ID'))
            ->whereIn('province_ID', $provinces->pluck('province_ID'))
            ->get()
            ->groupBy(['measure_ID', 'province_ID']);

        $monthly_targets = MonthlyTarget::join('annual_targets', 'annual_targets.annual_target_ID', '=', 'monthly_targets.annual_target_ID')
            ->get(['monthly_targets.*', 'annual_targets.*'])
            ->groupBy(['month', 'annual_target_ID']);

            return view('division-fad-misoc', compact('measures', 'provinces', 'annual_targets','driversact','monthly_targets'));

    }

    public function camiguinFadIndex() {

        $opcrs_active = Opcr::where('is_active', 1)->get();
        $provinces = Province::select('province_ID', 'province')
            ->orderBy('province_ID')
            ->get();

        $driversact = Driver::join('divisions', 'divisions.division_ID', '=', 'drivers.division_ID')
            ->whereHas('opcr', function ($query) use ($opcrs_active) {
                $query->whereIn('opcr_ID', $opcrs_active->pluck('opcr_ID'));
            })
            ->get(['drivers.*', 'divisions.division']);

        $measures = Measure::join('divisions', 'measures.division_ID', '=', 'divisions.division_ID')
            ->select('measures.*', 'divisions.division')
            ->get();

        $annual_targets = AnnualTarget::whereIn('measure_ID', $measures->pluck('measure_ID'))
            ->whereIn('province_ID', $provinces->pluck('province_ID'))
            ->get()
            ->groupBy(['measure_ID', 'province_ID']);

        $monthly_targets = MonthlyTarget::join('annual_targets', 'annual_targets.annual_target_ID', '=', 'monthly_targets.annual_target_ID')
            ->get(['monthly_targets.*', 'annual_targets.*'])
            ->groupBy(['month', 'annual_target_ID']);

            return view('division-fad-cam', compact('measures', 'provinces', 'annual_targets','driversact','monthly_targets'));

    }
}
