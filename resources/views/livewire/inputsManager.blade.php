<div class="form-group">
     @foreach($inputs as $key => $input)
        <div class="form-row">
            <div class="form-control">
                <label>
                    Input {{ $key }}:
                    <input type="text" name="input_{{$key}}" value="{{ $input }}" wire:model.defer="inputs.{{$key}}" wire:change="$refresh" />
                    <button class="btn-danger" wire:click="removeField({{$key}})">DELETE</button>
                </label>
            </div>
        </div>
    @endforeach
    <div class="form-row">
        <div class="form-control">
            <button class="btn-success" wire:click="addField('')">ADD INPUT</button>
        </div>
    </div>
</div>
