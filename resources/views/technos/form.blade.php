
<div class="form-group {{ $errors->has('titre') ? 'has-error' : '' }}">
    <label for="titre" class="col-md-2 control-label">Titre</label>
    <div class="col-md-10">
        <input class="form-control" name="titre" type="text" id="titre" value="{{ old('titre', optional($techno)->titre) }}" minlength="1" maxlength="255" required="true" placeholder="Enter titre here...">
        {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('domain_id') ? 'has-error' : '' }}">
    <label for="domain_id" class="col-md-2 control-label">Domain</label>
    <div class="col-md-10">
        <select class="form-control" id="domain_id" name="domain_id">
        	    <option value="" style="display: none;" {{ old('domain_id', optional($techno)->domain_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select domain</option>
        	@foreach ($domains as $key => $domain)
			    <option value="{{ $key }}" {{ old('domain_id', optional($techno)->domain_id) == $key ? 'selected' : '' }}>
			    	{{ $domain }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('domain_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

