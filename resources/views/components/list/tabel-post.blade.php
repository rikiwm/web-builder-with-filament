@props(['data' => '', 'limit' => '', 'title' => null, 'class' => '','link' => null,'modelView' => ''])
@php
try {
    $img = array_filter($data['content'], fn($content) => $content['type'] === 'image');
    $img = array_map(function ($content) {
        return [
            'type' => $content['type'],
            'data' => [
                'content' => url('storage/' . ($content['data']['content'] ?? 'default.jpg')),
            ],
        ];
    }, $img);
    $img = array_values($img);
} catch (\Exception $th) {
    return $th;
}
  
@endphp

  <tr>
    <td class="p-4">{{ $data->title }}</td>
    <td class="p-4 text-end">
      <span class="inline-flex overflow-hidden rounded-md border-green-400 px-1 py-0.5 text-xs font-medium text-success bg-sky-800/20">
        @isset($data->image)
        <a href="{{ url('storage/'. $data->image) }}" class="" download target="_blank" >{{ $data->slug }}-Unduh</a>
        @else
        <a href="{{ $img[0]['data']['content'] ?? 'asd' }}" class="" download="{{ $data->slug }}_{{ date('d') }}" target="_blank" >{{ $data->slug }}- Unduh</a>
        @endisset
      </span>
    </td>
</tr> 