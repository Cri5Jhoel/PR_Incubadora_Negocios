@extends('layouts.app')
@section('script')

@stop
@section('content')
<script type="text/javascript">
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $http) {

        $scope.forms = {};

        $scope.input1 = "";
        $scope.input2 = "";
        $scope.input3 = "";
        $scope.input4 = "";
        $scope.input5 = "";
        $scope.input6 = "";
        $scope.input7 = "";
        $scope.input8 = "";
        $scope.input9 = "";
        $scope.input10 = "";
        $scope.input11 = "";
        $scope.input12 = "";
        $scope.input13 = "";
        $scope.input14 = "";
        $scope.input15 = "";
        $scope.input16 = "";
        $scope.input17 = "";
        $scope.input18 = "";
        $scope.input19 = "";
        $scope.input20 = "";
        $scope.input21 = "";
        $scope.input22 = "";
        $scope.input23 = "";
        $scope.input24 = "";
        $scope.input25 = "";
        $scope.input26 = "";
        $scope.input27 = "";
        $scope.input28 = "";
        $scope.input29 = "";
        $scope.input30 = "";
        $scope.input31 = "";
        $scope.input32 = "";
        $scope.input33 = "";
        $scope.input34 = "";
        $scope.input35 = "";
        $scope.input36 = "";
        $scope.input37 = "";
        $scope.input38 = "";
        $scope.input39 = "";
        $scope.input40 = "";
        $scope.input41 = "";
        $scope.input42 = "";
        $scope.input43 = "";
        $scope.input44 = "";
        $scope.input45 = "";
        $scope.input46 = "";
        $scope.input47 = "";
        $scope.input48 = "";
        $scope.input49 = "";
        $scope.input50 = "";
        $scope.input51 = "";
        $scope.input52 = "";
        $scope.input53 = "";
        $scope.input54 = "";
        $scope.input55 = "";
        $scope.input56 = "";
        $scope.input57 = "";
        $scope.input58 = "";
        $scope.input59 = "";
        $scope.input60 = "";
        $scope.input61 = "";
        $scope.input62 = "";
        $scope.input63 = "";
        $scope.input64 = "";
        $scope.input65 = "";
        $scope.input66 = "";
        $scope.input67 = "";
        $scope.input68 = "";
        $scope.input69 = "";
        $scope.input70 = "";
        $scope.input71 = "";
        $scope.input72 = "";
        $scope.input73 = "";
        $scope.input74 = "";
        $scope.input75 = "";
        $scope.input76 = "";
        $scope.input77 = "";
        $scope.input78 = "";
        $scope.input79 = "";
        $scope.input80 = "";
        $scope.input81 = "";
        $scope.input82 = "";
        $scope.input83 = "";
        $scope.input84 = "";
        $scope.input85 = "";
        $scope.input86 = "";
        $scope.input87 = "";
        $scope.input88 = "";
        $scope.input89 = "";
        $scope.input90 = "";
        $scope.input91 = "";
        $scope.input92 = "";
        $scope.input93 = "";
        $scope.input94 = "";
        $scope.input95 = "";
        $scope.input96 = "";
        $scope.input97 = "";
        $scope.input98 = "";
        $scope.input99 = "";
        $scope.input100 = "";
        $scope.input101 = "";
        $scope.input102 = "";
        $scope.input103 = "";
        $scope.input104 = "";
        $scope.input105 = "";
        $scope.input106 = "";
        $scope.input107 = "";
        $scope.input108 = "";
        $scope.input109 = "";
        $scope.input110 = "";
        $scope.input111 = "";
        $scope.input112 = "";
        $scope.input113 = "";
        $scope.input114 = "";
        $scope.input115 = "";
        $scope.input116 = "";
        $scope.input117 = "";
        $scope.input118 = "";
        $scope.input119 = "";
        $scope.input120 = "";
        $scope.input121 = "";
        $scope.input122 = "";
        $scope.input123 = "";
        $scope.input124 = "";
        $scope.input125 = "";
        $scope.input126 = "";
        $scope.input127 = "";
        $scope.input128 = "";
        $scope.input129 = "";
        $scope.input130 = "";
        $scope.input131 = "";
        $scope.input132 = "";
        $scope.input133 = "";
        $scope.input134 = "";
        $scope.input135 = "";
        $scope.input136 = "";
        $scope.input137 = "";
        $scope.input138 = "";
        $scope.input139 = "";
        $scope.input140 = "";
        $scope.input141 = "";
        $scope.input142 = "";
        $scope.input143 = "";
        $scope.input144 = "";
        $scope.input145 = "";
        $scope.input146 = "";
        $scope.input147 = "";
        $scope.input148 = "";
        $scope.input149 = "";
        $scope.input150 = "";
        $scope.input151 = "";
        $scope.input152 = "";
        $scope.input153 = "";
        $scope.input154 = "";
        $scope.input155 = "";
        $scope.input156 = "";
        $scope.input157 = "";
        $scope.input158 = "";
        $scope.input159 = "";
        $scope.input160 = "";
        $scope.input161 = "";
        $scope.input162 = "";
        $scope.input163 = "";
        $scope.input164 = "";
        $scope.input165 = "";
        $scope.input166 = "";
        $scope.input167 = "";
        $scope.input168 = "";
        $scope.input169 = "";
        $scope.input170 = "";
        $scope.input171 = "";
        $scope.input172 = "";
        $scope.input173 = "";
        $scope.input174 = "";
        $scope.input175 = "";
        $scope.input176 = "";
        

        angular.element(document).ready(() => {
            let teamId = 4;
            $http.get(`/forms2/${teamId}`).then((result) => {
                $scope.forms = result.data;
                $scope.parseArrayValues();
            })

            // $http.put('/forms', $scope.form).then((result) => {
            //     $scope.forms = result.data;
            //     $scope.parseArrayValues();
            // })
        });

        $scope.parseArrayValues = () => {
            let formText = $scope.forms.formText;
            let formTextArray = formText.split(';');
            $scope.input1 = formTextArray[0];
            $scope.input2 = formTextArray[1];
            $scope.input3 = formTextArray[2];
            $scope.input4 = formTextArray[3];
            $scope.input5 = formTextArray[4];
            $scope.input6 = formTextArray[5];
            $scope.input7 = formTextArray[6];
            $scope.input8 = formTextArray[7];
            $scope.input9 = formTextArray[8];
            $scope.input10 = formTextArray[9];
            $scope.input11 = formTextArray[10];
            $scope.input12 = formTextArray[11];
            $scope.input13 = formTextArray[12];
            $scope.input14 = formTextArray[13];
            $scope.input15 = formTextArray[14];
            $scope.input16 = formTextArray[15];
            $scope.input17 = formTextArray[16];
            $scope.input18 = formTextArray[17];
            $scope.input19 = formTextArray[18];
            $scope.input20 = formTextArray[19];
            $scope.input21 = formTextArray[20];
            $scope.input22 = formTextArray[21];
            $scope.input23 = formTextArray[22];
            $scope.input24 = formTextArray[23];
            $scope.input25 = formTextArray[24];
            $scope.input26 = formTextArray[25];
            $scope.input27 = formTextArray[26];
            $scope.input28 = formTextArray[27];
            $scope.input29 = formTextArray[28];
            $scope.input30 = formTextArray[29];
            $scope.input31 = formTextArray[30];
            $scope.input32 = formTextArray[31];
            $scope.input33 = formTextArray[32];
            $scope.input34 = formTextArray[33];
            $scope.input35 = formTextArray[34];
            $scope.input36 = formTextArray[35];
            $scope.input37 = formTextArray[36];
            $scope.input38 = formTextArray[37];
            $scope.input39 = formTextArray[38];
            $scope.input40 = formTextArray[39];
            $scope.input41 = formTextArray[40];
            $scope.input42 = formTextArray[41];
            $scope.input43 = formTextArray[42];
            $scope.input44 = formTextArray[43];
            $scope.input45 = formTextArray[44];
            $scope.input46 = formTextArray[45];
            $scope.input47 = formTextArray[46];
            $scope.input48 = formTextArray[47];
            $scope.input49 = formTextArray[48];
            $scope.input50 = formTextArray[49];
            $scope.input51 = formTextArray[50];
            $scope.input52 = formTextArray[51];
            $scope.input53 = formTextArray[52];
            $scope.input54 = formTextArray[53];
            $scope.input55 = formTextArray[54];
            $scope.input56 = formTextArray[55];
            $scope.input57 = formTextArray[56];
            $scope.input58 = formTextArray[57];
            $scope.input59 = formTextArray[58];
            $scope.input60 = formTextArray[59];
            $scope.input61 = formTextArray[60];
            $scope.input62 = formTextArray[61];
            $scope.input63 = formTextArray[62];
            $scope.input64 = formTextArray[63];
            $scope.input65 = formTextArray[64];
            $scope.input66 = formTextArray[65];
            $scope.input67 = formTextArray[66];
            $scope.input68 = formTextArray[67];
            $scope.input69 = formTextArray[68];
            $scope.input70 = formTextArray[69];
            $scope.input71 = formTextArray[70];
            $scope.input72 = formTextArray[71];
            $scope.input73 = formTextArray[72];
            $scope.input74 = formTextArray[73];
            $scope.input75 = formTextArray[74];
            $scope.input76 = formTextArray[75];
            $scope.input77 = formTextArray[76];
            $scope.input78 = formTextArray[77];
            $scope.input79 = formTextArray[78];
            $scope.input80 = formTextArray[79];
            $scope.input81 = formTextArray[80];
            $scope.input82 = formTextArray[81];
            $scope.input83 = formTextArray[82];
            $scope.input84 = formTextArray[83];
            $scope.input85 = formTextArray[84];
            $scope.input86 = formTextArray[85];
            $scope.input87 = formTextArray[86];
            $scope.input88 = formTextArray[87];
            $scope.input89 = formTextArray[88];
            $scope.input90 = formTextArray[89];
            $scope.input91 = formTextArray[90];
            $scope.input92 = formTextArray[91];
            $scope.input93 = formTextArray[92];
            $scope.input94 = formTextArray[93];
            $scope.input95 = formTextArray[94];
            $scope.input96 = formTextArray[95];
            $scope.input97 = formTextArray[96];
            $scope.input98 = formTextArray[97];
            $scope.input99 = formTextArray[98];
            $scope.input100 = formTextArray[99];
            $scope.input101 = formTextArray[100];
            $scope.input102 = formTextArray[101];
            $scope.input103 = formTextArray[102];
            $scope.input104 = formTextArray[103];
            $scope.input105 = formTextArray[104];
            $scope.input106 = formTextArray[105];
            $scope.input107 = formTextArray[106];
            $scope.input108 = formTextArray[107];
            $scope.input109 = formTextArray[108];
            $scope.input110 = formTextArray[109];
            $scope.input111 = formTextArray[110];
            $scope.input112 = formTextArray[111];
            $scope.input113 = formTextArray[112];
            $scope.input114 = formTextArray[113];
            $scope.input115 = formTextArray[114];
            $scope.input116 = formTextArray[115];
            $scope.input117 = formTextArray[116];
            $scope.input118 = formTextArray[117];
            $scope.input119 = formTextArray[118];
            $scope.input120 = formTextArray[119];
            $scope.input121 = formTextArray[120];
            $scope.input122 = formTextArray[121];
            $scope.input123 = formTextArray[122];
            $scope.input124 = formTextArray[123];
            $scope.input125 = formTextArray[124];
            $scope.input126 = formTextArray[125];
            $scope.input127 = formTextArray[126];
            $scope.input128 = formTextArray[127];
            $scope.input129 = formTextArray[128];
            $scope.input130 = formTextArray[129];
            $scope.input131 = formTextArray[130];
            $scope.input132 = formTextArray[131];
            $scope.input133 = formTextArray[132];
            $scope.input134 = formTextArray[133];
            $scope.input135 = formTextArray[134];
            $scope.input136 = formTextArray[135];
            $scope.input137 = formTextArray[136];
            $scope.input138 = formTextArray[137];
            $scope.input139 = formTextArray[138];
            $scope.input140 = formTextArray[139];
            $scope.input141 = formTextArray[140];
            $scope.input142 = formTextArray[141];
            $scope.input143 = formTextArray[142];
            $scope.input144 = formTextArray[143];
            $scope.input145 = formTextArray[144];
            $scope.input146 = formTextArray[145];
            $scope.input147 = formTextArray[146];
            $scope.input148 = formTextArray[147];
            $scope.input149 = formTextArray[148];
            $scope.input150 = formTextArray[149];
            $scope.input151 = formTextArray[150];
            $scope.input152 = formTextArray[151];
            $scope.input153 = formTextArray[152];
            $scope.input154 = formTextArray[153];
            $scope.input155 = formTextArray[154];
            $scope.input156 = formTextArray[155];
            $scope.input157 = formTextArray[156];
            $scope.input158 = formTextArray[157];
            $scope.input159 = formTextArray[158];
            $scope.input160 = formTextArray[159];
            $scope.input161 = formTextArray[160];
            $scope.input162 = formTextArray[161];
            $scope.input163 = formTextArray[162];
            $scope.input164 = formTextArray[163];
            $scope.input165 = formTextArray[164];
            $scope.input166 = formTextArray[165];
            $scope.input167 = formTextArray[166];
            $scope.input168 = formTextArray[167];
            $scope.input169 = formTextArray[168];
            $scope.input170 = formTextArray[169];
            $scope.input171 = formTextArray[170];
            $scope.input172 = formTextArray[171];
            $scope.input173 = formTextArray[172];
            $scope.input174 = formTextArray[173];
            $scope.input175 = formTextArray[174];
            $scope.input176 = formTextArray[175];
        }


        $scope.postTeam = () => {
            $http.post('/teams', $scope.team).then((result) => {
                console.log(result.data);
                alert("Equipo creado");
            })
        }
        $scope.postForm = () => {
            let texto = $scope.input1 + ";" + $scope.input2 + ";" + $scope.input3 + ";" + $scope.input4 + ";" + $scope.input5 + ";" + $scope.input6 + ";" + $scope.input7 + ";" + $scope.input8 + ";" + $scope.input9 + ";" + $scope.input10 + ";" + $scope.input11 + ";" + $scope.input12 + ";" + $scope.input13 + ";" + $scope.input14 + ";" + $scope.input15 + ";" + $scope.input16 + ";" + $scope.input17 + ";" + $scope.input18 + ";" + $scope.input19 + ";" + $scope.input20 + ";" + $scope.input21 + ";" + $scope.input22 + ";" + $scope.input23 + ";" + $scope.input24 + ";" + $scope.input25 + ";" + $scope.input26 + ";" + $scope.input27 + ";" + $scope.input28 + ";" + $scope.input29 + ";" + $scope.input30 + ";" + $scope.input31 + ";" + $scope.input32 + ";" + $scope.input33 + ";" + $scope.input34 + ";" + $scope.input35 + ";" + $scope.input36 + ";" + $scope.input37 + ";" + $scope.input38 + ";" + $scope.input39 + ";" + $scope.input40 + ";" + $scope.input41 + ";" + $scope.input42 + ";" + $scope.input43 + ";" + $scope.input44 + ";" + $scope.input45 + ";" + $scope.input46 + ";" + $scope.input47 + ";" + $scope.input48 + ";" + $scope.input49 + ";" + $scope.input50 + ";" + $scope.input51 + ";" + $scope.input52 + ";" + $scope.input53 + ";" + $scope.input54 + ";" + $scope.input55 + ";" + $scope.input56 + ";" + $scope.input57 + ";" + $scope.input58 + ";" + $scope.input59 + ";" + $scope.input60 + ";" + $scope.input61 + ";" + $scope.input62 + ";" + $scope.input63 + ";" + $scope.input64 + ";" + $scope.input65 + ";" + $scope.input66 + ";" + $scope.input67 + ";" + $scope.input68 + ";" + $scope.input69 + ";" + $scope.input70 + ";" + $scope.input71 + ";" + $scope.input72 + ";" + $scope.input73 + ";" + $scope.input74 + ";" + $scope.input75 + ";" + $scope.input76 + ";" + $scope.input77 + ";" + $scope.input78 + ";" + $scope.input79 + ";" + $scope.input80 + ";" + $scope.input81 + ";" + $scope.input82 + ";" + $scope.input83 + ";" + $scope.input84 + ";" + $scope.input85 + ";" + $scope.input86 + ";" + $scope.input87 + ";" + $scope.input88 + ";" + $scope.input89 + ";" + $scope.input90 + ";" + $scope.input91 + ";" + $scope.input92 + ";" + $scope.input93 + ";" + $scope.input94 + ";" + $scope.input95 + ";" + $scope.input96 + ";" + $scope.input97 + ";" + $scope.input98 + ";" + $scope.input99 + ";" + $scope.input100 + ";" + $scope.input101 + ";" + $scope.input102 + ";" + $scope.input103 + ";" + $scope.input104 + ";" + $scope.input105 + ";" + $scope.input106 + ";" + $scope.input107 + ";" + $scope.input108 + ";" + $scope.input109 + ";" + $scope.input110 + ";" + $scope.input111 + ";" + $scope.input112 + ";"+ $scope.input113 + ";" + $scope.input114 + ";" + $scope.input115 + ";" + $scope.input116 + ";" + $scope.input117 + ";" + $scope.input118 + ";" + $scope.input119 + ";" + $scope.input120 + ";" + $scope.input121 + ";" + $scope.input122 + ";" + $scope.input123 + ";" + $scope.input124 + ";" + $scope.input125 + ";" + $scope.input126 + ";" + $scope.input127 + ";" + $scope.input128 + ";" + $scope.input129 + ";" + $scope.input130 + ";" + $scope.input131 + ";" + $scope.input132 + ";" + $scope.input133 + ";" + $scope.input134 + ";" + $scope.input135 + ";" + $scope.input136 + ";" + $scope.input137 + ";" + $scope.input138 + ";" + $scope.input139 + ";" + $scope.input140 + ";" + $scope.input141 + ";" + $scope.input142 + ";" + $scope.input143 + ";" + $scope.input144 + ";" + $scope.input145 + ";" + $scope.input146 + ";" + $scope.input147 + ";" + $scope.input148 + ";" + $scope.input149 + ";" + $scope.input150 + ";" + $scope.input151 + ";" + $scope.input152 + ";" + $scope.input153 + ";" + $scope.input154 + ";" + $scope.input155 + ";" + $scope.input156 + ";" + $scope.input157 + ";" + $scope.input158 + ";" + $scope.input159 + ";" + $scope.input160 + ";" + $scope.input161 + ";" + $scope.input162 + ";" + $scope.input163 + ";" + $scope.input164 + ";" + $scope.input165 + ";" + $scope.input166 + ";" + $scope.input167 + ";" + $scope.input168 + ";" + $scope.input169 + ";" + $scope.input170 + ";" + $scope.input171 + ";" + $scope.input172 + ";" + $scope.input173 + ";" + $scope.input174 + ";" + $scope.input175 + ";" + $scope.input176;
            $scope.forms.formText = texto;
            $http.put('/forms2', $scope.forms).then((result) => {
                console.log(result.data);
                alert("Formulario creado");
            })
            
        }
        $scope.myFunc = function() {
            
        };
    });
