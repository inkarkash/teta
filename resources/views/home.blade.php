@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Добавление нового спонсора</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/addPayment') }}">
                        {!! csrf_field() !!}
                        <input type="hidden" id="token" ng-model="csrf_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Выберите категорию</label>
                            <div class="col-md-6">
                                <select class="form-control" name="name_type" ng-model="opt" value="{{ old('name_type') }}">
                                    <option value="1">Юр.лицо</option>
                                    <option value="2">Физ.лицо</option>
                                </select>
                                @if ($errors->has('name_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div ng-if="opt" class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label ng-if="opt==='2'" class="col-md-4 control-label">ФИО физ.лица</label>
                            <label ng-if="opt==='1'" class="col-md-4 control-label">Название компании</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                <label for="showName" class="col-md-4">Скрыть</label>
                                <input id="showName" сlass="col-md-8" ng-model="showFund"  type="checkbox" name="showFund" value="{{ old('showName') }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail адрес</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" ng-model="email"  name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div ng-if="opt==='1'" class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Лого сайта</label>
                            <div class="col-md-6">
                                <input type="url" class="form-control" ng-model="logo"  name="logo" value="{{ old('logo') }}">
                                @if ($errors->has('logo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('logo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div ng-if="opt==='1'" class="form-group{{ $errors->has('link_site') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Адрес сайта</label>
                            <div class="col-md-6">
                                <input type="url" class="form-control" ng-model="link_site" name="link_site" value="{{ old('link_site') }}">
                                @if ($errors->has('link_site'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('link_site') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('fund') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Сумма средств</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="fund" ng-model="fund" placeholder="Сумма в тенге" value="{{ old('fund') }}">
                                <label for="showFund" class="col-md-4">Скрыть</label>
                                <input id="showFund" сlass="col-md-8" type="checkbox" name="showFund" ng-model="showFund" value="{{ old('showFund') }}">
                                @if ($errors->has('fund'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Добавить
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" class="btn btn-primary" ng-click="sendPayment()">
                                    <i class="fa fa-btn fa-user"></i>Добавить angular
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
