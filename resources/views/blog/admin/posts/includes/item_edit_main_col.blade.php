@php
/** @var \App\Models\BlogPost $item */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @if ($item->is_published)
                Is puplished
                @else
                Not published
                @endif
            </div>
        </div>
        <div class="card-body">
            <div class="card-title"></div>
            <div class="card-subtitle mb-2 text-muted"></div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a href="#maindata" data-toggle='tab' role='tab' class="nav-link active">Main
                        data</a></li>
                <li class="nav-item"><a href="#adddata" data-toggle='tab' role='tab' class="nav-link">Add data</a></li>
            </ul>
            <br>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="maindata" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="form-group">
                        <label for='title'>Заголовок</label>
                        <input name="title" value="{{$item->title}}" id="title" type="text" class="form-control"
                            minlength="3" required>
                    </div>
                    <div class="form-group">
                        <label for='content_raw'>Заголовок</label>
                        <textarea name="content_raw" id="content_raw" class="form-control" rows="20">{{old('content_raw', $item->content_raw)}}
                    </textarea>
                    </div>

                </div>
                <div class="tab-pane fade show active" id="adddata" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="form-group">
                        <label for='category_id'>Категория</label>
                        <select name="category_id" id="category_id" class="form-control"
                            placeholder="Выбирите категорию" required>
                            @foreach($categoryList as $categoryOption)
                            <option value="{{$categoryOption->id}}" @if ($categoryOption->id == $item->category_id)
                                selected
                                @endif>
                                {{$categoryOption->id_title}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for='slug'>Идентификатор</label>
                        <input name="title" value="{{$item->slug}}" id="slug" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for='excerpt'>Выдержка</label>
                        <textarea name="excerpt" id="excerpt" class="form-control" rows="3">{{old('excerpt', $item->excerpt)}}
                        </textarea>
                    </div>

                    <div class="form-checks">
                        <input name="is_published" value='0' type="hidden">

                        <input name="is_published" type="checkbox" value="{{$item->is_published}}"
                            class="form-check-input" @if ($item->is_published)
                        checked='checked'
                        @endif
                        >
                        <label class="form-check-label" for="is_published">Опубликованно</label>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    import Index from "../../../../../../public/index.html";
    export default {
        components: {Index}
    }
</script>