</script>
<div class="container" ng-app="myApp" ng-controller="myCtrl">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-card">
                <div id="content" class="p-4 p-md-5 pt-5">

                    <form action="#" class="form">
                        <h1 class="text-center">Mapa de Competidores</h1>
                        <h4 class="text-center app-subtitle">Problemas y beneficios</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cuál es el problema central de tus clientes que estás resolviendo?</h4>
                                <div class="mb-3">
                                    <label for="" class="form-label">Problemas</label>
                                    <input type="text" class="form-control" name="" ng-model="input1" id="input1" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input2" id="input2" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input3" id="input3" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input4" id="input4" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Beneficios</label>
                                    <input type="text" class="form-control" name="" ng-model="input5" id="input5" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input6" id="input6" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input7" id="input7" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input8" id="input8" aria-describedby="helpId" placeholder="">
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Caracteristicas</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cuál es el problema central de tus clientes que estás resolviendo?</h4>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="" ng-model="input9" id="input9" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input10" id="input10" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input11" id="input11" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input12" id="input12" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input13" id="input13" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input14" id="input14" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input15" id="input15" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input16" id="input16" aria-describedby="helpId" placeholder="">
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Atributos</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Crea un listado de los atributos más importantes para tus clientes a la hora de elegir un producto/servicio.</h4>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="" ng-model="input17" id="input17" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input18" id="input18" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input19" id="input19" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input20" id="input20" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input21" id="input21" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input22" id="input22" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input23" id="input23" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" ng-model="input24" id="input24" aria-describedby="helpId" placeholder="">
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Escala de atributos</h4>
                        <div>
                            <div class="table-responsive">
                                <h4>Define aquello que un cliente entiende como atributo débil, bueno o genial.</h4>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Débil</label>

                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Normal</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Exelente</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Atributos</td>
                                            <td>Describir parametro</td>
                                            <td>Describir parametro</td>
                                            <td>Describir parametro</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input25" id="input25" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input26" id="input26" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input27" id="input27" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input28" id="input28" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input29" id="input29" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input30" id="input30" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input31" id="input31" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input32" id="input32" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input33" id="input33" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input34" id="input34" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input35" id="input35" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input36" id="input36" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input37" id="input37" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input38" id="input38" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input39" id="input39" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input40" id="input40" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input41" id="input41" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input42" id="input42" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input43" id="input43" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input44" id="input44" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input45" id="input45" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input46" id="input46" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input47" id="input47" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input48" id="input48" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input49" id="input49" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input50" id="input50" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input51" id="input51" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input52" id="input52" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input53" id="input53" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input54" id="input54" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input55" id="input55" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input56" id="input56" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Competidores</h4>
                        <div>
                            <div class="table-responsive">
                                <h4>Primero, haz una lista de tus competidores. Después, cuando los hayas enlistado, elige a los más importantes, marcando con una x el área de seleccion.</h4>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Competidor</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Área de selección </label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input57" id="input57" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input58" id="input58" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input59" id="input59" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input60" id="input60" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input61" id="input61" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input62" id="input62" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input63" id="input63" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input64" id="input64" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input65" id="input65" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input66" id="input66" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Ranking</h4>
                        <div>
                            <div class="table-responsive">
                                <h4>Compárate con tus competidores, en base a los atributos que seleccionaste</h4>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Atributo1</label>
                                                    <input type="text" class="form-control" name="" ng-model="input67" id="input67" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Competidor</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 1-3 BAJO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 7-10 ALTO</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input68" id="input68" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input69" id="input69" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input70" id="input70" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input71" id="input71" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input72" id="input72" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input73" id="input73" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input74" id="input74" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input75" id="input75" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input76" id="input76" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input77" id="input77" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input78" id="input78" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input79" id="input79" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input80" id="input80" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input81" id="input81" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input82" id="input82" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input83" id="input83" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input84" id="input84" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input85" id="input85" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input86" id="input86" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input87" id="input87" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Atributo1</label>
                                                    <input type="text" class="form-control" name="" ng-model="input88" id="input88" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Competidor</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 1-3 BAJO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 7-10 ALTO</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input89" id="input89" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input90" id="input90" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input91" id="input91" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input92" id="input92" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input93" id="input93" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input94" id="input94" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input95" id="input95" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input96" id="input96" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input97" id="input97" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input98" id="input98" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input99" id="input99" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input100" id="input100" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input101" id="input101" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input102" id="input102" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input103" id="input103" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input104" id="input104" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input105" id="input105" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input106" id="input106" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input107" id="input107" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input108" id="input108" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Atributo1</label>
                                                    <input type="text" class="form-control" name="" ng-model="input109" id="input109" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Competidor</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 1-3 BAJO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 7-10 ALTO</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input110" id="input110" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input111" id="input111" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input112" id="input112" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input113" id="input113" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input114" id="input114" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input115" id="input115" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input116" id="input116" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input117" id="input117" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input118" id="input118" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input119" id="input119" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input120" id="input120" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input121" id="input121" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input122" id="input122" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input123" id="input123" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input124" id="input124" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input125" id="input125" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input126" id="input126" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input127" id="input127" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input128" id="input128" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input129" id="input129" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Atributo1</label>
                                                    <input type="text" class="form-control" name="" ng-model="input130" id="input130" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Competidor</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 1-3 BAJO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 7-10 ALTO</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input131" id="input131" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input132" id="input132" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input133" id="input133" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input134" id="input134" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input135" id="input135" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input136" id="input136" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input137" id="input137" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input138" id="input138" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input139" id="input139" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input140" id="input140" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input141" id="input141" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input142" id="input142" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input143" id="input143" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input144" id="input144" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input145" id="input145" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input146" id="input146" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input147" id="input147" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input148" id="input148" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input149" id="input149" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input150" id="input150" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Atributo1</label>
                                                    <input type="text" class="form-control" name="" ng-model="input151" id="input151" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Competidor</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 1-3 BAJO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 4-6 MEDIO</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Escala 7-10 ALTO</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input152" id="input152" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input153" id="input153" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input154" id="input154" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input155" id="input155" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input156" id="input156" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input157" id="input157" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input158" id="input158" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input159" id="input159" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input160" id="input160" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input161" id="input161" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input162" id="input162" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input163" id="input163" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input164" id="input164" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input165" id="input165" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input166" id="input166" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input167" id="input167" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input168" id="input168" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input169" id="input169" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input170" id="input170" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input171" id="input171" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h4>En base al análisis anterior, responde las siguientes preguntas y luego describe tu entorno</h4>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Cuáles son tus atributos más fuertes?</label>
                                    <input type="text" class="form-control" name="" ng-model="input172" id="input172" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Quién es tu competidor más cercano? ¿Por qué?</label>
                                    <input type="text" class="form-control" name="" ng-model="input173" id="input173" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Dónde eres más débil?</label>
                                    <input type="text" class="form-control" name="" ng-model="input174" id="input174" aria-describedby="helpId" placeholder="">
                                </div>
                                <textarea type="" class="form-control " name="" ng-model="input175" id="input175" aria-describedby="helpId" placeholder="Describe tu entorno"></textarea>
                                <br>
                                <h5>Para los Segmento de mercado, que Problemática del cliente, Tu empresa/producto es Descripción del producto que Beneficios del cliente.
                                    A diferencia de Competidores,que proporcionan beneficios inferiores de los competidores. Tu empresa proporciona beneficios únicos de tu producto/servicio</h5>
                                <textarea type="" class="form-control " name="" ng-model="input176" id="input176" aria-describedby="helpId" placeholder="Redacte"></textarea>
                            </div>
                        </div>
                        <br>
                        @if (Auth::user()->userType == 'teacher')
                        @endif
                        @if (Auth::user()->userType == 'student')
                        <div class="d-flex justify-content-center">
                            <button type="submit" ng-click="postForm()" class="btn btn-success">Guardar</button>
                        </div>
                        @endif
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection