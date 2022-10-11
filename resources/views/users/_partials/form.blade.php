@csrf
<div class="row g-12">
    <div class="col-4">
      <label for="firstName" class="form-label">Nome</label>
      <input type="text" class="form-control" name="name" placeholder="" value="{{ $user->name ?? old('name') }}" required>
      <div class="invalid-feedback">
        Valid first name is required.
      </div>
    </div>

    <div class="col-4">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" placeholder="you@example.com" value="{{ $user->email ?? old('email') }}">
      <div class="invalid-feedback">
        Please enter a valid email address for shipping updates.
      </div>
    </div>

    <div class="col-4">
        <label for="lastName" class="form-label">Senha<span class="text-muted">(Optional)</span></label>
        <input type="password" class="form-control" name="password" placeholder="Senha">
        <div class="invalid-feedback">
          Valid Senha is required.
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary">Enviar</button>

