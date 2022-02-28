
<div class="form-group {{ $errors->has('titre') ? 'has-error' : '' }}">
    <label for="titre" class="col-md-2 control-label">Titre</label>
    <div class="col-md-10">
        <input class="form-control" name="titre" type="text" id="titre" value="{{ old('titre', optional($certif)->titre) }}" minlength="1" maxlength="255" required="true" placeholder="Enter titre here...">
        {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
    </div>
</div>

