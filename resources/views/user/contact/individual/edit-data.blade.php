<div class="mt-8 px-6">
    <div class="flex justify-between lg:flex-row flex-col">
        <div class="lg:w-1/2 w-full ltr:lg:mr-6 rtl:lg:ml-6 mb-6">
            <div class="text-lg font-semibold">Pessoal</div>
            <div class="mt-4 flex items-center">
                <label for="name" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Nome *</label>
                <input id="name" type="text" name="name" value="{{ old('name', $contactIndividual->name) }}" class="form-input flex-1" placeholder="Digite o nome *" required />
            </div>
            <div class="mt-4 flex items-center">
                <label for="cpf" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">CPF</label>
                <input id="cpf" type="cpf" name="cpf" value="{{ old('cpf', $contactIndividual->cpf) }}" class="form-input flex-1" placeholder="Digite o CPF" />
            </div>
            <div class="flex items-center mt-4">
                <label for="gender" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Sexo</label>
                <select id="gender" name="gender" class="form-select flex-1">
                    @foreach (Lang::get('contacts/individual.gender') as $key => $value)
                        <option value="{{ $key }}" @if (old('gender', $contactIndividual->gender) == $key) selected @endif>{{ $value['value'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-4 flex items-center">
                <label for="birth_date" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Aniversário</label>
                <input id="birth_date" type="date" name="birth_date" value="{{ old('birth_date', $contactIndividual->birth_date ? $contactIndividual->birth_date->format('Y-m-d') : '') }}" class="form-input flex-1" placeholder="Digite a data de aniversário" />
            </div>


        </div>
        <div class="lg:w-1/2 w-full">
            <div class="text-lg font-semibold">Contato</div>
            <div class="flex items-center mt-4">
                <label for="whatsapp" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Whatsapp *</label>
                <input id="whatsapp" type="text" name="whatsapp" value="{{ old('whatsapp', $contactIndividual->whatsapp) }}" placeholder="Digite o Whatsapp * (99) 99999-9999" class="form-input flex-1" x-mask="(99) 99999-9999" required />
            </div>
            <div class="flex items-center mt-4">
                <label for="phone" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Fixo</label>
                <input id="phone" type="text" name="phone" value="{{ old('phone', $contactIndividual->phone) }}" class="form-input flex-1" placeholder="Digite o telefone fixo" />
            </div>
            <div class="flex items-center mt-4">
                <label for="email" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email', $contactIndividual->email) }}" class="form-input flex-1" placeholder="Digite o email" />
            </div>
        </div>
    </div>
</div>
