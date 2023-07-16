@extends('layouts.main')

@section('container')
    <table>
        <tr>
            <th scope="col">NPS</th>
            <th scope="col">Nama</th>
            <th scope="col">Angkatan</th>
            <th scope="col">Semester</th>
        </tr>
        @foreach ($mahasantris as $mahasantri)
            <tr>
                <td class="">{{ $mahasantri->nps }}</td>
                <td>{{ $mahasantri->name }}</td>
                <td>{{ $mahasantri->angkatan }}</td>
                <td>{{ $mahasantri->semester }}</td>
            </tr>
        @endforeach
    </table>
@endsection
