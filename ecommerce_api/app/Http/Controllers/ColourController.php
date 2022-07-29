<?php

namespace App\Http\Controllers;

use App\Models\Colour;
use Illuminate\Http\Request;

class ColourController extends Controller
{
    /**
     * Get the current colour of app
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colour = Colour::all()->first();
        $response = [
            'colour' => $colour->colour
        ];
        return response()->json($response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $colour = Colour::all()->first();
            $colour->update($request->all());
        }
        catch(ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Colour not found.',
                'detail' => $e->getMessage()
            ], 404);
        }
        $response = [
            'colour' => $colour->colour
        ];
        return response()->json($response);
    }
}
