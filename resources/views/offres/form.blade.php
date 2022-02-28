
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id" required="true">
        	    <option value="" style="display: none;" {{ old('user_id', optional($offre)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($users as $key => $user)
			    <option value="{{ $key }}" {{ old('user_id', optional($offre)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $user }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('poste') ? 'has-error' : '' }}">
    <label for="poste" class="col-md-2 control-label">Poste</label>
    <div class="col-md-10">
        <input class="form-control" name="poste" type="text" id="poste" value="{{ old('poste', optional($offre)->poste) }}" minlength="1" maxlength="255" required="true" placeholder="Enter poste here...">
        {!! $errors->first('poste', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('salaire') ? 'has-error' : '' }}">
    <label for="salaire" class="col-md-2 control-label">Salaire</label>
    <div class="col-md-10">
        <input class="form-control" name="salaire" type="text" id="salaire" value="{{ old('salaire', optional($offre)->salaire) }}" minlength="1" maxlength="255" required="true" placeholder="Enter salaire here...">
        {!! $errors->first('salaire', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('deadline') ? 'has-error' : '' }}">
    <label for="deadline" class="col-md-2 control-label">Deadline</label>
    <div class="col-md-10">
        <input class="form-control" name="deadline" type="text" id="deadline" value="{{ old('deadline', optional($offre)->deadline) }}" required="true" placeholder="Enter deadline here...">
        {!! $errors->first('deadline', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Description</label>
    <div class="col-md-10">
        <input class="form-control" name="description" type="text" id="description" value="{{ old('description', optional($offre)->description) }}" minlength="1" maxlength="255" required="true">
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

