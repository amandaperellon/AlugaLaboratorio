@extends('principal')
@section('conteudo')
<h4>Nova Alocação</h4>
<form action="/alocacao/adiciona/<?=$locacao_id?>">
  <div class="form-group">
    <label>Entre com a data desejada:</label>
    <br><br><br>
    <input class="form-control datepicker" type="date" name="data">
  </div>
  <div class="form-group">
    <label>Aula Início:</label>
    <br><br><br>
    <select class="custom-select mr-sm-2" name="inicio">
    <option value="1">M1</option>
        <option value="2">M2</option>
        <option value="3">M3</option>
        <option value="4">M4</option>
        <option value="5">M5</option>
        <option value="6">M6</option>
        <option value="7">V1</option>
        <option value="8">V2</option>
        <option value="9">V3</option>
        <option value="10">V4</option>
        <option value="11">V5</option>
        <option value="12">V6</option>
        <option value="13">N1</option>
        <option value="14">N2</option>
        <option value="15">N3</option>
        <option value="16">N4</option>
        <option value="17">N5</option>
            <option value="N5">N5</option>
    </select>
  </div>
  <div class="form-group">
    <label>Aula Fim:</label>
    <br><br><br>
    <select class="custom-select mr-sm-2" name="fim">
        <option value="1">M1</option>
        <option value="2">M2</option>
        <option value="3">M3</option>
        <option value="4">M4</option>
        <option value="5">M5</option>
        <option value="6">M6</option>
        <option value="7">V1</option>
        <option value="8">V2</option>
        <option value="9">V3</option>
        <option value="10">V4</option>
        <option value="11">V5</option>
        <option value="12">V6</option>
        <option value="13">N1</option>
        <option value="14">N2</option>
        <option value="15">N3</option>
        <option value="16">N4</option>
        <option value="17">N5</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Alocar</button>
</form>
@stop