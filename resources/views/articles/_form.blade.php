@php $article = $article ?? null; @endphp

<div>
    <label class="block text-sm font-medium mb-1">Дата (дд.мм.гггг)</label>
    <input type="text" name="date" value="{{ old('date', $article->date ?? '') }}"
           class="w-full border rounded px-3 py-2">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Название</label>
    <input type="text" name="name" value="{{ old('name', $article->name ?? '') }}"
           class="w-full border rounded px-3 py-2">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Превью-картинка</label>
    <select name="preview_image" class="w-full border rounded px-3 py-2">
        @foreach(['preview.jpg', 'preview_2.jpg'] as $img)
            <option value="{{ $img }}" @selected(old('preview_image', $article->preview_image ?? '') === $img)>{{ $img }}</option>
        @endforeach
    </select>
</div>

<div>
    <label class="block text-sm font-medium mb-1">Полная картинка</label>
    <select name="full_image" class="w-full border rounded px-3 py-2">
        @foreach(['full.jpeg', 'full_2.jpeg'] as $img)
            <option value="{{ $img }}" @selected(old('full_image', $article->full_image ?? '') === $img)>{{ $img }}</option>
        @endforeach
    </select>
</div>

<div>
    <label class="block text-sm font-medium mb-1">Краткое описание</label>
    <input type="text" name="shortDesc" value="{{ old('shortDesc', $article->shortDesc ?? '') }}"
           class="w-full border rounded px-3 py-2">
</div>

<div>
    <label class="block text-sm font-medium mb-1">Полный текст</label>
    <textarea name="desc" rows="6" class="w-full border rounded px-3 py-2">{{ old('desc', $article->desc ?? '') }}</textarea>
</div>