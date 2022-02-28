
<div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
    <label for="nom" class="col-md-2 control-label">Nom</label>
    <div class="col-md-10">
        <input class="form-control" name="nom" type="text" id="nom" value="{{ old('nom', optional($user)->nom) }}" minlength="1" maxlength="255" required="true" placeholder="Enter nom here...">
        {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('prenom') ? 'has-error' : '' }}">
    <label for="prenom" class="col-md-2 control-label">Prenom</label>
    <div class="col-md-10">
        <input class="form-control" name="prenom" type="text" id="prenom" value="{{ old('prenom', optional($user)->prenom) }}" minlength="1" maxlength="255" required="true" placeholder="Enter prenom here...">
        {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
        <input class="form-control" name="email" type="text" id="email" value="{{ old('email', optional($user)->email) }}" minlength="1" maxlength="255" required="true" placeholder="Enter email here...">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email_verified_at') ? 'has-error' : '' }}">
    <label for="email_verified_at" class="col-md-2 control-label">Email Verified At</label>
    <div class="col-md-10">
        <input class="form-control" name="email_verified_at" type="text" id="email_verified_at" value="{{ old('email_verified_at', optional($user)->email_verified_at) }}" placeholder="Enter email verified at here...">
        {!! $errors->first('email_verified_at', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
    <label for="password" class="col-md-2 control-label">Password</label>
    <div class="col-md-10">
        <input class="form-control" name="password" type="text" id="password" value="{{ old('password', optional($user)->password) }}" minlength="1" maxlength="255" required="true" placeholder="Enter password here...">
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('avatar') ? 'has-error' : '' }}">
    <label for="avatar" class="col-md-2 control-label">Avatar</label>
    <div class="col-md-10">
        <input class="form-control" name="avatar" type="text" id="avatar" value="{{ old('avatar', optional($user)->avatar) }}" minlength="1" maxlength="255" required="true">
        {!! $errors->first('avatar', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
    <label for="phone" class="col-md-2 control-label">Phone</label>
    <div class="col-md-10">
        <input class="form-control" name="phone" type="text" id="phone" value="{{ old('phone', optional($user)->phone) }}" minlength="1" maxlength="255" required="true" placeholder="Enter phone here...">
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('remember_token') ? 'has-error' : '' }}">
    <label for="remember_token" class="col-md-2 control-label">Remember Token</label>
    <div class="col-md-10">
        <input class="form-control" name="remember_token" type="text" id="remember_token" value="{{ old('remember_token', optional($user)->remember_token) }}" maxlength="100" placeholder="Enter remember token here...">
        {!! $errors->first('remember_token', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('niveau') ? 'has-error' : '' }}">
    <label for="niveau" class="col-md-2 control-label">Niveau</label>
    <div class="col-md-10">
        <input class="form-control" name="niveau" type="text" id="niveau" value="{{ old('niveau', optional($user)->niveau) }}" maxlength="255" placeholder="Enter niveau here...">
        {!! $errors->first('niveau', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('cin') ? 'has-error' : '' }}">
    <label for="cin" class="col-md-2 control-label">Cin</label>
    <div class="col-md-10">
        <input class="form-control" name="cin" type="number" id="cin" value="{{ old('cin', optional($user)->cin) }}" min="-2147483648" max="2147483647" placeholder="Enter cin here...">
        {!! $errors->first('cin', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('post') ? 'has-error' : '' }}">
    <label for="post" class="col-md-2 control-label">Post</label>
    <div class="col-md-10">
        <input class="form-control" name="post" type="text" id="post" value="{{ old('post', optional($user)->post) }}" maxlength="255" placeholder="Enter post here...">
        {!! $errors->first('post', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('cv') ? 'has-error' : '' }}">
    <label for="cv" class="col-md-2 control-label">Cv</label>
    <div class="col-md-10">
        <input class="form-control" name="cv" type="text" id="cv" value="{{ old('cv', optional($user)->cv) }}" maxlength="255" placeholder="Enter cv here...">
        {!! $errors->first('cv', '<p class="help-block">:message</p>') !!}
    </div>
</div>

