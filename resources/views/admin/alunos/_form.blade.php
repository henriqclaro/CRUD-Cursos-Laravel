<div class="input-field">
    <input type="text" name="nome" value="{{ isset($linha->titulo) ? $linha->titulo : '' }}">
    <label>Nome</label>
</div>
<div class="input-field">
    <input type="tel" name="celular" value="{{ isset($linha->descricao) ? $linha->descricao : '' }}">
    <label>Celular</label>
</div>

<select name="curso_id" id="curso_id" class="input-field" required>
    <option value="">-- Selecione um curso --</option>

    @foreach ($cursos as $curso)
        <option value="{{ $curso->id }}">
            {{ $curso->titulo }}
        </option>
    @endforeach
</select>
<label>Curso</label>

<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="arquivo">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
@if (isset($linha->imagem))
    <div class="input-field">
        <img width="150" src="{{ asset($linha->imagem) }}" />
    </div>
@endif
