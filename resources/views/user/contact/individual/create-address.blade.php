<div class="mt-8 px-6">
    <div class="flex justify-between lg:flex-row flex-col">
        <div class="lg:w-1/2 w-full ltr:lg:mr-6 rtl:lg:ml-6 mb-6">
            <div class="text-lg font-semibold">Endereço</div>
            <div class="mt-4 flex items-center">
                <label for="zip" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">CEP</label>
                <input id="zip" type="text" name="zip" value="{{ old('zip') }}" class="form-input flex-1" x-model="params.to.name" placeholder="Digite o CEP" />
            </div>
            <div class="flex items-center mt-4">
                <label for="country" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">País</label>
                <select id="country" name="country" value="{{ old('country') }}" class="form-select flex-1">
                    @foreach (Lang::get('geography/countries') as $key => $country)
                        <option value="{{ $country }}" @if (old('country', 'Brasil') == $country) selected @endif>{{ $country }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-4 flex items-center">
                <label for="state" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Estado</label>
                <input id="state" type="text" name="state" value="{{ old('state') }}" class="form-input flex-1" placeholder="Digite o Estado" />
            </div>
            <div class="mt-4 flex items-center">
                <label for="city" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Cidade</label>
                <input id="city" type="text" name="city" value="{{ old('city') }}" class="form-input flex-1" placeholder="Digite a Cidade" />
            </div>
            <div class="flex items-center mt-4">
                <label for="address" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Endereço</label>
                <input id="address" type="text" name="address" value="{{ old('address') }}" class="form-input flex-1" placeholder="Digite o endereço" />
            </div>
            <div class="flex items-center mt-4">
                <label for="number" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Número</label>
                <input id="number" type="text" name="number" value="{{ old('number') }}" class="form-input flex-1" placeholder="Digite o número" />
            </div>
            <div class="flex items-center mt-4">
                <label for="complement" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Complemento</label>
                <input id="complement" type="text" name="complement" value="{{ old('complement') }}" class="form-input flex-1" placeholder="Digite o complemento" />
            </div>
        </div>
        <div class="lg:w-1/2 w-full">
            <div class="text-lg font-semibold">Outros</div>
            <div class="flex items-center mt-4">
                <label for="active" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Status</label>
                <select id="active" name="active" value="{{ old('active') }}" class="form-select flex-1">
                    @foreach (Lang::get('contacts/individual.status') as $key => $value)
                        <option value="{{ $key }}" @if (old('active', 1) == $key) selected @endif>{{ $value['value'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center mt-4">
                <label for="password" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Senha</label>
                <input id="password" type="password" name="password" value="{{ old('password') }}" class="form-input flex-1" placeholder="Digite a senha" />
            </div>

            <div class="flex items-center mt-4">
                <label for="password_confirmation" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Repetir Senha</label>
                <input id="password_confirmation" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-input flex-1" placeholder="Repetir senha" />
            </div>

            <div class="flex items-center mt-4">
                <label for="comment" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Comentário</label>
                <textarea id="comment" name="comment" rows="3" class="form-textarea flex-1" placeholder="Digite um comentário">{{ old('comment') }}</textarea>
            </div>

            <div class="mx-auto flex max-w-[900px] flex-col items-center gap-4 md:flex-row mt-8">
                <label for="types" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Tipos</label>
                @foreach (Lang::get('contacts/individual.type') as $key => $value)
                    <label class="flex items-center">
                        <input id="types" name="types[]" value="{{ $key }}" type="checkbox" class="form-checkbox flex-1" @if (is_array(old('types')) && in_array($key, old('types'))) checked @endif />
                        <span>{{ $value }}</span>
                    </label>
                @endforeach
            </div>

        </div>
    </div>
</div>
