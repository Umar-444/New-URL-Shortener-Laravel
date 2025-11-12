<?php

namespace App\Http\Controllers;

use App\ShortLink;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShortLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $row= DB::table('short_links')->latest()->first();
        return view('frontend.index',compact('row'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
            // Enhanced validation
            $request->validate([
                'link' => 'required|url|max:2048|regex:/^https?:\/\/.+/i',
            ]);

            $input['link'] = $request->link;

            // Generate unique code with collision detection
            do {
                $code = Str::random(6);
            } while (ShortLink::codeExists($code));

            $input['code'] = $code;

            $shortLink = ShortLink::create($input);

            // Return the short URL using the model's method
            return $shortLink->short_url;
        }

        return response()->json(['error' => 'Invalid request'], 400);
    }

    public function shortenLink($code)
    {
        // Use the model's method for better consistency
        $shortLink = ShortLink::findByCode($code);

        if (!$shortLink) {
            abort(404, 'Short link not found. The link may have expired or been deleted.');
        }

        // Track click (optional - you could add click tracking here later)
        // $shortLink->increment('clicks');

        return redirect($shortLink->link);
    }

    /**
     * Get statistics for a short link
     */
    public function stats($code)
    {
        $shortLink = ShortLink::findByCode($code);

        if (!$shortLink) {
            return response()->json(['error' => 'Link not found'], 404);
        }

        return response()->json([
            'code' => $shortLink->code,
            'original_url' => $shortLink->link,
            'short_url' => $shortLink->short_url,
            'created_at' => $shortLink->created_at,
            'clicks' => 0, // You can add click tracking later
        ]);
    }

    /**
     * Delete a short link (for admin purposes)
     */
    public function destroy($id)
    {
        $shortLink = ShortLink::find($id);

        if (!$shortLink) {
            return response()->json(['error' => 'Link not found'], 404);
        }

        $shortLink->delete();

        return response()->json(['message' => 'Link deleted successfully']);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

}
