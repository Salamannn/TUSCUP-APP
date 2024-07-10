<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class BadmintonController extends Controller
{
    // Data tim dan hasil pertandingan
    public function index()
    {
        $teams =  [
            'Ganda Campuran' => [
                'Grup A' => [
                    'TPA-S' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                    'FIF' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                    'FRI' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                ],
                'Grup B' => [
                    'TPA-T' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                    'FTE FEB' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                    'TPA-U' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                ],
            ],
            'Ganda Putra' => [
                'Grup A' => [
                    'TPA-S' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                    'FIF' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                    'FRI' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                ],
                'Grup B' => [
                    'TPA-T' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                    'FTE FEB' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                    'TPA-U' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                ],
            ],
            'Ganda Putri' => [
                'Grup A' => [
                    'TPA-S' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                    'FIF' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                    'FRI' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                ],
                'Grup B' => [
                    'TPA-T' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                    'FTE FEB' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                    'TPA-U' => ['points' => 0, 'matches' => 0, 'wins' => 0, 'draws' => 0, 'loses' => 0],
                ],
            ]
        ];

        // Ambil data dari file matches.json
        $data = Storage::disk('local')->get('matches.json');

        // Decode JSON menjadi array atau objek sesuai kebutuhan
        $matches = json_decode($data, true); // true untuk mendapatkan array associative
        //dd($matches);
        // Menghitung poin
        foreach ($matches as $match) {
            list($team1, $score1, $team2, $score2, $category, $group) = $match;
            // Debugging: tambahkan log untuk memeriksa setiap langkah dalam perhitungan poin
            Log::info('Calculating points for match:', [
                'team1' => $team1,
                'score1' => $score1,
                'team2' => $team2,
                'score2' => $score2,
                'group' => $group,
                'category' => $category,
            ]);

            $teams[$category][$group][$team1]['matches']++;
            $teams[$category][$group][$team2]['matches']++;

            if ($score1 > $score2) {
                // Tim 1 menang
                $teams[$category][$group][$team1]['points'] += 3;
                $teams[$category][$group][$team1]['wins']++;
                $teams[$category][$group][$team2]['loses']++;
            } elseif ($score1 < $score2) {
                // Tim 2 menang
                $teams[$category][$group][$team2]['points'] += 3;
                $teams[$category][$group][$team2]['wins']++;
                $teams[$category][$group][$team1]['loses']++;
            } else {
                // Seri
                $teams[$category][$group][$team1]['points'] += 1;
                $teams[$category][$group][$team2]['points'] += 1;
                $teams[$category][$group][$team1]['draws']++;
                $teams[$category][$group][$team2]['draws']++;
            }
        }
        //Log::info('Teams data sent to view:', $teams);
        //dd($teams);

        // Urutkan data berdasarkan poin
        foreach ($teams as $category => &$groups) {
            foreach ($groups as $group => &$teamData) {
                uasort($teamData, function ($teamA, $teamB) {
                    return $teamB['points'] <=> $teamA['points'];
                });
            }
        }
        return view('guest.grup.badminton', compact('teams'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'team1' => 'required|string',
            'score1' => 'required|integer',
            'team2' => 'required|string',
            'score2' => 'required|integer',
            'category' => 'required|string',
            'group' => 'required|string',
        ]);

        if (Storage::exists('matches.json')) {
            $matches = json_decode(Storage::get('matches.json'), true);
        } else {
            $matches = [];
        }
        // Tambahkan pertandingan baru ke data
        $matches[] = [
            $request->team1,
            $request->score1,
            $request->team2,
            $request->score2,
            $request->category,
            $request->group
        ];
        // Simpan data pertandingan ke session
        //session()->put('matches',$matches);
        //session(['matches' => $matches]);
        // Simpan ke dalam file (contoh: menggunakan storage Laravel)
        Storage::disk('local')->put('matches.json', json_encode($matches));
        return response()->json(['message' => 'Match added successfully']);
    }
}
