@csrf
<div class="form-group col-12">
    <label for="name">Name</label>
    <input class="form-control @error('name') is-invalid @enderror"
        type="text"
        name="name"
        id="name"
        placeholder="Enter name here"
        value="{{ old('name') ?? $customer->name }}"
        autocomplete="off"
        autofocus
    >

    @error('name')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group col-12">
    <label for="email">Email</label>
    <input class="form-control @error('email') is-invalid @enderror"
        type="email"
        name="email"
        id="email"
        placeholder="Enter email here"
        value="{{ old('email') ?? $customer->email }}"
        autocomplete="off"
    >

    @error('email')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group col-12">
    <label for="phone">Phone</label>
    <input class="form-control @error('phone') is-invalid @enderror"
        type="tel"
        name="phone"
        id="phone"
        placeholder="Phone Format: 0123-1234567"
        {{-- pattern="[0]{1}[1-9]{3}[-]{1}[0-9]{7}" --}}
        maxlength="20"
        value="{{ old('phone') ?? $customer->phone }}"
        autocomplete="off"
    >

    @error('phone')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group col-12">
    <label for="company_id">Company</label>
    <select class="form-control @error('company_id') is-invalid @enderror" name="company_id" id="company_id">
        <option value="" disabled selected>Select company</option>
        @foreach ($companies as $company)
            <option {{ ($company->id === $customer->company_id || $company->id == old('company_id')) ? 'selected' : null  }} value="{{ $company->id }}">{{ $company->name }}</option>
        @endforeach
    </select>
    @error('company_id')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group col-12">
    <label for="active">Stauts</label>
    <select class="form-control @error('active') is-invalid @enderror" name="active" id="active">
        <option value="" disabled selected>Select status</option>
        @foreach ($customer->activeOptions() as $key=>$value)
            <option value="{{ $key }}" {{ $customer->active === $value || old('active') == (string)$key ? 'selected' : null }}>{{ $value }}</option>
        @endforeach
    </select>
    @error('active')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group col-12">
    <button class="btn btn-primary" type="submit">{{ $action }} Customer</button>
</div>
