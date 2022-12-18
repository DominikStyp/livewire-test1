<div class="form-group" id="autocomplete-search">
    <div class="form-row">
        <div class="form-control">
                Search movie title:
                <input type="text" name="search" wire:model="search" />
                @if(!empty($titlesFiltered))
                    <div class="col-lg-12">
                        @foreach($titlesFiltered as $t)
                            <div class="row" style="background-color: #ffffff; border: 1px solid #d5d5d5; text-align: center; margin:0 auto; padding: 5px; align-items: center">
                                <a href="#" wire:click.prevent="clickSearchResult('{{ $t }}')" style="width: 100%">{{ $t }}</a>
                            </div>
                        @endforeach
                    </div>
                @endif
        </div>
    </div>
</div>
