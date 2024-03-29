@php
/** @var \App\Models\BlogPost $item */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Сохранить </button>
            </div>
        </div>
    </div>
</div><br>
@if($item->exists)
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="list-unstyled">
                    <li>ID:{{ $item->id }}</li>
                </ul>
            </div>
        </div>
    </div>
</div><br>


<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    {{ $item->deleted_at }}
                    <label for="title"> Создано</label>
                    <input type="text" value="{{ $item->created_at }}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    {{ $item->deleted_at }}
                    <label for="title"> Изменено</label>
                    <input type="text" value="{{ $item->updated_at }}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    {{ $item->deleted_at }}
                    <label for="title"> Опубликованно</label>
                    <input type="text" value="{{ $item->published_at }}" class="form-control" disabled>
                </div>
                <div class="form-group">
                    {{ $item->deleted_at }}
                    <label for="title"> Удалено</label>
                    <input type="text" value="{{ $item->deleted_at }}" class="form-control" disabled>
                </div>
            </div>
        </div>
    </div>
</div><br>
@endif
<script>
    import Index from "../../../../../../public/index.html";
    export default {
        components: {Index}
    }
</script>