<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{

    public function run()
    {
        \DB::table('municipios')->insert(array (
            0 =>
            array (
                'id' => '1',
                'estado_id' => '21',
                'descricao' => 'Alta Floresta D\'oeste'
            ),
            1 =>
            array (
                'id' => '2',
                'estado_id' => '21',
                'descricao' => 'Ariquemes'
            ),
            2 =>
            array (
                'id' => '3',
                'estado_id' => '21',
                'descricao' => 'Cabixi'
            ),
            3 =>
            array (
                'id' => '4',
                'estado_id' => '21',
                'descricao' => 'Cacoal'
            ),
            4 =>
            array (
                'id' => '5',
                'estado_id' => '21',
                'descricao' => 'Cerejeiras'
            ),
            5 =>
            array (
                'id' => '6',
                'estado_id' => '21',
                'descricao' => 'Colorado do Oeste'
            ),
            6 =>
            array (
                'id' => '7',
                'estado_id' => '21',
                'descricao' => 'Corumbiara'
            ),
            7 =>
            array (
                'id' => '8',
                'estado_id' => '21',
                'descricao' => 'Costa Marques'
            ),
            8 =>
            array (
                'id' => '9',
                'estado_id' => '21',
                'descricao' => 'Espigão D\'oeste'
            ),
            9 =>
            array (
                'id' => '10',
                'estado_id' => '21',
                'descricao' => 'Guajará-Mirim'
            ),
            10 =>
            array (
                'id' => '11',
                'estado_id' => '21',
                'descricao' => 'Jaru'
            ),
            11 =>
            array (
                'id' => '12',
                'estado_id' => '21',
                'descricao' => 'Ji-Paraná'
            ),
            12 =>
            array (
                'id' => '13',
                'estado_id' => '21',
                'descricao' => 'Machadinho D\'oeste'
            ),
            13 =>
            array (
                'id' => '14',
                'estado_id' => '21',
                'descricao' => 'Nova Brasilândia D\'oeste'
            ),
            14 =>
            array (
                'id' => '15',
                'estado_id' => '21',
                'descricao' => 'Ouro Preto do Oeste'
            ),
            15 =>
            array (
                'id' => '16',
                'estado_id' => '21',
                'descricao' => 'Pimenta Bueno'
            ),
            16 =>
            array (
                'id' => '17',
                'estado_id' => '21',
                'descricao' => 'Porto Velho',
            ),
            17 =>
            array (
                'id' => '18',
                'estado_id' => '21',
                'descricao' => 'Presidente Médici'
            ),
            18 =>
            array (
                'id' => '19',
                'estado_id' => '21',
                'descricao' => 'Rio Crespo'
            ),
            19 =>
            array (
                'id' => '20',
                'estado_id' => '21',
                'descricao' => 'Rolim de Moura'
            ),
            20 =>
            array (
                'id' => '21',
                'estado_id' => '21',
                'descricao' => 'Santa Luzia D\'oeste'
            ),
            21 =>
            array (
                'id' => '22',
                'estado_id' => '21',
                'descricao' => 'Vilhena'
            ),
            22 =>
            array (
                'id' => '23',
                'estado_id' => '21',
                'descricao' => 'São Miguel do Guaporé'
            ),
            23 =>
            array (
                'id' => '24',
                'estado_id' => '21',
                'descricao' => 'Nova Mamoré'
            ),
            24 =>
            array (
                'id' => '25',
                'estado_id' => '21',
                'descricao' => 'Alvorada D\'oeste'
            ),
            25 =>
            array (
                'id' => '26',
                'estado_id' => '21',
                'descricao' => 'Alto Alegre dos Parecis'
            ),
            26 =>
            array (
                'id' => '27',
                'estado_id' => '21',
                'descricao' => 'Alto Paraíso'
            ),
            27 =>
            array (
                'id' => '28',
                'estado_id' => '21',
                'descricao' => 'Buritis'
            ),
            28 =>
            array (
                'id' => '29',
                'estado_id' => '21',
                'descricao' => 'Novo Horizonte do Oeste'
            ),
            29 =>
            array (
                'id' => '30',
                'estado_id' => '21',
                'descricao' => 'Cacaulândia'
            ),
            30 =>
            array (
                'id' => '31',
                'estado_id' => '21',
                'descricao' => 'Campo Novo de Rondônia'
            ),
            31 =>
            array (
                'id' => '32',
                'estado_id' => '21',
                'descricao' => 'Candeias do Jamari'
            ),
            32 =>
            array (
                'id' => '33',
                'estado_id' => '21',
                'descricao' => 'Castanheiras'
            ),
            33 =>
            array (
                'id' => '34',
                'estado_id' => '21',
                'descricao' => 'Chupinguaia'
            ),
            34 =>
            array (
                'id' => '35',
                'estado_id' => '21',
                'descricao' => 'Cujubim'
            ),
            35 =>
            array (
                'id' => '36',
                'estado_id' => '21',
                'descricao' => 'Governador Jorge Teixeira'
            ),
            36 =>
            array (
                'id' => '37',
                'estado_id' => '21',
                'descricao' => 'Itapuã do Oeste'
            ),
            37 =>
            array (
                'id' => '38',
                'estado_id' => '21',
                'descricao' => 'Ministro Andreazza'
            ),
            38 =>
            array (
                'id' => '39',
                'estado_id' => '21',
                'descricao' => 'Mirante da Serra'
            ),
            39 =>
            array (
                'id' => '40',
                'estado_id' => '21',
                'descricao' => 'Monte Negro'
            ),
            40 =>
            array (
                'id' => '41',
                'estado_id' => '21',
                'descricao' => 'Nova União'
            ),
            41 =>
            array (
                'id' => '42',
                'estado_id' => '21',
                'descricao' => 'Parecis'
            ),
            42 =>
            array (
                'id' => '43',
                'estado_id' => '21',
                'descricao' => 'Pimenteiras do Oeste'
            ),
            43 =>
            array (
                'id' => '44',
                'estado_id' => '21',
                'descricao' => 'Primavera de Rondônia'
            ),
            44 =>
            array (
                'id' => '45',
                'estado_id' => '21',
                'descricao' => 'São Felipe D\'oeste'
            ),
            45 =>
            array (
                'id' => '46',
                'estado_id' => '21',
                'descricao' => 'São Francisco do Guaporé'
            ),
            46 =>
            array (
                'id' => '47',
                'estado_id' => '21',
                'descricao' => 'Seringueiras'
            ),
            47 =>
            array (
                'id' => '48',
                'estado_id' => '21',
                'descricao' => 'Teixeirópolis'
            ),
            48 =>
            array (
                'id' => '49',
                'estado_id' => '21',
                'descricao' => 'Theobroma'
            ),
            49 =>
            array (
                'id' => '50',
                'estado_id' => '21',
                'descricao' => 'Urupá'
            ),
            50 =>
            array (
                'id' => '51',
                'estado_id' => '21',
                'descricao' => 'Vale do Anari'
            ),
            51 =>
            array (
                'id' => '52',
                'estado_id' => '21',
                'descricao' => 'Vale do Paraíso'
            ),
            52 =>
            array (
                'id' => '53',
                'estado_id' => '1',
                'descricao' => 'Acrelândia'
            ),
            53 =>
            array (
                'id' => '54',
                'estado_id' => '1',
                'descricao' => 'Assis Brasil'
            ),
            54 =>
            array (
                'id' => '55',
                'estado_id' => '1',
                'descricao' => 'Brasiléia'
            ),
            55 =>
            array (
                'id' => '56',
                'estado_id' => '1',
                'descricao' => 'Bujari'
            ),
            56 =>
            array (
                'id' => '57',
                'estado_id' => '1',
                'descricao' => 'Capixaba'
            ),
            57 =>
            array (
                'id' => '58',
                'estado_id' => '1',
                'descricao' => 'Cruzeiro do Sul'
            ),
            58 =>
            array (
                'id' => '59',
                'estado_id' => '1',
                'descricao' => 'Epitaciolândia'
            ),
            59 =>
            array (
                'id' => '60',
                'estado_id' => '1',
                'descricao' => 'Feijó'
            ),
            60 =>
            array (
                'id' => '61',
                'estado_id' => '1',
                'descricao' => 'Jordão'
            ),
            61 =>
            array (
                'id' => '62',
                'estado_id' => '1',
                'descricao' => 'Mâncio Lima'
            ),
            62 =>
            array (
                'id' => '63',
                'estado_id' => '1',
                'descricao' => 'Manoel Urbano'
            ),
            63 =>
            array (
                'id' => '64',
                'estado_id' => '1',
                'descricao' => 'Marechal Thaumaturgo'
            ),
            64 =>
            array (
                'id' => '65',
                'estado_id' => '1',
                'descricao' => 'Plácido de Castro'
            ),
            65 =>
            array (
                'id' => '66',
                'estado_id' => '1',
                'descricao' => 'Porto Walter'
            ),
            66 =>
            array (
                'id' => '67',
                'estado_id' => '1',
                'descricao' => 'Rio Branco'
            ),
            67 =>
            array (
                'id' => '68',
                'estado_id' => '1',
                'descricao' => 'Rodrigues Alves'
            ),
            68 =>
            array (
                'id' => '69',
                'estado_id' => '1',
                'descricao' => 'Santa Rosa do Purus'
            ),
            69 =>
            array (
                'id' => '70',
                'estado_id' => '1',
                'descricao' => 'Senador Guiomard'
            ),
            70 =>
            array (
                'id' => '71',
                'estado_id' => '1',
                'descricao' => 'Sena Madureira'
            ),
            71 =>
            array (
                'id' => '72',
                'estado_id' => '1',
                'descricao' => 'Tarauacá'
            ),
            72 =>
            array (
                'id' => '73',
                'estado_id' => '1',
                'descricao' => 'Xapuri'
            ),
            73 =>
            array (
                'id' => '74',
                'estado_id' => '1',
                'descricao' => 'Porto Acre'
            ),
            74 =>
            array (
                'id' => '75',
                'estado_id' => '3',
                'descricao' => 'Alvarães'
            ),
            75 =>
            array (
                'id' => '76',
                'estado_id' => '3',
                'descricao' => 'Amaturá'
            ),
            76 =>
            array (
                'id' => '77',
                'estado_id' => '3',
                'descricao' => 'Anamã'
            ),
            77 =>
            array (
                'id' => '78',
                'estado_id' => '3',
                'descricao' => 'Anori'
            ),
            78 =>
            array (
                'id' => '79',
                'estado_id' => '3',
                'descricao' => 'Apuí'
            ),
            79 =>
            array (
                'id' => '80',
                'estado_id' => '3',
                'descricao' => 'Atalaia do Norte'
            ),
            80 =>
            array (
                'id' => '81',
                'estado_id' => '3',
                'descricao' => 'Autazes'
            ),
            81 =>
            array (
                'id' => '82',
                'estado_id' => '3',
                'descricao' => 'Barcelos'
            ),
            82 =>
            array (
                'id' => '83',
                'estado_id' => '3',
                'descricao' => 'Barreirinha'
            ),
            83 =>
            array (
                'id' => '84',
                'estado_id' => '3',
                'descricao' => 'Benjamin Constant'
            ),
            84 =>
            array (
                'id' => '85',
                'estado_id' => '3',
                'descricao' => 'Beruri'
            ),
            85 =>
            array (
                'id' => '86',
                'estado_id' => '3',
                'descricao' => 'Boa Vista do Ramos'
            ),
            86 =>
            array (
                'id' => '87',
                'estado_id' => '3',
                'descricao' => 'Boca do Acre'
            ),
            87 =>
            array (
                'id' => '88',
                'estado_id' => '3',
                'descricao' => 'Borba'
            ),
            88 =>
            array (
                'id' => '89',
                'estado_id' => '3',
                'descricao' => 'Caapiranga'
            ),
            89 =>
            array (
                'id' => '90',
                'estado_id' => '3',
                'descricao' => 'Canutama'
            ),
            90 =>
            array (
                'id' => '91',
                'estado_id' => '3',
                'descricao' => 'Carauari'
            ),
            91 =>
            array (
                'id' => '92',
                'estado_id' => '3',
                'descricao' => 'Careiro'
            ),
            92 =>
            array (
                'id' => '93',
                'estado_id' => '3',
                'descricao' => 'Careiro da Várzea'
            ),
            93 =>
            array (
                'id' => '94',
                'estado_id' => '3',
                'descricao' => 'Coari'
            ),
            94 =>
            array (
                'id' => '95',
                'estado_id' => '3',
                'descricao' => 'Codajás'
            ),
            95 =>
            array (
                'id' => '96',
                'estado_id' => '3',
                'descricao' => 'Eirunepé'
            ),
            96 =>
            array (
                'id' => '97',
                'estado_id' => '3',
                'descricao' => 'Envira'
            ),
            97 =>
            array (
                'id' => '98',
                'estado_id' => '3',
                'descricao' => 'Fonte Boa'
            ),
            98 =>
            array (
                'id' => '99',
                'estado_id' => '3',
                'descricao' => 'Guajará'
            ),
            99 =>
            array (
                'id' => '100',
                'estado_id' => '3',
                'descricao' => 'Humaitá'
            ),
            100 =>
            array (
                'id' => '101',
                'estado_id' => '3',
                'descricao' => 'Ipixuna'
            ),
            101 =>
            array (
                'id' => '102',
                'estado_id' => '3',
                'descricao' => 'Iranduba'
            ),
            102 =>
            array (
                'id' => '103',
                'estado_id' => '3',
                'descricao' => 'Itacoatiara'
            ),
            103 =>
            array (
                'id' => '104',
                'estado_id' => '3',
                'descricao' => 'Itamarati'
            ),
            104 =>
            array (
                'id' => '105',
                'estado_id' => '3',
                'descricao' => 'Itapiranga'
            ),
            105 =>
            array (
                'id' => '106',
                'estado_id' => '3',
                'descricao' => 'Japurá'
            ),
            106 =>
            array (
                'id' => '107',
                'estado_id' => '3',
                'descricao' => 'Juruá'
            ),
            107 =>
            array (
                'id' => '108',
                'estado_id' => '3',
                'descricao' => 'Jutaí'
            ),
            108 =>
            array (
                'id' => '109',
                'estado_id' => '3',
                'descricao' => 'Lábrea'
            ),
            109 =>
            array (
                'id' => '110',
                'estado_id' => '3',
                'descricao' => 'Manacapuru'
            ),
            110 =>
            array (
                'id' => '111',
                'estado_id' => '3',
                'descricao' => 'Manaquiri'
            ),
            111 =>
            array (
                'id' => '112',
                'estado_id' => '3',
                'descricao' => 'Manaus'
            ),
            112 =>
            array (
                'id' => '113',
                'estado_id' => '3',
                'descricao' => 'Manicoré'
            ),
            113 =>
            array (
                'id' => '114',
                'estado_id' => '3',
                'descricao' => 'Maraã'
            ),
            114 =>
            array (
                'id' => '115',
                'estado_id' => '3',
                'descricao' => 'Maués'
            ),
            115 =>
            array (
                'id' => '116',
                'estado_id' => '3',
                'descricao' => 'Nhamundá'
            ),
            116 =>
            array (
                'id' => '117',
                'estado_id' => '3',
                'descricao' => 'Nova Olinda do Norte'
            ),
            117 =>
            array (
                'id' => '118',
                'estado_id' => '3',
                'descricao' => 'Novo Airão'
            ),
            118 =>
            array (
                'id' => '119',
                'estado_id' => '3',
                'descricao' => 'Novo Aripuanã'
            ),
            119 =>
            array (
                'id' => '120',
                'estado_id' => '3',
                'descricao' => 'Parintins'
            ),
            120 =>
            array (
                'id' => '121',
                'estado_id' => '3',
                'descricao' => 'Pauini'
            ),
            121 =>
            array (
                'id' => '122',
                'estado_id' => '3',
                'descricao' => 'Presidente Figueiredo'
            ),
            122 =>
            array (
                'id' => '123',
                'estado_id' => '3',
                'descricao' => 'Rio Preto da Eva'
            ),
            123 =>
            array (
                'id' => '124',
                'estado_id' => '3',
                'descricao' => 'Santa Isabel do Rio Negro'
            ),
            124 =>
            array (
                'id' => '125',
                'estado_id' => '3',
                'descricao' => 'Santo Antônio do Içá'
            ),
            125 =>
            array (
                'id' => '126',
                'estado_id' => '3',
                'descricao' => 'São Gabriel da Cachoeira'
            ),
            126 =>
            array (
                'id' => '127',
                'estado_id' => '3',
                'descricao' => 'São Paulo de Olivença'
            ),
            127 =>
            array (
                'id' => '128',
                'estado_id' => '3',
                'descricao' => 'São Sebastião do Uatumã'
            ),
            128 =>
            array (
                'id' => '129',
                'estado_id' => '3',
                'descricao' => 'Silves'
            ),
            129 =>
            array (
                'id' => '130',
                'estado_id' => '3',
                'descricao' => 'Tabatinga'
            ),
            130 =>
            array (
                'id' => '131',
                'estado_id' => '3',
                'descricao' => 'Tapauá'
            ),
            131 =>
            array (
                'id' => '132',
                'estado_id' => '3',
                'descricao' => 'Tefé'
            ),
            132 =>
            array (
                'id' => '133',
                'estado_id' => '3',
                'descricao' => 'Tonantins'
            ),
            133 =>
            array (
                'id' => '134',
                'estado_id' => '3',
                'descricao' => 'Uarini'
            ),
            134 =>
            array (
                'id' => '135',
                'estado_id' => '3',
                'descricao' => 'Urucará'
            ),
            135 =>
            array (
                'id' => '136',
                'estado_id' => '3',
                'descricao' => 'Urucurituba'
            ),
            136 =>
            array (
                'id' => '137',
                'estado_id' => '22',
                'descricao' => 'Amajari'
            ),
            137 =>
            array (
                'id' => '138',
                'estado_id' => '22',
                'descricao' => 'Alto Alegre'
            ),
            138 =>
            array (
                'id' => '139',
                'estado_id' => '22',
                'descricao' => 'Boa Vista'
            ),
            139 =>
            array (
                'id' => '140',
                'estado_id' => '22',
                'descricao' => 'Bonfim'
            ),
            140 =>
            array (
                'id' => '141',
                'estado_id' => '22',
                'descricao' => 'Cantá'
            ),
            141 =>
            array (
                'id' => '142',
                'estado_id' => '22',
                'descricao' => 'Caracaraí'
            ),
            142 =>
            array (
                'id' => '143',
                'estado_id' => '22',
                'descricao' => 'Caroebe'
            ),
            143 =>
            array (
                'id' => '144',
                'estado_id' => '22',
                'descricao' => 'Iracema'
            ),
            144 =>
            array (
                'id' => '145',
                'estado_id' => '22',
                'descricao' => 'Mucajaí'
            ),
            145 =>
            array (
                'id' => '146',
                'estado_id' => '22',
                'descricao' => 'Normandia'
            ),
            146 =>
            array (
                'id' => '147',
                'estado_id' => '22',
                'descricao' => 'Pacaraima'
            ),
            147 =>
            array (
                'id' => '148',
                'estado_id' => '22',
                'descricao' => 'Rorainópolis'
            ),
            148 =>
            array (
                'id' => '149',
                'estado_id' => '22',
                'descricao' => 'São João da Baliza'
            ),
            149 =>
            array (
                'id' => '150',
                'estado_id' => '22',
                'descricao' => 'São Luiz'
            ),
            150 =>
            array (
                'id' => '151',
                'estado_id' => '22',
                'descricao' => 'Uiramutã'
            ),
            151 =>
            array (
                'id' => '152',
                'estado_id' => '14',
                'descricao' => 'Abaetetuba'
            ),
            152 =>
            array (
                'id' => '153',
                'estado_id' => '14',
                'descricao' => 'Abel Figueiredo'
            ),
            153 =>
            array (
                'id' => '154',
                'estado_id' => '14',
                'descricao' => 'Acará'
            ),
            154 =>
            array (
                'id' => '155',
                'estado_id' => '14',
                'descricao' => 'Afuá'
            ),
            155 =>
            array (
                'id' => '156',
                'estado_id' => '14',
                'descricao' => 'Água Azul do Norte'
            ),
            156 =>
            array (
                'id' => '157',
                'estado_id' => '14',
                'descricao' => 'Alenquer'
            ),
            157 =>
            array (
                'id' => '158',
                'estado_id' => '14',
                'descricao' => 'Almeirim'
            ),
            158 =>
            array (
                'id' => '159',
                'estado_id' => '14',
                'descricao' => 'Altamira'
            ),
            159 =>
            array (
                'id' => '160',
                'estado_id' => '14',
                'descricao' => 'Anajás'
            ),
            160 =>
            array (
                'id' => '161',
                'estado_id' => '14',
                'descricao' => 'Ananindeua'
            ),
            161 =>
            array (
                'id' => '162',
                'estado_id' => '14',
                'descricao' => 'Anapu'
            ),
            162 =>
            array (
                'id' => '163',
                'estado_id' => '14',
                'descricao' => 'Augusto Corrêa'
            ),
            163 =>
            array (
                'id' => '164',
                'estado_id' => '14',
                'descricao' => 'Aurora do Pará'
            ),
            164 =>
            array (
                'id' => '165',
                'estado_id' => '14',
                'descricao' => 'Aveiro'
            ),
            165 =>
            array (
                'id' => '166',
                'estado_id' => '14',
                'descricao' => 'Bagre'
            ),
            166 =>
            array (
                'id' => '167',
                'estado_id' => '14',
                'descricao' => 'Baião'
            ),
            167 =>
            array (
                'id' => '168',
                'estado_id' => '14',
                'descricao' => 'Bannach'
            ),
            168 =>
            array (
                'id' => '169',
                'estado_id' => '14',
                'descricao' => 'Barcarena'
            ),
            169 =>
            array (
                'id' => '170',
                'estado_id' => '14',
                'descricao' => 'Belém',
            ),
            170 =>
            array (
                'id' => '171',
                'estado_id' => '14',
                'descricao' => 'Belterra'
            ),
            171 =>
            array (
                'id' => '172',
                'estado_id' => '14',
                'descricao' => 'Benevides'
            ),
            172 =>
            array (
                'id' => '173',
                'estado_id' => '14',
                'descricao' => 'Bom Jesus do Tocantins'
            ),
            173 =>
            array (
                'id' => '174',
                'estado_id' => '14',
                'descricao' => 'Bonito'
            ),
            174 =>
            array (
                'id' => '175',
                'estado_id' => '14',
                'descricao' => 'Bragança'
            ),
            175 =>
            array (
                'id' => '176',
                'estado_id' => '14',
                'descricao' => 'Brasil Novo'
            ),
            176 =>
            array (
                'id' => '177',
                'estado_id' => '14',
                'descricao' => 'Brejo Grande do Araguaia'
            ),
            177 =>
            array (
                'id' => '178',
                'estado_id' => '14',
                'descricao' => 'Breu Branco'
            ),
            178 =>
            array (
                'id' => '179',
                'estado_id' => '14',
                'descricao' => 'Breves'
            ),
            179 =>
            array (
                'id' => '180',
                'estado_id' => '14',
                'descricao' => 'Bujaru'
            ),
            180 =>
            array (
                'id' => '181',
                'estado_id' => '14',
                'descricao' => 'Cachoeira do Piriá'
            ),
            181 =>
            array (
                'id' => '182',
                'estado_id' => '14',
                'descricao' => 'Cachoeira do Arari'
            ),
            182 =>
            array (
                'id' => '183',
                'estado_id' => '14',
                'descricao' => 'Cametá'
            ),
            183 =>
            array (
                'id' => '184',
                'estado_id' => '14',
                'descricao' => 'Canaã dos Carajás'
            ),
            184 =>
            array (
                'id' => '185',
                'estado_id' => '14',
                'descricao' => 'Capanema'
            ),
            185 =>
            array (
                'id' => '186',
                'estado_id' => '14',
                'descricao' => 'Capitão Poço'
            ),
            186 =>
            array (
                'id' => '187',
                'estado_id' => '14',
                'descricao' => 'Castanhal'
            ),
            187 =>
            array (
                'id' => '188',
                'estado_id' => '14',
                'descricao' => 'Chaves'
            ),
            188 =>
            array (
                'id' => '189',
                'estado_id' => '14',
                'descricao' => 'Colares'
            ),
            189 =>
            array (
                'id' => '190',
                'estado_id' => '14',
                'descricao' => 'Conceição do Araguaia'
            ),
            190 =>
            array (
                'id' => '191',
                'estado_id' => '14',
                'descricao' => 'Concórdia do Pará'
            ),
            191 =>
            array (
                'id' => '192',
                'estado_id' => '14',
                'descricao' => 'Cumaru do Norte'
            ),
            192 =>
            array (
                'id' => '193',
                'estado_id' => '14',
                'descricao' => 'Curionópolis'
            ),
            193 =>
            array (
                'id' => '194',
                'estado_id' => '14',
                'descricao' => 'Curralinho'
            ),
            194 =>
            array (
                'id' => '195',
                'estado_id' => '14',
                'descricao' => 'Curuá'
            ),
            195 =>
            array (
                'id' => '196',
                'estado_id' => '14',
                'descricao' => 'Curuçá'
            ),
            196 =>
            array (
                'id' => '197',
                'estado_id' => '14',
                'descricao' => 'Dom Eliseu'
            ),
            197 =>
            array (
                'id' => '198',
                'estado_id' => '14',
                'descricao' => 'Eldorado dos Carajás'
            ),
            198 =>
            array (
                'id' => '199',
                'estado_id' => '14',
                'descricao' => 'Faro'
            ),
            199 =>
            array (
                'id' => '200',
                'estado_id' => '14',
                'descricao' => 'Floresta do Araguaia'
            ),
            200 =>
            array (
                'id' => '201',
                'estado_id' => '14',
                'descricao' => 'Garrafão do Norte'
            ),
            201 =>
            array (
                'id' => '202',
                'estado_id' => '14',
                'descricao' => 'Goianésia do Pará'
            ),
            202 =>
            array (
                'id' => '203',
                'estado_id' => '14',
                'descricao' => 'Gurupá'
            ),
            203 =>
            array (
                'id' => '204',
                'estado_id' => '14',
                'descricao' => 'Igarapé-Açu'
            ),
            204 =>
            array (
                'id' => '205',
                'estado_id' => '14',
                'descricao' => 'Igarapé-Miri'
            ),
            205 =>
            array (
                'id' => '206',
                'estado_id' => '14',
                'descricao' => 'Inhangapi'
            ),
            206 =>
            array (
                'id' => '207',
                'estado_id' => '14',
                'descricao' => 'Ipixuna do Pará'
            ),
            207 =>
            array (
                'id' => '208',
                'estado_id' => '14',
                'descricao' => 'Irituia'
            ),
            208 =>
            array (
                'id' => '209',
                'estado_id' => '14',
                'descricao' => 'Itaituba'
            ),
            209 =>
            array (
                'id' => '210',
                'estado_id' => '14',
                'descricao' => 'Itupiranga'
            ),
            210 =>
            array (
                'id' => '211',
                'estado_id' => '14',
                'descricao' => 'Jacareacanga'
            ),
            211 =>
            array (
                'id' => '212',
                'estado_id' => '14',
                'descricao' => 'Jacundá'
            ),
            212 =>
            array (
                'id' => '213',
                'estado_id' => '14',
                'descricao' => 'Juruti'
            ),
            213 =>
            array (
                'id' => '214',
                'estado_id' => '14',
                'descricao' => 'Limoeiro do Ajuru'
            ),
            214 =>
            array (
                'id' => '215',
                'estado_id' => '14',
                'descricao' => 'Mãe do Rio'
            ),
            215 =>
            array (
                'id' => '216',
                'estado_id' => '14',
                'descricao' => 'Magalhães Barata'
            ),
            216 =>
            array (
                'id' => '217',
                'estado_id' => '14',
                'descricao' => 'Marabá'
            ),
            217 =>
            array (
                'id' => '218',
                'estado_id' => '14',
                'descricao' => 'Maracanã'
            ),
            218 =>
            array (
                'id' => '219',
                'estado_id' => '14',
                'descricao' => 'Marapanim'
            ),
            219 =>
            array (
                'id' => '220',
                'estado_id' => '14',
                'descricao' => 'Marituba'
            ),
            220 =>
            array (
                'id' => '221',
                'estado_id' => '14',
                'descricao' => 'Medicilândia'
            ),
            221 =>
            array (
                'id' => '222',
                'estado_id' => '14',
                'descricao' => 'Melgaço'
            ),
            222 =>
            array (
                'id' => '223',
                'estado_id' => '14',
                'descricao' => 'Mocajuba'
            ),
            223 =>
            array (
                'id' => '224',
                'estado_id' => '14',
                'descricao' => 'Moju'
            ),
            224 =>
            array (
                'id' => '225',
                'estado_id' => '14',
                'descricao' => 'Monte Alegre'
            ),
            225 =>
            array (
                'id' => '226',
                'estado_id' => '14',
                'descricao' => 'Muaná'
            ),
            226 =>
            array (
                'id' => '227',
                'estado_id' => '14',
                'descricao' => 'Nova Esperança do Piriá'
            ),
            227 =>
            array (
                'id' => '228',
                'estado_id' => '14',
                'descricao' => 'Nova Ipixuna'
            ),
            228 =>
            array (
                'id' => '229',
                'estado_id' => '14',
                'descricao' => 'Nova Timboteua'
            ),
            229 =>
            array (
                'id' => '230',
                'estado_id' => '14',
                'descricao' => 'Novo Progresso'
            ),
            230 =>
            array (
                'id' => '231',
                'estado_id' => '14',
                'descricao' => 'Novo Repartimento'
            ),
            231 =>
            array (
                'id' => '232',
                'estado_id' => '14',
                'descricao' => 'Óbidos'
            ),
            232 =>
            array (
                'id' => '233',
                'estado_id' => '14',
                'descricao' => 'Oeiras do Pará'
            ),
            233 =>
            array (
                'id' => '234',
                'estado_id' => '14',
                'descricao' => 'Oriximiná'
            ),
            234 =>
            array (
                'id' => '235',
                'estado_id' => '14',
                'descricao' => 'Ourém'
            ),
            235 =>
            array (
                'id' => '236',
                'estado_id' => '14',
                'descricao' => 'Ourilândia do Norte'
            ),
            236 =>
            array (
                'id' => '237',
                'estado_id' => '14',
                'descricao' => 'Pacajá'
            ),
            237 =>
            array (
                'id' => '238',
                'estado_id' => '14',
                'descricao' => 'Palestina do Pará'
            ),
            238 =>
            array (
                'id' => '239',
                'estado_id' => '14',
                'descricao' => 'Paragominas'
            ),
            239 =>
            array (
                'id' => '240',
                'estado_id' => '14',
                'descricao' => 'Parauapebas'
            ),
            240 =>
            array (
                'id' => '241',
                'estado_id' => '14',
                'descricao' => 'Pau D\'arco'
            ),
            241 =>
            array (
                'id' => '242',
                'estado_id' => '14',
                'descricao' => 'Peixe-Boi'
            ),
            242 =>
            array (
                'id' => '243',
                'estado_id' => '14',
                'descricao' => 'Piçarra'
            ),
            243 =>
            array (
                'id' => '244',
                'estado_id' => '14',
                'descricao' => 'Placas'
            ),
            244 =>
            array (
                'id' => '245',
                'estado_id' => '14',
                'descricao' => 'Ponta de Pedras'
            ),
            245 =>
            array (
                'id' => '246',
                'estado_id' => '14',
                'descricao' => 'Portel'
            ),
            246 =>
            array (
                'id' => '247',
                'estado_id' => '14',
                'descricao' => 'Porto de Moz'
            ),
            247 =>
            array (
                'id' => '248',
                'estado_id' => '14',
                'descricao' => 'Prainha'
            ),
            248 =>
            array (
                'id' => '249',
                'estado_id' => '14',
                'descricao' => 'Primavera'
            ),
            249 =>
            array (
                'id' => '250',
                'estado_id' => '14',
                'descricao' => 'Quatipuru'
            ),
            250 =>
            array (
                'id' => '251',
                'estado_id' => '14',
                'descricao' => 'Redenção'
            ),
            251 =>
            array (
                'id' => '252',
                'estado_id' => '14',
                'descricao' => 'Rio Maria'
            ),
            252 =>
            array (
                'id' => '253',
                'estado_id' => '14',
                'descricao' => 'Rondon do Pará'
            ),
            253 =>
            array (
                'id' => '254',
                'estado_id' => '14',
                'descricao' => 'Rurópolis'
            ),
            254 =>
            array (
                'id' => '255',
                'estado_id' => '14',
                'descricao' => 'Salinópolis'
            ),
            255 =>
            array (
                'id' => '256',
                'estado_id' => '14',
                'descricao' => 'Salvaterra'
            ),
            256 =>
            array (
                'id' => '257',
                'estado_id' => '14',
                'descricao' => 'Santa Bárbara do Pará'
            ),
            257 =>
            array (
                'id' => '258',
                'estado_id' => '14',
                'descricao' => 'Santa Cruz do Arari'
            ),
            258 =>
            array (
                'id' => '259',
                'estado_id' => '14',
                'descricao' => 'Santa Isabel do Pará'
            ),
            259 =>
            array (
                'id' => '260',
                'estado_id' => '14',
                'descricao' => 'Santa Luzia do Pará'
            ),
            260 =>
            array (
                'id' => '261',
                'estado_id' => '14',
                'descricao' => 'Santa Maria das Barreiras'
            ),
            261 =>
            array (
                'id' => '262',
                'estado_id' => '14',
                'descricao' => 'Santa Maria do Pará'
            ),
            262 =>
            array (
                'id' => '263',
                'estado_id' => '14',
                'descricao' => 'Santana do Araguaia'
            ),
            263 =>
            array (
                'id' => '264',
                'estado_id' => '14',
                'descricao' => 'Santarém'
            ),
            264 =>
            array (
                'id' => '265',
                'estado_id' => '14',
                'descricao' => 'Santarém Novo'
            ),
            265 =>
            array (
                'id' => '266',
                'estado_id' => '14',
                'descricao' => 'Santo Antônio do Tauá'
            ),
            266 =>
            array (
                'id' => '267',
                'estado_id' => '14',
                'descricao' => 'São Caetano de Odivelas'
            ),
            267 =>
            array (
                'id' => '268',
                'estado_id' => '14',
                'descricao' => 'São Domingos do Araguaia'
            ),
            268 =>
            array (
                'id' => '269',
                'estado_id' => '14',
                'descricao' => 'São Domingos do Capim'
            ),
            269 =>
            array (
                'id' => '270',
                'estado_id' => '14',
                'descricao' => 'São Félix do Xingu'
            ),
            270 =>
            array (
                'id' => '271',
                'estado_id' => '14',
                'descricao' => 'São Francisco do Pará'
            ),
            271 =>
            array (
                'id' => '272',
                'estado_id' => '14',
                'descricao' => 'São Geraldo do Araguaia'
            ),
            272 =>
            array (
                'id' => '273',
                'estado_id' => '14',
                'descricao' => 'São João da Ponta'
            ),
            273 =>
            array (
                'id' => '274',
                'estado_id' => '14',
                'descricao' => 'São João de Pirabas'
            ),
            274 =>
            array (
                'id' => '275',
                'estado_id' => '14',
                'descricao' => 'São João do Araguaia'
            ),
            275 =>
            array (
                'id' => '276',
                'estado_id' => '14',
                'descricao' => 'São Miguel do Guamá'
            ),
            276 =>
            array (
                'id' => '277',
                'estado_id' => '14',
                'descricao' => 'São Sebastião da Boa Vista'
            ),
            277 =>
            array (
                'id' => '278',
                'estado_id' => '14',
                'descricao' => 'Sapucaia'
            ),
            278 =>
            array (
                'id' => '279',
                'estado_id' => '14',
                'descricao' => 'Senador José Porfírio'
            ),
            279 =>
            array (
                'id' => '280',
                'estado_id' => '14',
                'descricao' => 'Soure'
            ),
            280 =>
            array (
                'id' => '281',
                'estado_id' => '14',
                'descricao' => 'Tailândia'
            ),
            281 =>
            array (
                'id' => '282',
                'estado_id' => '14',
                'descricao' => 'Terra Alta'
            ),
            282 =>
            array (
                'id' => '283',
                'estado_id' => '14',
                'descricao' => 'Terra Santa'
            ),
            283 =>
            array (
                'id' => '284',
                'estado_id' => '14',
                'descricao' => 'Tomé-Açu'
            ),
            284 =>
            array (
                'id' => '285',
                'estado_id' => '14',
                'descricao' => 'Tracuateua'
            ),
            285 =>
            array (
                'id' => '286',
                'estado_id' => '14',
                'descricao' => 'Trairão'
            ),
            286 =>
            array (
                'id' => '287',
                'estado_id' => '14',
                'descricao' => 'Tucumã'
            ),
            287 =>
            array (
                'id' => '288',
                'estado_id' => '14',
                'descricao' => 'Tucuruí'
            ),
            288 =>
            array (
                'id' => '289',
                'estado_id' => '14',
                'descricao' => 'Ulianópolis'
            ),
            289 =>
            array (
                'id' => '290',
                'estado_id' => '14',
                'descricao' => 'Uruará'
            ),
            290 =>
            array (
                'id' => '291',
                'estado_id' => '14',
                'descricao' => 'Vigia'
            ),
            291 =>
            array (
                'id' => '292',
                'estado_id' => '14',
                'descricao' => 'Viseu'
            ),
            292 =>
            array (
                'id' => '293',
                'estado_id' => '14',
                'descricao' => 'Vitória do Xingu'
            ),
            293 =>
            array (
                'id' => '294',
                'estado_id' => '14',
                'descricao' => 'Xinguara'
            ),
            294 =>
            array (
                'id' => '295',
                'estado_id' => '4',
                'descricao' => 'Serra do Navio'
            ),
            295 =>
            array (
                'id' => '296',
                'estado_id' => '4',
                'descricao' => 'Amapá'
            ),
            296 =>
            array (
                'id' => '297',
                'estado_id' => '4',
                'descricao' => 'Pedra Branca do Amapari'
            ),
            297 =>
            array (
                'id' => '298',
                'estado_id' => '4',
                'descricao' => 'Calçoene'
            ),
            298 =>
            array (
                'id' => '299',
                'estado_id' => '4',
                'descricao' => 'Cutias'
            ),
            299 =>
            array (
                'id' => '300',
                'estado_id' => '4',
                'descricao' => 'Ferreira Gomes'
            ),
            300 =>
            array (
                'id' => '301',
                'estado_id' => '4',
                'descricao' => 'Itaubal'
            ),
            301 =>
            array (
                'id' => '302',
                'estado_id' => '4',
                'descricao' => 'Laranjal do Jari'
            ),
            302 =>
            array (
                'id' => '303',
                'estado_id' => '4',
                'descricao' => 'Macapá'
            ),
            303 =>
            array (
                'id' => '304',
                'estado_id' => '4',
                'descricao' => 'Mazagão'
            ),
            304 =>
            array (
                'id' => '305',
                'estado_id' => '4',
                'descricao' => 'Oiapoque'
            ),
            305 =>
            array (
                'id' => '306',
                'estado_id' => '4',
                'descricao' => 'Porto Grande'
            ),
            306 =>
            array (
                'id' => '307',
                'estado_id' => '4',
                'descricao' => 'Pracuúba'
            ),
            307 =>
            array (
                'id' => '308',
                'estado_id' => '4',
                'descricao' => 'Santana'
            ),
            308 =>
            array (
                'id' => '309',
                'estado_id' => '4',
                'descricao' => 'Tartarugalzinho'
            ),
            309 =>
            array (
                'id' => '310',
                'estado_id' => '4',
                'descricao' => 'Vitória do Jari'
            ),
            310 =>
            array (
                'id' => '311',
                'estado_id' => '27',
                'descricao' => 'Abreulândia',
            ),
            311 =>
            array (
                'id' => '312',
                'estado_id' => '27',
                'descricao' => 'Aguiarnópolis'
            ),
            312 =>
            array (
                'id' => '313',
                'estado_id' => '27',
                'descricao' => 'Aliança do Tocantins'
            ),
            313 =>
            array (
                'id' => '314',
                'estado_id' => '27',
                'descricao' => 'Almas'
            ),
            314 =>
            array (
                'id' => '315',
                'estado_id' => '27',
                'descricao' => 'Alvorada'
            ),
            315 =>
            array (
                'id' => '316',
                'estado_id' => '27',
                'descricao' => 'Ananás'
            ),
            316 =>
            array (
                'id' => '317',
                'estado_id' => '27',
                'descricao' => 'Angico'
            ),
            317 =>
            array (
                'id' => '318',
                'estado_id' => '27',
                'descricao' => 'Aparecida do Rio Negro'
            ),
            318 =>
            array (
                'id' => '319',
                'estado_id' => '27',
                'descricao' => 'Aragominas'
            ),
            319 =>
            array (
                'id' => '320',
                'estado_id' => '27',
                'descricao' => 'Araguacema'
            ),
            320 =>
            array (
                'id' => '321',
                'estado_id' => '27',
                'descricao' => 'Araguaçu'
            ),
            321 =>
            array (
                'id' => '322',
                'estado_id' => '27',
                'descricao' => 'Araguaína'
            ),
            322 =>
            array (
                'id' => '323',
                'estado_id' => '27',
                'descricao' => 'Araguanã'
            ),
            323 =>
            array (
                'id' => '324',
                'estado_id' => '27',
                'descricao' => 'Araguatins'
            ),
            324 =>
            array (
                'id' => '325',
                'estado_id' => '27',
                'descricao' => 'Arapoema'
            ),
            325 =>
            array (
                'id' => '326',
                'estado_id' => '27',
                'descricao' => 'Arraias'
            ),
            326 =>
            array (
                'id' => '327',
                'estado_id' => '27',
                'descricao' => 'Augustinópolis'
            ),
            327 =>
            array (
                'id' => '328',
                'estado_id' => '27',
                'descricao' => 'Aurora do Tocantins'
            ),
            328 =>
            array (
                'id' => '329',
                'estado_id' => '27',
                'descricao' => 'Axixá do Tocantins'
            ),
            329 =>
            array (
                'id' => '330',
                'estado_id' => '27',
                'descricao' => 'Babaçulândia'
            ),
            330 =>
            array (
                'id' => '331',
                'estado_id' => '27',
                'descricao' => 'Bandeirantes do Tocantins'
            ),
            331 =>
            array (
                'id' => '332',
                'estado_id' => '27',
                'descricao' => 'Barra do Ouro'
            ),
            332 =>
            array (
                'id' => '333',
                'estado_id' => '27',
                'descricao' => 'Barrolândia'
            ),
            333 =>
            array (
                'id' => '334',
                'estado_id' => '27',
                'descricao' => 'Bernardo Sayão'
            ),
            334 =>
            array (
                'id' => '335',
                'estado_id' => '27',
                'descricao' => 'Bom Jesus do Tocantins'
            ),
            335 =>
            array (
                'id' => '336',
                'estado_id' => '27',
                'descricao' => 'Brasilândia do Tocantins'
            ),
            336 =>
            array (
                'id' => '337',
                'estado_id' => '27',
                'descricao' => 'Brejinho de Nazaré'
            ),
            337 =>
            array (
                'id' => '338',
                'estado_id' => '27',
                'descricao' => 'Buriti do Tocantins'
            ),
            338 =>
            array (
                'id' => '339',
                'estado_id' => '27',
                'descricao' => 'Cachoeirinha'
            ),
            339 =>
            array (
                'id' => '340',
                'estado_id' => '27',
                'descricao' => 'Campos Lindos'
            ),
            340 =>
            array (
                'id' => '341',
                'estado_id' => '27',
                'descricao' => 'Cariri do Tocantins'
            ),
            341 =>
            array (
                'id' => '342',
                'estado_id' => '27',
                'descricao' => 'Carmolândia'
            ),
            342 =>
            array (
                'id' => '343',
                'estado_id' => '27',
                'descricao' => 'Carrasco Bonito'
            ),
            343 =>
            array (
                'id' => '344',
                'estado_id' => '27',
                'descricao' => 'Caseara'
            ),
            344 =>
            array (
                'id' => '345',
                'estado_id' => '27',
                'descricao' => 'Centenário'
            ),
            345 =>
            array (
                'id' => '346',
                'estado_id' => '27',
                'descricao' => 'Chapada de Areia'
            ),
            346 =>
            array (
                'id' => '347',
                'estado_id' => '27',
                'descricao' => 'Chapada da Natividade'
            ),
            347 =>
            array (
                'id' => '348',
                'estado_id' => '27',
                'descricao' => 'Colinas do Tocantins'
            ),
            348 =>
            array (
                'id' => '349',
                'estado_id' => '27',
                'descricao' => 'Combinado'
            ),
            349 =>
            array (
                'id' => '350',
                'estado_id' => '27',
                'descricao' => 'Conceição do Tocantins'
            ),
            350 =>
            array (
                'id' => '351',
                'estado_id' => '27',
                'descricao' => 'Couto de Magalhães'
            ),
            351 =>
            array (
                'id' => '352',
                'estado_id' => '27',
                'descricao' => 'Cristalândia'
            ),
            352 =>
            array (
                'id' => '353',
                'estado_id' => '27',
                'descricao' => 'Crixás do Tocantins'
            ),
            353 =>
            array (
                'id' => '354',
                'estado_id' => '27',
                'descricao' => 'Darcinópolis'
            ),
            354 =>
            array (
                'id' => '355',
                'estado_id' => '27',
                'descricao' => 'Dianópolis'
            ),
            355 =>
            array (
                'id' => '356',
                'estado_id' => '27',
                'descricao' => 'Divinópolis do Tocantins'
            ),
            356 =>
            array (
                'id' => '357',
                'estado_id' => '27',
                'descricao' => 'Dois Irmãos do Tocantins'
            ),
            357 =>
            array (
                'id' => '358',
                'estado_id' => '27',
                'descricao' => 'Dueré'
            ),
            358 =>
            array (
                'id' => '359',
                'estado_id' => '27',
                'descricao' => 'Esperantina'
            ),
            359 =>
            array (
                'id' => '360',
                'estado_id' => '27',
                'descricao' => 'Fátima'
            ),
            360 =>
            array (
                'id' => '361',
                'estado_id' => '27',
                'descricao' => 'Figueirópolis'
            ),
            361 =>
            array (
                'id' => '362',
                'estado_id' => '27',
                'descricao' => 'Filadélfia'
            ),
            362 =>
            array (
                'id' => '363',
                'estado_id' => '27',
                'descricao' => 'Formoso do Araguaia'
            ),
            363 =>
            array (
                'id' => '364',
                'estado_id' => '27',
                'descricao' => 'Fortaleza do Tabocão'
            ),
            364 =>
            array (
                'id' => '365',
                'estado_id' => '27',
                'descricao' => 'Goianorte'
            ),
            365 =>
            array (
                'id' => '366',
                'estado_id' => '27',
                'descricao' => 'Goiatins'
            ),
            366 =>
            array (
                'id' => '367',
                'estado_id' => '27',
                'descricao' => 'Guaraí'
            ),
            367 =>
            array (
                'id' => '368',
                'estado_id' => '27',
                'descricao' => 'Gurupi'
            ),
            368 =>
            array (
                'id' => '369',
                'estado_id' => '27',
                'descricao' => 'Ipueiras'
            ),
            369 =>
            array (
                'id' => '370',
                'estado_id' => '27',
                'descricao' => 'Itacajá'
            ),
            370 =>
            array (
                'id' => '371',
                'estado_id' => '27',
                'descricao' => 'Itaguatins'
            ),
            371 =>
            array (
                'id' => '372',
                'estado_id' => '27',
                'descricao' => 'Itapiratins'
            ),
            372 =>
            array (
                'id' => '373',
                'estado_id' => '27',
                'descricao' => 'Itaporã do Tocantins'
            ),
            373 =>
            array (
                'id' => '374',
                'estado_id' => '27',
                'descricao' => 'Jaú do Tocantins'
            ),
            374 =>
            array (
                'id' => '375',
                'estado_id' => '27',
                'descricao' => 'Juarina'
            ),
            375 =>
            array (
                'id' => '376',
                'estado_id' => '27',
                'descricao' => 'Lagoa da Confusão'
            ),
            376 =>
            array (
                'id' => '377',
                'estado_id' => '27',
                'descricao' => 'Lagoa do Tocantins'
            ),
            377 =>
            array (
                'id' => '378',
                'estado_id' => '27',
                'descricao' => 'Lajeado'
            ),
            378 =>
            array (
                'id' => '379',
                'estado_id' => '27',
                'descricao' => 'Lavandeira'
            ),
            379 =>
            array (
                'id' => '380',
                'estado_id' => '27',
                'descricao' => 'Lizarda'
            ),
            380 =>
            array (
                'id' => '381',
                'estado_id' => '27',
                'descricao' => 'Luzinópolis'
            ),
            381 =>
            array (
                'id' => '382',
                'estado_id' => '27',
                'descricao' => 'Marianópolis do Tocantins'
            ),
            382 =>
            array (
                'id' => '383',
                'estado_id' => '27',
                'descricao' => 'Mateiros'
            ),
            383 =>
            array (
                'id' => '384',
                'estado_id' => '27',
                'descricao' => 'Maurilândia do Tocantins'
            ),
            384 =>
            array (
                'id' => '385',
                'estado_id' => '27',
                'descricao' => 'Miracema do Tocantins'
            ),
            385 =>
            array (
                'id' => '386',
                'estado_id' => '27',
                'descricao' => 'Miranorte'
            ),
            386 =>
            array (
                'id' => '387',
                'estado_id' => '27',
                'descricao' => 'Monte do Carmo'
            ),
            387 =>
            array (
                'id' => '388',
                'estado_id' => '27',
                'descricao' => 'Monte Santo do Tocantins'
            ),
            388 =>
            array (
                'id' => '389',
                'estado_id' => '27',
                'descricao' => 'Palmeiras do Tocantins'
            ),
            389 =>
            array (
                'id' => '390',
                'estado_id' => '27',
                'descricao' => 'Muricilândia'
            ),
            390 =>
            array (
                'id' => '391',
                'estado_id' => '27',
                'descricao' => 'Natividade'
            ),
            391 =>
            array (
                'id' => '392',
                'estado_id' => '27',
                'descricao' => 'Nazaré'
            ),
            392 =>
            array (
                'id' => '393',
                'estado_id' => '27',
                'descricao' => 'Nova Olinda'
            ),
            393 =>
            array (
                'id' => '394',
                'estado_id' => '27',
                'descricao' => 'Nova Rosalândia'
            ),
            394 =>
            array (
                'id' => '395',
                'estado_id' => '27',
                'descricao' => 'Novo Acordo'
            ),
            395 =>
            array (
                'id' => '396',
                'estado_id' => '27',
                'descricao' => 'Novo Alegre'
            ),
            396 =>
            array (
                'id' => '397',
                'estado_id' => '27',
                'descricao' => 'Novo Jardim'
            ),
            397 =>
            array (
                'id' => '398',
                'estado_id' => '27',
                'descricao' => 'Oliveira de Fátima'
            ),
            398 =>
            array (
                'id' => '399',
                'estado_id' => '27',
                'descricao' => 'Palmeirante'
            ),
            399 =>
            array (
                'id' => '400',
                'estado_id' => '27',
                'descricao' => 'Palmeirópolis'
            ),
            400 =>
            array (
                'id' => '401',
                'estado_id' => '27',
                'descricao' => 'Paraíso do Tocantins',
            ),
            401 =>
            array (
                'id' => '402',
                'estado_id' => '27',
                'descricao' => 'Paranã'
            ),
            402 =>
            array (
                'id' => '403',
                'estado_id' => '27',
                'descricao' => 'Pau D\'arco'
            ),
            403 =>
            array (
                'id' => '404',
                'estado_id' => '27',
                'descricao' => 'Pedro Afonso'
            ),
            404 =>
            array (
                'id' => '405',
                'estado_id' => '27',
                'descricao' => 'Peixe'
            ),
            405 =>
            array (
                'id' => '406',
                'estado_id' => '27',
                'descricao' => 'Pequizeiro'
            ),
            406 =>
            array (
                'id' => '407',
                'estado_id' => '27',
                'descricao' => 'Colméia'
            ),
            407 =>
            array (
                'id' => '408',
                'estado_id' => '27',
                'descricao' => 'Pindorama do Tocantins'
            ),
            408 =>
            array (
                'id' => '409',
                'estado_id' => '27',
                'descricao' => 'Piraquê'
            ),
            409 =>
            array (
                'id' => '410',
                'estado_id' => '27',
                'descricao' => 'Pium'
            ),
            410 =>
            array (
                'id' => '411',
                'estado_id' => '27',
                'descricao' => 'Ponte Alta do Bom Jesus'
            ),
            411 =>
            array (
                'id' => '412',
                'estado_id' => '27',
                'descricao' => 'Ponte Alta do Tocantins'
            ),
            412 =>
            array (
                'id' => '413',
                'estado_id' => '27',
                'descricao' => 'Porto Alegre do Tocantins'
            ),
            413 =>
            array (
                'id' => '414',
                'estado_id' => '27',
                'descricao' => 'Porto Nacional'
            ),
            414 =>
            array (
                'id' => '415',
                'estado_id' => '27',
                'descricao' => 'Praia Norte'
            ),
            415 =>
            array (
                'id' => '416',
                'estado_id' => '27',
                'descricao' => 'Presidente Kennedy'
            ),
            416 =>
            array (
                'id' => '417',
                'estado_id' => '27',
                'descricao' => 'Pugmil'
            ),
            417 =>
            array (
                'id' => '418',
                'estado_id' => '27',
                'descricao' => 'Recursolândia'
            ),
            418 =>
            array (
                'id' => '419',
                'estado_id' => '27',
                'descricao' => 'Riachinho'
            ),
            419 =>
            array (
                'id' => '420',
                'estado_id' => '27',
                'descricao' => 'Rio da Conceição'
            ),
            420 =>
            array (
                'id' => '421',
                'estado_id' => '27',
                'descricao' => 'Rio dos Bois'
            ),
            421 =>
            array (
                'id' => '422',
                'estado_id' => '27',
                'descricao' => 'Rio Sono'
            ),
            422 =>
            array (
                'id' => '423',
                'estado_id' => '27',
                'descricao' => 'Sampaio'
            ),
            423 =>
            array (
                'id' => '424',
                'estado_id' => '27',
                'descricao' => 'Sandolândia'
            ),
            424 =>
            array (
                'id' => '425',
                'estado_id' => '27',
                'descricao' => 'Santa Fé do Araguaia'
            ),
            425 =>
            array (
                'id' => '426',
                'estado_id' => '27',
                'descricao' => 'Santa Maria do Tocantins'
            ),
            426 =>
            array (
                'id' => '427',
                'estado_id' => '27',
                'descricao' => 'Santa Rita do Tocantins'
            ),
            427 =>
            array (
                'id' => '428',
                'estado_id' => '27',
                'descricao' => 'Santa Rosa do Tocantins'
            ),
            428 =>
            array (
                'id' => '429',
                'estado_id' => '27',
                'descricao' => 'Santa Tereza do Tocantins'
            ),
            429 =>
            array (
                'id' => '430',
                'estado_id' => '27',
                'descricao' => 'Santa Terezinha do Tocantins'
            ),
            430 =>
            array (
                'id' => '431',
                'estado_id' => '27',
                'descricao' => 'São Bento do Tocantins'
            ),
            431 =>
            array (
                'id' => '432',
                'estado_id' => '27',
                'descricao' => 'São Félix do Tocantins'
            ),
            432 =>
            array (
                'id' => '433',
                'estado_id' => '27',
                'descricao' => 'São Miguel do Tocantins'
            ),
            433 =>
            array (
                'id' => '434',
                'estado_id' => '27',
                'descricao' => 'São Salvador do Tocantins'
            ),
            434 =>
            array (
                'id' => '435',
                'estado_id' => '27',
                'descricao' => 'São Sebastião do Tocantins'
            ),
            435 =>
            array (
                'id' => '436',
                'estado_id' => '27',
                'descricao' => 'São Valério da Natividade'
            ),
            436 =>
            array (
                'id' => '437',
                'estado_id' => '27',
                'descricao' => 'Silvanópolis'
            ),
            437 =>
            array (
                'id' => '438',
                'estado_id' => '27',
                'descricao' => 'Sítio Novo do Tocantins'
            ),
            438 =>
            array (
                'id' => '439',
                'estado_id' => '27',
                'descricao' => 'Sucupira'
            ),
            439 =>
            array (
                'id' => '440',
                'estado_id' => '27',
                'descricao' => 'Taguatinga'
            ),
            440 =>
            array (
                'id' => '441',
                'estado_id' => '27',
                'descricao' => 'Taipas do Tocantins'
            ),
            441 =>
            array (
                'id' => '442',
                'estado_id' => '27',
                'descricao' => 'Talismã'
            ),
            442 =>
            array (
                'id' => '443',
                'estado_id' => '27',
                'descricao' => 'Palmas',
            ),
            443 =>
            array (
                'id' => '444',
                'estado_id' => '27',
                'descricao' => 'Tocantínia'
            ),
            444 =>
            array (
                'id' => '445',
                'estado_id' => '27',
                'descricao' => 'Tocantinópolis'
            ),
            445 =>
            array (
                'id' => '446',
                'estado_id' => '27',
                'descricao' => 'Tupirama'
            ),
            446 =>
            array (
                'id' => '447',
                'estado_id' => '27',
                'descricao' => 'Tupiratins'
            ),
            447 =>
            array (
                'id' => '448',
                'estado_id' => '27',
                'descricao' => 'Wanderlândia'
            ),
            448 =>
            array (
                'id' => '449',
                'estado_id' => '27',
                'descricao' => 'Xambioá'
            ),
            449 =>
            array (
                'id' => '450',
                'estado_id' => '10',
                'descricao' => 'Açailândia'
            ),
            450 =>
            array (
                'id' => '451',
                'estado_id' => '10',
                'descricao' => 'Afonso Cunha'
            ),
            451 =>
            array (
                'id' => '452',
                'estado_id' => '10',
                'descricao' => 'Água Doce do Maranhão'
            ),
            452 =>
            array (
                'id' => '453',
                'estado_id' => '10',
                'descricao' => 'Alcântara'
            ),
            453 =>
            array (
                'id' => '454',
                'estado_id' => '10',
                'descricao' => 'Aldeias Altas'
            ),
            454 =>
            array (
                'id' => '455',
                'estado_id' => '10',
                'descricao' => 'Altamira do Maranhão'
            ),
            455 =>
            array (
                'id' => '456',
                'estado_id' => '10',
                'descricao' => 'Alto Alegre do Maranhão'
            ),
            456 =>
            array (
                'id' => '457',
                'estado_id' => '10',
                'descricao' => 'Alto Alegre do Pindaré'
            ),
            457 =>
            array (
                'id' => '458',
                'estado_id' => '10',
                'descricao' => 'Alto Parnaíba'
            ),
            458 =>
            array (
                'id' => '459',
                'estado_id' => '10',
                'descricao' => 'Amapá do Maranhão'
            ),
            459 =>
            array (
                'id' => '460',
                'estado_id' => '10',
                'descricao' => 'Amarante do Maranhão'
            ),
            460 =>
            array (
                'id' => '461',
                'estado_id' => '10',
                'descricao' => 'Anajatuba'
            ),
            461 =>
            array (
                'id' => '462',
                'estado_id' => '10',
                'descricao' => 'Anapurus'
            ),
            462 =>
            array (
                'id' => '463',
                'estado_id' => '10',
                'descricao' => 'Apicum-Açu'
            ),
            463 =>
            array (
                'id' => '464',
                'estado_id' => '10',
                'descricao' => 'Araguanã'
            ),
            464 =>
            array (
                'id' => '465',
                'estado_id' => '10',
                'descricao' => 'Araioses'
            ),
            465 =>
            array (
                'id' => '466',
                'estado_id' => '10',
                'descricao' => 'Arame'
            ),
            466 =>
            array (
                'id' => '467',
                'estado_id' => '10',
                'descricao' => 'Arari'
            ),
            467 =>
            array (
                'id' => '468',
                'estado_id' => '10',
                'descricao' => 'Axixá'
            ),
            468 =>
            array (
                'id' => '469',
                'estado_id' => '10',
                'descricao' => 'Bacabal'
            ),
            469 =>
            array (
                'id' => '470',
                'estado_id' => '10',
                'descricao' => 'Bacabeira'
            ),
            470 =>
            array (
                'id' => '471',
                'estado_id' => '10',
                'descricao' => 'Bacuri'
            ),
            471 =>
            array (
                'id' => '472',
                'estado_id' => '10',
                'descricao' => 'Bacurituba'
            ),
            472 =>
            array (
                'id' => '473',
                'estado_id' => '10',
                'descricao' => 'Balsas'
            ),
            473 =>
            array (
                'id' => '474',
                'estado_id' => '10',
                'descricao' => 'Barão de Grajaú'
            ),
            474 =>
            array (
                'id' => '475',
                'estado_id' => '10',
                'descricao' => 'Barra do Corda'
            ),
            475 =>
            array (
                'id' => '476',
                'estado_id' => '10',
                'descricao' => 'Barreirinhas'
            ),
            476 =>
            array (
                'id' => '477',
                'estado_id' => '10',
                'descricao' => 'Belágua'
            ),
            477 =>
            array (
                'id' => '478',
                'estado_id' => '10',
                'descricao' => 'Bela Vista do Maranhão'
            ),
            478 =>
            array (
                'id' => '479',
                'estado_id' => '10',
                'descricao' => 'Benedito Leite'
            ),
            479 =>
            array (
                'id' => '480',
                'estado_id' => '10',
                'descricao' => 'Bequimão'
            ),
            480 =>
            array (
                'id' => '481',
                'estado_id' => '10',
                'descricao' => 'Bernardo do Mearim'
            ),
            481 =>
            array (
                'id' => '482',
                'estado_id' => '10',
                'descricao' => 'Boa Vista do Gurupi'
            ),
            482 =>
            array (
                'id' => '483',
                'estado_id' => '10',
                'descricao' => 'Bom Jardim'
            ),
            483 =>
            array (
                'id' => '484',
                'estado_id' => '10',
                'descricao' => 'Bom Jesus das Selvas'
            ),
            484 =>
            array (
                'id' => '485',
                'estado_id' => '10',
                'descricao' => 'Bom Lugar'
            ),
            485 =>
            array (
                'id' => '486',
                'estado_id' => '10',
                'descricao' => 'Brejo'
            ),
            486 =>
            array (
                'id' => '487',
                'estado_id' => '10',
                'descricao' => 'Brejo de Areia'
            ),
            487 =>
            array (
                'id' => '488',
                'estado_id' => '10',
                'descricao' => 'Buriti'
            ),
            488 =>
            array (
                'id' => '489',
                'estado_id' => '10',
                'descricao' => 'Buriti Bravo'
            ),
            489 =>
            array (
                'id' => '490',
                'estado_id' => '10',
                'descricao' => 'Buriticupu'
            ),
            490 =>
            array (
                'id' => '491',
                'estado_id' => '10',
                'descricao' => 'Buritirana'
            ),
            491 =>
            array (
                'id' => '492',
                'estado_id' => '10',
                'descricao' => 'Cachoeira Grande'
            ),
            492 =>
            array (
                'id' => '493',
                'estado_id' => '10',
                'descricao' => 'Cajapió'
            ),
            493 =>
            array (
                'id' => '494',
                'estado_id' => '10',
                'descricao' => 'Cajari'
            ),
            494 =>
            array (
                'id' => '495',
                'estado_id' => '10',
                'descricao' => 'Campestre do Maranhão'
            ),
            495 =>
            array (
                'id' => '496',
                'estado_id' => '10',
                'descricao' => 'Cândido Mendes'
            ),
            496 =>
            array (
                'id' => '497',
                'estado_id' => '10',
                'descricao' => 'Cantanhede'
            ),
            497 =>
            array (
                'id' => '498',
                'estado_id' => '10',
                'descricao' => 'Capinzal do Norte'
            ),
            498 =>
            array (
                'id' => '499',
                'estado_id' => '10',
                'descricao' => 'Carolina'
            ),
            499 =>
            array (
                'id' => '500',
                'estado_id' => '10',
                'descricao' => 'Carutapera'
            ),
        ));
        \DB::table('municipios')->insert(array (
            0 =>
            array (
                'id' => '501',
                'estado_id' => '10',
                'descricao' => 'Caxias'
            ),
            1 =>
            array (
                'id' => '502',
                'estado_id' => '10',
                'descricao' => 'Cedral'
            ),
            2 =>
            array (
                'id' => '503',
                'estado_id' => '10',
                'descricao' => 'Central do Maranhão'
            ),
            3 =>
            array (
                'id' => '504',
                'estado_id' => '10',
                'descricao' => 'Centro do Guilherme'
            ),
            4 =>
            array (
                'id' => '505',
                'estado_id' => '10',
                'descricao' => 'Centro Novo do Maranhão'
            ),
            5 =>
            array (
                'id' => '506',
                'estado_id' => '10',
                'descricao' => 'Chapadinha'
            ),
            6 =>
            array (
                'id' => '507',
                'estado_id' => '10',
                'descricao' => 'Cidelândia'
            ),
            7 =>
            array (
                'id' => '508',
                'estado_id' => '10',
                'descricao' => 'Codó'
            ),
            8 =>
            array (
                'id' => '509',
                'estado_id' => '10',
                'descricao' => 'Coelho Neto'
            ),
            9 =>
            array (
                'id' => '510',
                'estado_id' => '10',
                'descricao' => 'Colinas'
            ),
            10 =>
            array (
                'id' => '511',
                'estado_id' => '10',
                'descricao' => 'Conceição do Lago-Açu'
            ),
            11 =>
            array (
                'id' => '512',
                'estado_id' => '10',
                'descricao' => 'Coroatá'
            ),
            12 =>
            array (
                'id' => '513',
                'estado_id' => '10',
                'descricao' => 'Cururupu'
            ),
            13 =>
            array (
                'id' => '514',
                'estado_id' => '10',
                'descricao' => 'Davinópolis'
            ),
            14 =>
            array (
                'id' => '515',
                'estado_id' => '10',
                'descricao' => 'Dom Pedro'
            ),
            15 =>
            array (
                'id' => '516',
                'estado_id' => '10',
                'descricao' => 'Duque Bacelar'
            ),
            16 =>
            array (
                'id' => '517',
                'estado_id' => '10',
                'descricao' => 'Esperantinópolis'
            ),
            17 =>
            array (
                'id' => '518',
                'estado_id' => '10',
                'descricao' => 'Estreito'
            ),
            18 =>
            array (
                'id' => '519',
                'estado_id' => '10',
                'descricao' => 'Feira Nova do Maranhão'
            ),
            19 =>
            array (
                'id' => '520',
                'estado_id' => '10',
                'descricao' => 'Fernando Falcão'
            ),
            20 =>
            array (
                'id' => '521',
                'estado_id' => '10',
                'descricao' => 'Formosa da Serra Negra'
            ),
            21 =>
            array (
                'id' => '522',
                'estado_id' => '10',
                'descricao' => 'Fortaleza dos Nogueiras'
            ),
            22 =>
            array (
                'id' => '523',
                'estado_id' => '10',
                'descricao' => 'Fortuna'
            ),
            23 =>
            array (
                'id' => '524',
                'estado_id' => '10',
                'descricao' => 'Godofredo Viana'
            ),
            24 =>
            array (
                'id' => '525',
                'estado_id' => '10',
                'descricao' => 'Gonçalves Dias'
            ),
            25 =>
            array (
                'id' => '526',
                'estado_id' => '10',
                'descricao' => 'Governador Archer'
            ),
            26 =>
            array (
                'id' => '527',
                'estado_id' => '10',
                'descricao' => 'Governador Edison Lobão'
            ),
            27 =>
            array (
                'id' => '528',
                'estado_id' => '10',
                'descricao' => 'Governador Eugênio Barros'
            ),
            28 =>
            array (
                'id' => '529',
                'estado_id' => '10',
                'descricao' => 'Governador Luiz Rocha'
            ),
            29 =>
            array (
                'id' => '530',
                'estado_id' => '10',
                'descricao' => 'Governador Newton Bello'
            ),
            30 =>
            array (
                'id' => '531',
                'estado_id' => '10',
                'descricao' => 'Governador Nunes Freire'
            ),
            31 =>
            array (
                'id' => '532',
                'estado_id' => '10',
                'descricao' => 'Graça Aranha'
            ),
            32 =>
            array (
                'id' => '533',
                'estado_id' => '10',
                'descricao' => 'Grajaú'
            ),
            33 =>
            array (
                'id' => '534',
                'estado_id' => '10',
                'descricao' => 'Guimarães'
            ),
            34 =>
            array (
                'id' => '535',
                'estado_id' => '10',
                'descricao' => 'Humberto de Campos'
            ),
            35 =>
            array (
                'id' => '536',
                'estado_id' => '10',
                'descricao' => 'Icatu'
            ),
            36 =>
            array (
                'id' => '537',
                'estado_id' => '10',
                'descricao' => 'Igarapé do Meio'
            ),
            37 =>
            array (
                'id' => '538',
                'estado_id' => '10',
                'descricao' => 'Igarapé Grande'
            ),
            38 =>
            array (
                'id' => '539',
                'estado_id' => '10',
                'descricao' => 'Imperatriz'
            ),
            39 =>
            array (
                'id' => '540',
                'estado_id' => '10',
                'descricao' => 'Itaipava do Grajaú'
            ),
            40 =>
            array (
                'id' => '541',
                'estado_id' => '10',
                'descricao' => 'Itapecuru Mirim'
            ),
            41 =>
            array (
                'id' => '542',
                'estado_id' => '10',
                'descricao' => 'Itinga do Maranhão'
            ),
            42 =>
            array (
                'id' => '543',
                'estado_id' => '10',
                'descricao' => 'Jatobá'
            ),
            43 =>
            array (
                'id' => '544',
                'estado_id' => '10',
                'descricao' => 'Jenipapo dos Vieiras'
            ),
            44 =>
            array (
                'id' => '545',
                'estado_id' => '10',
                'descricao' => 'João Lisboa'
            ),
            45 =>
            array (
                'id' => '546',
                'estado_id' => '10',
                'descricao' => 'Joselândia'
            ),
            46 =>
            array (
                'id' => '547',
                'estado_id' => '10',
                'descricao' => 'Junco do Maranhão'
            ),
            47 =>
            array (
                'id' => '548',
                'estado_id' => '10',
                'descricao' => 'Lago da Pedra'
            ),
            48 =>
            array (
                'id' => '549',
                'estado_id' => '10',
                'descricao' => 'Lago do Junco'
            ),
            49 =>
            array (
                'id' => '550',
                'estado_id' => '10',
                'descricao' => 'Lago Verde'
            ),
            50 =>
            array (
                'id' => '551',
                'estado_id' => '10',
                'descricao' => 'Lagoa do Mato'
            ),
            51 =>
            array (
                'id' => '552',
                'estado_id' => '10',
                'descricao' => 'Lago dos Rodrigues'
            ),
            52 =>
            array (
                'id' => '553',
                'estado_id' => '10',
                'descricao' => 'Lagoa Grande do Maranhão'
            ),
            53 =>
            array (
                'id' => '554',
                'estado_id' => '10',
                'descricao' => 'Lajeado Novo'
            ),
            54 =>
            array (
                'id' => '555',
                'estado_id' => '10',
                'descricao' => 'Lima Campos'
            ),
            55 =>
            array (
                'id' => '556',
                'estado_id' => '10',
                'descricao' => 'Loreto'
            ),
            56 =>
            array (
                'id' => '557',
                'estado_id' => '10',
                'descricao' => 'Luís Domingues'
            ),
            57 =>
            array (
                'id' => '558',
                'estado_id' => '10',
                'descricao' => 'Magalhães de Almeida'
            ),
            58 =>
            array (
                'id' => '559',
                'estado_id' => '10',
                'descricao' => 'Maracaçumé'
            ),
            59 =>
            array (
                'id' => '560',
                'estado_id' => '10',
                'descricao' => 'Marajá do Sena'
            ),
            60 =>
            array (
                'id' => '561',
                'estado_id' => '10',
                'descricao' => 'Maranhãozinho'
            ),
            61 =>
            array (
                'id' => '562',
                'estado_id' => '10',
                'descricao' => 'Mata Roma'
            ),
            62 =>
            array (
                'id' => '563',
                'estado_id' => '10',
                'descricao' => 'Matinha'
            ),
            63 =>
            array (
                'id' => '564',
                'estado_id' => '10',
                'descricao' => 'Matões'
            ),
            64 =>
            array (
                'id' => '565',
                'estado_id' => '10',
                'descricao' => 'Matões do Norte'
            ),
            65 =>
            array (
                'id' => '566',
                'estado_id' => '10',
                'descricao' => 'Milagres do Maranhão'
            ),
            66 =>
            array (
                'id' => '567',
                'estado_id' => '10',
                'descricao' => 'Mirador'
            ),
            67 =>
            array (
                'id' => '568',
                'estado_id' => '10',
                'descricao' => 'Miranda do Norte'
            ),
            68 =>
            array (
                'id' => '569',
                'estado_id' => '10',
                'descricao' => 'Mirinzal'
            ),
            69 =>
            array (
                'id' => '570',
                'estado_id' => '10',
                'descricao' => 'Monção'
            ),
            70 =>
            array (
                'id' => '571',
                'estado_id' => '10',
                'descricao' => 'Montes Altos'
            ),
            71 =>
            array (
                'id' => '572',
                'estado_id' => '10',
                'descricao' => 'Morros'
            ),
            72 =>
            array (
                'id' => '573',
                'estado_id' => '10',
                'descricao' => 'Nina Rodrigues'
            ),
            73 =>
            array (
                'id' => '574',
                'estado_id' => '10',
                'descricao' => 'Nova Colinas'
            ),
            74 =>
            array (
                'id' => '575',
                'estado_id' => '10',
                'descricao' => 'Nova Iorque'
            ),
            75 =>
            array (
                'id' => '576',
                'estado_id' => '10',
                'descricao' => 'Nova Olinda do Maranhão'
            ),
            76 =>
            array (
                'id' => '577',
                'estado_id' => '10',
                'descricao' => 'Olho D\'água das Cunhãs'
            ),
            77 =>
            array (
                'id' => '578',
                'estado_id' => '10',
                'descricao' => 'Olinda Nova do Maranhão'
            ),
            78 =>
            array (
                'id' => '579',
                'estado_id' => '10',
                'descricao' => 'Paço do Lumiar'
            ),
            79 =>
            array (
                'id' => '580',
                'estado_id' => '10',
                'descricao' => 'Palmeirândia'
            ),
            80 =>
            array (
                'id' => '581',
                'estado_id' => '10',
                'descricao' => 'Paraibano'
            ),
            81 =>
            array (
                'id' => '582',
                'estado_id' => '10',
                'descricao' => 'Parnarama'
            ),
            82 =>
            array (
                'id' => '583',
                'estado_id' => '10',
                'descricao' => 'Passagem Franca'
            ),
            83 =>
            array (
                'id' => '584',
                'estado_id' => '10',
                'descricao' => 'Pastos Bons'
            ),
            84 =>
            array (
                'id' => '585',
                'estado_id' => '10',
                'descricao' => 'Paulino Neves'
            ),
            85 =>
            array (
                'id' => '586',
                'estado_id' => '10',
                'descricao' => 'Paulo Ramos'
            ),
            86 =>
            array (
                'id' => '587',
                'estado_id' => '10',
                'descricao' => 'Pedreiras'
            ),
            87 =>
            array (
                'id' => '588',
                'estado_id' => '10',
                'descricao' => 'Pedro do Rosário'
            ),
            88 =>
            array (
                'id' => '589',
                'estado_id' => '10',
                'descricao' => 'Penalva'
            ),
            89 =>
            array (
                'id' => '590',
                'estado_id' => '10',
                'descricao' => 'Peri Mirim'
            ),
            90 =>
            array (
                'id' => '591',
                'estado_id' => '10',
                'descricao' => 'Peritoró'
            ),
            91 =>
            array (
                'id' => '592',
                'estado_id' => '10',
                'descricao' => 'Pindaré-Mirim'
            ),
            92 =>
            array (
                'id' => '593',
                'estado_id' => '10',
                'descricao' => 'Pinheiro'
            ),
            93 =>
            array (
                'id' => '594',
                'estado_id' => '10',
                'descricao' => 'Pio Xii'
            ),
            94 =>
            array (
                'id' => '595',
                'estado_id' => '10',
                'descricao' => 'Pirapemas'
            ),
            95 =>
            array (
                'id' => '596',
                'estado_id' => '10',
                'descricao' => 'Poção de Pedras'
            ),
            96 =>
            array (
                'id' => '597',
                'estado_id' => '10',
                'descricao' => 'Porto Franco'
            ),
            97 =>
            array (
                'id' => '598',
                'estado_id' => '10',
                'descricao' => 'Porto Rico do Maranhão'
            ),
            98 =>
            array (
                'id' => '599',
                'estado_id' => '10',
                'descricao' => 'Presidente Dutra'
            ),
            99 =>
            array (
                'id' => '600',
                'estado_id' => '10',
                'descricao' => 'Presidente Juscelino'
            ),
            100 =>
            array (
                'id' => '601',
                'estado_id' => '10',
                'descricao' => 'Presidente Médici'
            ),
            101 =>
            array (
                'id' => '602',
                'estado_id' => '10',
                'descricao' => 'Presidente Sarney'
            ),
            102 =>
            array (
                'id' => '603',
                'estado_id' => '10',
                'descricao' => 'Presidente Vargas'
            ),
            103 =>
            array (
                'id' => '604',
                'estado_id' => '10',
                'descricao' => 'Primeira Cruz'
            ),
            104 =>
            array (
                'id' => '605',
                'estado_id' => '10',
                'descricao' => 'Raposa'
            ),
            105 =>
            array (
                'id' => '606',
                'estado_id' => '10',
                'descricao' => 'Riachão'
            ),
            106 =>
            array (
                'id' => '607',
                'estado_id' => '10',
                'descricao' => 'Ribamar Fiquene'
            ),
            107 =>
            array (
                'id' => '608',
                'estado_id' => '10',
                'descricao' => 'Rosário'
            ),
            108 =>
            array (
                'id' => '609',
                'estado_id' => '10',
                'descricao' => 'Sambaíba'
            ),
            109 =>
            array (
                'id' => '610',
                'estado_id' => '10',
                'descricao' => 'Santa Filomena do Maranhão'
            ),
            110 =>
            array (
                'id' => '611',
                'estado_id' => '10',
                'descricao' => 'Santa Helena'
            ),
            111 =>
            array (
                'id' => '612',
                'estado_id' => '10',
                'descricao' => 'Santa Inês'
            ),
            112 =>
            array (
                'id' => '613',
                'estado_id' => '10',
                'descricao' => 'Santa Luzia'
            ),
            113 =>
            array (
                'id' => '614',
                'estado_id' => '10',
                'descricao' => 'Santa Luzia do Paruá'
            ),
            114 =>
            array (
                'id' => '615',
                'estado_id' => '10',
                'descricao' => 'Santa Quitéria do Maranhão'
            ),
            115 =>
            array (
                'id' => '616',
                'estado_id' => '10',
                'descricao' => 'Santa Rita'
            ),
            116 =>
            array (
                'id' => '617',
                'estado_id' => '10',
                'descricao' => 'Santana do Maranhão'
            ),
            117 =>
            array (
                'id' => '618',
                'estado_id' => '10',
                'descricao' => 'Santo Amaro do Maranhão'
            ),
            118 =>
            array (
                'id' => '619',
                'estado_id' => '10',
                'descricao' => 'Santo Antônio dos Lopes'
            ),
            119 =>
            array (
                'id' => '620',
                'estado_id' => '10',
                'descricao' => 'São Benedito do Rio Preto'
            ),
            120 =>
            array (
                'id' => '621',
                'estado_id' => '10',
                'descricao' => 'São Bento'
            ),
            121 =>
            array (
                'id' => '622',
                'estado_id' => '10',
                'descricao' => 'São Bernardo'
            ),
            122 =>
            array (
                'id' => '623',
                'estado_id' => '10',
                'descricao' => 'São Domingos do Azeitão'
            ),
            123 =>
            array (
                'id' => '624',
                'estado_id' => '10',
                'descricao' => 'São Domingos do Maranhão'
            ),
            124 =>
            array (
                'id' => '625',
                'estado_id' => '10',
                'descricao' => 'São Félix de Balsas'
            ),
            125 =>
            array (
                'id' => '626',
                'estado_id' => '10',
                'descricao' => 'São Francisco do Brejão'
            ),
            126 =>
            array (
                'id' => '627',
                'estado_id' => '10',
                'descricao' => 'São Francisco do Maranhão'
            ),
            127 =>
            array (
                'id' => '628',
                'estado_id' => '10',
                'descricao' => 'São João Batista'
            ),
            128 =>
            array (
                'id' => '629',
                'estado_id' => '10',
                'descricao' => 'São João do Carú'
            ),
            129 =>
            array (
                'id' => '630',
                'estado_id' => '10',
                'descricao' => 'São João do Paraíso'
            ),
            130 =>
            array (
                'id' => '631',
                'estado_id' => '10',
                'descricao' => 'São João do Soter'
            ),
            131 =>
            array (
                'id' => '632',
                'estado_id' => '10',
                'descricao' => 'São João dos Patos'
            ),
            132 =>
            array (
                'id' => '633',
                'estado_id' => '10',
                'descricao' => 'São José de Ribamar'
            ),
            133 =>
            array (
                'id' => '634',
                'estado_id' => '10',
                'descricao' => 'São José dos Basílios'
            ),
            134 =>
            array (
                'id' => '635',
                'estado_id' => '10',
                'descricao' => 'São Luís'
            ),
            135 =>
            array (
                'id' => '636',
                'estado_id' => '10',
                'descricao' => 'São Luís Gonzaga do Maranhão'
            ),
            136 =>
            array (
                'id' => '637',
                'estado_id' => '10',
                'descricao' => 'São Mateus do Maranhão'
            ),
            137 =>
            array (
                'id' => '638',
                'estado_id' => '10',
                'descricao' => 'São Pedro da Água Branca'
            ),
            138 =>
            array (
                'id' => '639',
                'estado_id' => '10',
                'descricao' => 'São Pedro dos Crentes'
            ),
            139 =>
            array (
                'id' => '640',
                'estado_id' => '10',
                'descricao' => 'São Raimundo das Mangabeiras'
            ),
            140 =>
            array (
                'id' => '641',
                'estado_id' => '10',
                'descricao' => 'São Raimundo do Doca Bezerra'
            ),
            141 =>
            array (
                'id' => '642',
                'estado_id' => '10',
                'descricao' => 'São Roberto'
            ),
            142 =>
            array (
                'id' => '643',
                'estado_id' => '10',
                'descricao' => 'São Vicente Ferrer'
            ),
            143 =>
            array (
                'id' => '644',
                'estado_id' => '10',
                'descricao' => 'Satubinha'
            ),
            144 =>
            array (
                'id' => '645',
                'estado_id' => '10',
                'descricao' => 'Senador Alexandre Costa'
            ),
            145 =>
            array (
                'id' => '646',
                'estado_id' => '10',
                'descricao' => 'Senador La Rocque'
            ),
            146 =>
            array (
                'id' => '647',
                'estado_id' => '10',
                'descricao' => 'Serrano do Maranhão'
            ),
            147 =>
            array (
                'id' => '648',
                'estado_id' => '10',
                'descricao' => 'Sítio Novo'
            ),
            148 =>
            array (
                'id' => '649',
                'estado_id' => '10',
                'descricao' => 'Sucupira do Norte'
            ),
            149 =>
            array (
                'id' => '650',
                'estado_id' => '10',
                'descricao' => 'Sucupira do Riachão'
            ),
            150 =>
            array (
                'id' => '651',
                'estado_id' => '10',
                'descricao' => 'Tasso Fragoso'
            ),
            151 =>
            array (
                'id' => '652',
                'estado_id' => '10',
                'descricao' => 'Timbiras'
            ),
            152 =>
            array (
                'id' => '653',
                'estado_id' => '10',
                'descricao' => 'Timon'
            ),
            153 =>
            array (
                'id' => '654',
                'estado_id' => '10',
                'descricao' => 'Trizidela do Vale'
            ),
            154 =>
            array (
                'id' => '655',
                'estado_id' => '10',
                'descricao' => 'Tufilândia'
            ),
            155 =>
            array (
                'id' => '656',
                'estado_id' => '10',
                'descricao' => 'Tuntum'
            ),
            156 =>
            array (
                'id' => '657',
                'estado_id' => '10',
                'descricao' => 'Turiaçu'
            ),
            157 =>
            array (
                'id' => '658',
                'estado_id' => '10',
                'descricao' => 'Turilândia'
            ),
            158 =>
            array (
                'id' => '659',
                'estado_id' => '10',
                'descricao' => 'Tutóia'
            ),
            159 =>
            array (
                'id' => '660',
                'estado_id' => '10',
                'descricao' => 'Urbano Santos'
            ),
            160 =>
            array (
                'id' => '661',
                'estado_id' => '10',
                'descricao' => 'Vargem Grande'
            ),
            161 =>
            array (
                'id' => '662',
                'estado_id' => '10',
                'descricao' => 'Viana'
            ),
            162 =>
            array (
                'id' => '663',
                'estado_id' => '10',
                'descricao' => 'Vila Nova dos Martírios'
            ),
            163 =>
            array (
                'id' => '664',
                'estado_id' => '10',
                'descricao' => 'Vitória do Mearim'
            ),
            164 =>
            array (
                'id' => '665',
                'estado_id' => '10',
                'descricao' => 'Vitorino Freire'
            ),
            165 =>
            array (
                'id' => '666',
                'estado_id' => '10',
                'descricao' => 'Zé Doca'
            ),
            166 =>
            array (
                'id' => '667',
                'estado_id' => '17',
                'descricao' => 'Acauã'
            ),
            167 =>
            array (
                'id' => '668',
                'estado_id' => '17',
                'descricao' => 'Agricolândia'
            ),
            168 =>
            array (
                'id' => '669',
                'estado_id' => '17',
                'descricao' => 'Água Branca'
            ),
            169 =>
            array (
                'id' => '670',
                'estado_id' => '17',
                'descricao' => 'Alagoinha do Piauí'
            ),
            170 =>
            array (
                'id' => '671',
                'estado_id' => '17',
                'descricao' => 'Alegrete do Piauí'
            ),
            171 =>
            array (
                'id' => '672',
                'estado_id' => '17',
                'descricao' => 'Alto Longá'
            ),
            172 =>
            array (
                'id' => '673',
                'estado_id' => '17',
                'descricao' => 'Altos'
            ),
            173 =>
            array (
                'id' => '674',
                'estado_id' => '17',
                'descricao' => 'Alvorada do Gurguéia'
            ),
            174 =>
            array (
                'id' => '675',
                'estado_id' => '17',
                'descricao' => 'Amarante'
            ),
            175 =>
            array (
                'id' => '676',
                'estado_id' => '17',
                'descricao' => 'Angical do Piauí'
            ),
            176 =>
            array (
                'id' => '677',
                'estado_id' => '17',
                'descricao' => 'Anísio de Abreu'
            ),
            177 =>
            array (
                'id' => '678',
                'estado_id' => '17',
                'descricao' => 'Antônio Almeida'
            ),
            178 =>
            array (
                'id' => '679',
                'estado_id' => '17',
                'descricao' => 'Aroazes'
            ),
            179 =>
            array (
                'id' => '680',
                'estado_id' => '17',
                'descricao' => 'Aroeiras do Itaim'
            ),
            180 =>
            array (
                'id' => '681',
                'estado_id' => '17',
                'descricao' => 'Arraial'
            ),
            181 =>
            array (
                'id' => '682',
                'estado_id' => '17',
                'descricao' => 'Assunção do Piauí'
            ),
            182 =>
            array (
                'id' => '683',
                'estado_id' => '17',
                'descricao' => 'Avelino Lopes'
            ),
            183 =>
            array (
                'id' => '684',
                'estado_id' => '17',
                'descricao' => 'Baixa Grande do Ribeiro'
            ),
            184 =>
            array (
                'id' => '685',
                'estado_id' => '17',
                'descricao' => 'Barra D\'alcântara'
            ),
            185 =>
            array (
                'id' => '686',
                'estado_id' => '17',
                'descricao' => 'Barras'
            ),
            186 =>
            array (
                'id' => '687',
                'estado_id' => '17',
                'descricao' => 'Barreiras do Piauí'
            ),
            187 =>
            array (
                'id' => '688',
                'estado_id' => '17',
                'descricao' => 'Barro Duro'
            ),
            188 =>
            array (
                'id' => '689',
                'estado_id' => '17',
                'descricao' => 'Batalha'
            ),
            189 =>
            array (
                'id' => '690',
                'estado_id' => '17',
                'descricao' => 'Bela Vista do Piauí'
            ),
            190 =>
            array (
                'id' => '691',
                'estado_id' => '17',
                'descricao' => 'Belém do Piauí'
            ),
            191 =>
            array (
                'id' => '692',
                'estado_id' => '17',
                'descricao' => 'Beneditinos'
            ),
            192 =>
            array (
                'id' => '693',
                'estado_id' => '17',
                'descricao' => 'Bertolínia'
            ),
            193 =>
            array (
                'id' => '694',
                'estado_id' => '17',
                'descricao' => 'Betânia do Piauí'
            ),
            194 =>
            array (
                'id' => '695',
                'estado_id' => '17',
                'descricao' => 'Boa Hora'
            ),
            195 =>
            array (
                'id' => '696',
                'estado_id' => '17',
                'descricao' => 'Bocaina'
            ),
            196 =>
            array (
                'id' => '697',
                'estado_id' => '17',
                'descricao' => 'Bom Jesus'
            ),
            197 =>
            array (
                'id' => '698',
                'estado_id' => '17',
                'descricao' => 'Bom Princípio do Piauí'
            ),
            198 =>
            array (
                'id' => '699',
                'estado_id' => '17',
                'descricao' => 'Bonfim do Piauí'
            ),
            199 =>
            array (
                'id' => '700',
                'estado_id' => '17',
                'descricao' => 'Boqueirão do Piauí'
            ),
            200 =>
            array (
                'id' => '701',
                'estado_id' => '17',
                'descricao' => 'Brasileira'
            ),
            201 =>
            array (
                'id' => '702',
                'estado_id' => '17',
                'descricao' => 'Brejo do Piauí'
            ),
            202 =>
            array (
                'id' => '703',
                'estado_id' => '17',
                'descricao' => 'Buriti dos Lopes'
            ),
            203 =>
            array (
                'id' => '704',
                'estado_id' => '17',
                'descricao' => 'Buriti dos Montes'
            ),
            204 =>
            array (
                'id' => '705',
                'estado_id' => '17',
                'descricao' => 'Cabeceiras do Piauí'
            ),
            205 =>
            array (
                'id' => '706',
                'estado_id' => '17',
                'descricao' => 'Cajazeiras do Piauí'
            ),
            206 =>
            array (
                'id' => '707',
                'estado_id' => '17',
                'descricao' => 'Cajueiro da Praia'
            ),
            207 =>
            array (
                'id' => '708',
                'estado_id' => '17',
                'descricao' => 'Caldeirão Grande do Piauí'
            ),
            208 =>
            array (
                'id' => '709',
                'estado_id' => '17',
                'descricao' => 'Campinas do Piauí'
            ),
            209 =>
            array (
                'id' => '710',
                'estado_id' => '17',
                'descricao' => 'Campo Alegre do Fidalgo'
            ),
            210 =>
            array (
                'id' => '711',
                'estado_id' => '17',
                'descricao' => 'Campo Grande do Piauí'
            ),
            211 =>
            array (
                'id' => '712',
                'estado_id' => '17',
                'descricao' => 'Campo Largo do Piauí'
            ),
            212 =>
            array (
                'id' => '713',
                'estado_id' => '17',
                'descricao' => 'Campo Maior'
            ),
            213 =>
            array (
                'id' => '714',
                'estado_id' => '17',
                'descricao' => 'Canavieira'
            ),
            214 =>
            array (
                'id' => '715',
                'estado_id' => '17',
                'descricao' => 'Canto do Buriti'
            ),
            215 =>
            array (
                'id' => '716',
                'estado_id' => '17',
                'descricao' => 'Capitão de Campos'
            ),
            216 =>
            array (
                'id' => '717',
                'estado_id' => '17',
                'descricao' => 'Capitão Gervásio Oliveira'
            ),
            217 =>
            array (
                'id' => '718',
                'estado_id' => '17',
                'descricao' => 'Caracol'
            ),
            218 =>
            array (
                'id' => '719',
                'estado_id' => '17',
                'descricao' => 'Caraúbas do Piauí'
            ),
            219 =>
            array (
                'id' => '720',
                'estado_id' => '17',
                'descricao' => 'Caridade do Piauí'
            ),
            220 =>
            array (
                'id' => '721',
                'estado_id' => '17',
                'descricao' => 'Castelo do Piauí'
            ),
            221 =>
            array (
                'id' => '722',
                'estado_id' => '17',
                'descricao' => 'Caxingó'
            ),
            222 =>
            array (
                'id' => '723',
                'estado_id' => '17',
                'descricao' => 'Cocal'
            ),
            223 =>
            array (
                'id' => '724',
                'estado_id' => '17',
                'descricao' => 'Cocal de Telha'
            ),
            224 =>
            array (
                'id' => '725',
                'estado_id' => '17',
                'descricao' => 'Cocal dos Alves'
            ),
            225 =>
            array (
                'id' => '726',
                'estado_id' => '17',
                'descricao' => 'Coivaras'
            ),
            226 =>
            array (
                'id' => '727',
                'estado_id' => '17',
                'descricao' => 'Colônia do Gurguéia'
            ),
            227 =>
            array (
                'id' => '728',
                'estado_id' => '17',
                'descricao' => 'Colônia do Piauí'
            ),
            228 =>
            array (
                'id' => '729',
                'estado_id' => '17',
                'descricao' => 'Conceição do Canindé'
            ),
            229 =>
            array (
                'id' => '730',
                'estado_id' => '17',
                'descricao' => 'Coronel José Dias'
            ),
            230 =>
            array (
                'id' => '731',
                'estado_id' => '17',
                'descricao' => 'Corrente'
            ),
            231 =>
            array (
                'id' => '732',
                'estado_id' => '17',
                'descricao' => 'Cristalândia do Piauí'
            ),
            232 =>
            array (
                'id' => '733',
                'estado_id' => '17',
                'descricao' => 'Cristino Castro'
            ),
            233 =>
            array (
                'id' => '734',
                'estado_id' => '17',
                'descricao' => 'Curimatá'
            ),
            234 =>
            array (
                'id' => '735',
                'estado_id' => '17',
                'descricao' => 'Currais'
            ),
            235 =>
            array (
                'id' => '736',
                'estado_id' => '17',
                'descricao' => 'Curralinhos'
            ),
            236 =>
            array (
                'id' => '737',
                'estado_id' => '17',
                'descricao' => 'Curral Novo do Piauí'
            ),
            237 =>
            array (
                'id' => '738',
                'estado_id' => '17',
                'descricao' => 'Demerval Lobão'
            ),
            238 =>
            array (
                'id' => '739',
                'estado_id' => '17',
                'descricao' => 'Dirceu Arcoverde'
            ),
            239 =>
            array (
                'id' => '740',
                'estado_id' => '17',
                'descricao' => 'Dom Expedito Lopes'
            ),
            240 =>
            array (
                'id' => '741',
                'estado_id' => '17',
                'descricao' => 'Domingos Mourão'
            ),
            241 =>
            array (
                'id' => '742',
                'estado_id' => '17',
                'descricao' => 'Dom Inocêncio'
            ),
            242 =>
            array (
                'id' => '743',
                'estado_id' => '17',
                'descricao' => 'Elesbão Veloso'
            ),
            243 =>
            array (
                'id' => '744',
                'estado_id' => '17',
                'descricao' => 'Eliseu Martins'
            ),
            244 =>
            array (
                'id' => '745',
                'estado_id' => '17',
                'descricao' => 'Esperantina'
            ),
            245 =>
            array (
                'id' => '746',
                'estado_id' => '17',
                'descricao' => 'Fartura do Piauí'
            ),
            246 =>
            array (
                'id' => '747',
                'estado_id' => '17',
                'descricao' => 'Flores do Piauí'
            ),
            247 =>
            array (
                'id' => '748',
                'estado_id' => '17',
                'descricao' => 'Floresta do Piauí'
            ),
            248 =>
            array (
                'id' => '749',
                'estado_id' => '17',
                'descricao' => 'Floriano'
            ),
            249 =>
            array (
                'id' => '750',
                'estado_id' => '17',
                'descricao' => 'Francinópolis'
            ),
            250 =>
            array (
                'id' => '751',
                'estado_id' => '17',
                'descricao' => 'Francisco Ayres'
            ),
            251 =>
            array (
                'id' => '752',
                'estado_id' => '17',
                'descricao' => 'Francisco Macedo'
            ),
            252 =>
            array (
                'id' => '753',
                'estado_id' => '17',
                'descricao' => 'Francisco Santos'
            ),
            253 =>
            array (
                'id' => '754',
                'estado_id' => '17',
                'descricao' => 'Fronteiras'
            ),
            254 =>
            array (
                'id' => '755',
                'estado_id' => '17',
                'descricao' => 'Geminiano'
            ),
            255 =>
            array (
                'id' => '756',
                'estado_id' => '17',
                'descricao' => 'Gilbués'
            ),
            256 =>
            array (
                'id' => '757',
                'estado_id' => '17',
                'descricao' => 'Guadalupe'
            ),
            257 =>
            array (
                'id' => '758',
                'estado_id' => '17',
                'descricao' => 'Guaribas'
            ),
            258 =>
            array (
                'id' => '759',
                'estado_id' => '17',
                'descricao' => 'Hugo Napoleão'
            ),
            259 =>
            array (
                'id' => '760',
                'estado_id' => '17',
                'descricao' => 'Ilha Grande'
            ),
            260 =>
            array (
                'id' => '761',
                'estado_id' => '17',
                'descricao' => 'Inhuma'
            ),
            261 =>
            array (
                'id' => '762',
                'estado_id' => '17',
                'descricao' => 'Ipiranga do Piauí'
            ),
            262 =>
            array (
                'id' => '763',
                'estado_id' => '17',
                'descricao' => 'Isaías Coelho'
            ),
            263 =>
            array (
                'id' => '764',
                'estado_id' => '17',
                'descricao' => 'Itainópolis'
            ),
            264 =>
            array (
                'id' => '765',
                'estado_id' => '17',
                'descricao' => 'Itaueira'
            ),
            265 =>
            array (
                'id' => '766',
                'estado_id' => '17',
                'descricao' => 'Jacobina do Piauí'
            ),
            266 =>
            array (
                'id' => '767',
                'estado_id' => '17',
                'descricao' => 'Jaicós'
            ),
            267 =>
            array (
                'id' => '768',
                'estado_id' => '17',
                'descricao' => 'Jardim do Mulato'
            ),
            268 =>
            array (
                'id' => '769',
                'estado_id' => '17',
                'descricao' => 'Jatobá do Piauí'
            ),
            269 =>
            array (
                'id' => '770',
                'estado_id' => '17',
                'descricao' => 'Jerumenha'
            ),
            270 =>
            array (
                'id' => '771',
                'estado_id' => '17',
                'descricao' => 'João Costa'
            ),
            271 =>
            array (
                'id' => '772',
                'estado_id' => '17',
                'descricao' => 'Joaquim Pires'
            ),
            272 =>
            array (
                'id' => '773',
                'estado_id' => '17',
                'descricao' => 'Joca Marques'
            ),
            273 =>
            array (
                'id' => '774',
                'estado_id' => '17',
                'descricao' => 'José de Freitas'
            ),
            274 =>
            array (
                'id' => '775',
                'estado_id' => '17',
                'descricao' => 'Juazeiro do Piauí'
            ),
            275 =>
            array (
                'id' => '776',
                'estado_id' => '17',
                'descricao' => 'Júlio Borges'
            ),
            276 =>
            array (
                'id' => '777',
                'estado_id' => '17',
                'descricao' => 'Jurema'
            ),
            277 =>
            array (
                'id' => '778',
                'estado_id' => '17',
                'descricao' => 'Lagoinha do Piauí'
            ),
            278 =>
            array (
                'id' => '779',
                'estado_id' => '17',
                'descricao' => 'Lagoa Alegre'
            ),
            279 =>
            array (
                'id' => '780',
                'estado_id' => '17',
                'descricao' => 'Lagoa do Barro do Piauí'
            ),
            280 =>
            array (
                'id' => '781',
                'estado_id' => '17',
                'descricao' => 'Lagoa de São Francisco'
            ),
            281 =>
            array (
                'id' => '782',
                'estado_id' => '17',
                'descricao' => 'Lagoa do Piauí'
            ),
            282 =>
            array (
                'id' => '783',
                'estado_id' => '17',
                'descricao' => 'Lagoa do Sítio'
            ),
            283 =>
            array (
                'id' => '784',
                'estado_id' => '17',
                'descricao' => 'Landri Sales'
            ),
            284 =>
            array (
                'id' => '785',
                'estado_id' => '17',
                'descricao' => 'Luís Correia'
            ),
            285 =>
            array (
                'id' => '786',
                'estado_id' => '17',
                'descricao' => 'Luzilândia'
            ),
            286 =>
            array (
                'id' => '787',
                'estado_id' => '17',
                'descricao' => 'Madeiro'
            ),
            287 =>
            array (
                'id' => '788',
                'estado_id' => '17',
                'descricao' => 'Manoel Emídio'
            ),
            288 =>
            array (
                'id' => '789',
                'estado_id' => '17',
                'descricao' => 'Marcolândia'
            ),
            289 =>
            array (
                'id' => '790',
                'estado_id' => '17',
                'descricao' => 'Marcos Parente'
            ),
            290 =>
            array (
                'id' => '791',
                'estado_id' => '17',
                'descricao' => 'Massapê do Piauí'
            ),
            291 =>
            array (
                'id' => '792',
                'estado_id' => '17',
                'descricao' => 'Matias Olímpio'
            ),
            292 =>
            array (
                'id' => '793',
                'estado_id' => '17',
                'descricao' => 'Miguel Alves'
            ),
            293 =>
            array (
                'id' => '794',
                'estado_id' => '17',
                'descricao' => 'Miguel Leão'
            ),
            294 =>
            array (
                'id' => '795',
                'estado_id' => '17',
                'descricao' => 'Milton Brandão'
            ),
            295 =>
            array (
                'id' => '796',
                'estado_id' => '17',
                'descricao' => 'Monsenhor Gil'
            ),
            296 =>
            array (
                'id' => '797',
                'estado_id' => '17',
                'descricao' => 'Monsenhor Hipólito'
            ),
            297 =>
            array (
                'id' => '798',
                'estado_id' => '17',
                'descricao' => 'Monte Alegre do Piauí'
            ),
            298 =>
            array (
                'id' => '799',
                'estado_id' => '17',
                'descricao' => 'Morro Cabeça No Tempo'
            ),
            299 =>
            array (
                'id' => '800',
                'estado_id' => '17',
                'descricao' => 'Morro do Chapéu do Piauí'
            ),
            300 =>
            array (
                'id' => '801',
                'estado_id' => '17',
                'descricao' => 'Murici dos Portelas'
            ),
            301 =>
            array (
                'id' => '802',
                'estado_id' => '17',
                'descricao' => 'Nazaré do Piauí'
            ),
            302 =>
            array (
                'id' => '803',
                'estado_id' => '17',
                'descricao' => 'Nossa Senhora de Nazaré'
            ),
            303 =>
            array (
                'id' => '804',
                'estado_id' => '17',
                'descricao' => 'Nossa Senhora dos Remédios'
            ),
            304 =>
            array (
                'id' => '805',
                'estado_id' => '17',
                'descricao' => 'Novo Oriente do Piauí'
            ),
            305 =>
            array (
                'id' => '806',
                'estado_id' => '17',
                'descricao' => 'Novo Santo Antônio'
            ),
            306 =>
            array (
                'id' => '807',
                'estado_id' => '17',
                'descricao' => 'Oeiras'
            ),
            307 =>
            array (
                'id' => '808',
                'estado_id' => '17',
                'descricao' => 'Olho D\'água do Piauí'
            ),
            308 =>
            array (
                'id' => '809',
                'estado_id' => '17',
                'descricao' => 'Padre Marcos'
            ),
            309 =>
            array (
                'id' => '810',
                'estado_id' => '17',
                'descricao' => 'Paes Landim'
            ),
            310 =>
            array (
                'id' => '811',
                'estado_id' => '17',
                'descricao' => 'Pajeú do Piauí'
            ),
            311 =>
            array (
                'id' => '812',
                'estado_id' => '17',
                'descricao' => 'Palmeira do Piauí'
            ),
            312 =>
            array (
                'id' => '813',
                'estado_id' => '17',
                'descricao' => 'Palmeirais'
            ),
            313 =>
            array (
                'id' => '814',
                'estado_id' => '17',
                'descricao' => 'Paquetá'
            ),
            314 =>
            array (
                'id' => '815',
                'estado_id' => '17',
                'descricao' => 'Parnaguá'
            ),
            315 =>
            array (
                'id' => '816',
                'estado_id' => '17',
                'descricao' => 'Parnaíba'
            ),
            316 =>
            array (
                'id' => '817',
                'estado_id' => '17',
                'descricao' => 'Passagem Franca do Piauí'
            ),
            317 =>
            array (
                'id' => '818',
                'estado_id' => '17',
                'descricao' => 'Patos do Piauí'
            ),
            318 =>
            array (
                'id' => '819',
                'estado_id' => '17',
                'descricao' => 'Pau D\'arco do Piauí'
            ),
            319 =>
            array (
                'id' => '820',
                'estado_id' => '17',
                'descricao' => 'Paulistana'
            ),
            320 =>
            array (
                'id' => '821',
                'estado_id' => '17',
                'descricao' => 'Pavussu'
            ),
            321 =>
            array (
                'id' => '822',
                'estado_id' => '17',
                'descricao' => 'Pedro Ii'
            ),
            322 =>
            array (
                'id' => '823',
                'estado_id' => '17',
                'descricao' => 'Pedro Laurentino'
            ),
            323 =>
            array (
                'id' => '824',
                'estado_id' => '17',
                'descricao' => 'Nova Santa Rita'
            ),
            324 =>
            array (
                'id' => '825',
                'estado_id' => '17',
                'descricao' => 'Picos'
            ),
            325 =>
            array (
                'id' => '826',
                'estado_id' => '17',
                'descricao' => 'Pimenteiras'
            ),
            326 =>
            array (
                'id' => '827',
                'estado_id' => '17',
                'descricao' => 'Pio Ix'
            ),
            327 =>
            array (
                'id' => '828',
                'estado_id' => '17',
                'descricao' => 'Piracuruca'
            ),
            328 =>
            array (
                'id' => '829',
                'estado_id' => '17',
                'descricao' => 'Piripiri'
            ),
            329 =>
            array (
                'id' => '830',
                'estado_id' => '17',
                'descricao' => 'Porto'
            ),
            330 =>
            array (
                'id' => '831',
                'estado_id' => '17',
                'descricao' => 'Porto Alegre do Piauí'
            ),
            331 =>
            array (
                'id' => '832',
                'estado_id' => '17',
                'descricao' => 'Prata do Piauí'
            ),
            332 =>
            array (
                'id' => '833',
                'estado_id' => '17',
                'descricao' => 'Queimada Nova'
            ),
            333 =>
            array (
                'id' => '834',
                'estado_id' => '17',
                'descricao' => 'Redenção do Gurguéia'
            ),
            334 =>
            array (
                'id' => '835',
                'estado_id' => '17',
                'descricao' => 'Regeneração'
            ),
            335 =>
            array (
                'id' => '836',
                'estado_id' => '17',
                'descricao' => 'Riacho Frio'
            ),
            336 =>
            array (
                'id' => '837',
                'estado_id' => '17',
                'descricao' => 'Ribeira do Piauí'
            ),
            337 =>
            array (
                'id' => '838',
                'estado_id' => '17',
                'descricao' => 'Ribeiro Gonçalves'
            ),
            338 =>
            array (
                'id' => '839',
                'estado_id' => '17',
                'descricao' => 'Rio Grande do Piauí'
            ),
            339 =>
            array (
                'id' => '840',
                'estado_id' => '17',
                'descricao' => 'Santa Cruz do Piauí'
            ),
            340 =>
            array (
                'id' => '841',
                'estado_id' => '17',
                'descricao' => 'Santa Cruz dos Milagres'
            ),
            341 =>
            array (
                'id' => '842',
                'estado_id' => '17',
                'descricao' => 'Santa Filomena'
            ),
            342 =>
            array (
                'id' => '843',
                'estado_id' => '17',
                'descricao' => 'Santa Luz'
            ),
            343 =>
            array (
                'id' => '844',
                'estado_id' => '17',
                'descricao' => 'Santana do Piauí'
            ),
            344 =>
            array (
                'id' => '845',
                'estado_id' => '17',
                'descricao' => 'Santa Rosa do Piauí'
            ),
            345 =>
            array (
                'id' => '846',
                'estado_id' => '17',
                'descricao' => 'Santo Antônio de Lisboa'
            ),
            346 =>
            array (
                'id' => '847',
                'estado_id' => '17',
                'descricao' => 'Santo Antônio dos Milagres'
            ),
            347 =>
            array (
                'id' => '848',
                'estado_id' => '17',
                'descricao' => 'Santo Inácio do Piauí'
            ),
            348 =>
            array (
                'id' => '849',
                'estado_id' => '17',
                'descricao' => 'São Braz do Piauí'
            ),
            349 =>
            array (
                'id' => '850',
                'estado_id' => '17',
                'descricao' => 'São Félix do Piauí'
            ),
            350 =>
            array (
                'id' => '851',
                'estado_id' => '17',
                'descricao' => 'São Francisco de Assis do Piauí'
            ),
            351 =>
            array (
                'id' => '852',
                'estado_id' => '17',
                'descricao' => 'São Francisco do Piauí'
            ),
            352 =>
            array (
                'id' => '853',
                'estado_id' => '17',
                'descricao' => 'São Gonçalo do Gurguéia'
            ),
            353 =>
            array (
                'id' => '854',
                'estado_id' => '17',
                'descricao' => 'São Gonçalo do Piauí'
            ),
            354 =>
            array (
                'id' => '855',
                'estado_id' => '17',
                'descricao' => 'São João da Canabrava'
            ),
            355 =>
            array (
                'id' => '856',
                'estado_id' => '17',
                'descricao' => 'São João da Fronteira'
            ),
            356 =>
            array (
                'id' => '857',
                'estado_id' => '17',
                'descricao' => 'São João da Serra'
            ),
            357 =>
            array (
                'id' => '858',
                'estado_id' => '17',
                'descricao' => 'São João da Varjota'
            ),
            358 =>
            array (
                'id' => '859',
                'estado_id' => '17',
                'descricao' => 'São João do Arraial'
            ),
            359 =>
            array (
                'id' => '860',
                'estado_id' => '17',
                'descricao' => 'São João do Piauí'
            ),
            360 =>
            array (
                'id' => '861',
                'estado_id' => '17',
                'descricao' => 'São José do Divino'
            ),
            361 =>
            array (
                'id' => '862',
                'estado_id' => '17',
                'descricao' => 'São José do Peixe'
            ),
            362 =>
            array (
                'id' => '863',
                'estado_id' => '17',
                'descricao' => 'São José do Piauí'
            ),
            363 =>
            array (
                'id' => '864',
                'estado_id' => '17',
                'descricao' => 'São Julião'
            ),
            364 =>
            array (
                'id' => '865',
                'estado_id' => '17',
                'descricao' => 'São Lourenço do Piauí'
            ),
            365 =>
            array (
                'id' => '866',
                'estado_id' => '17',
                'descricao' => 'São Luis do Piauí'
            ),
            366 =>
            array (
                'id' => '867',
                'estado_id' => '17',
                'descricao' => 'São Miguel da Baixa Grande'
            ),
            367 =>
            array (
                'id' => '868',
                'estado_id' => '17',
                'descricao' => 'São Miguel do Fidalgo'
            ),
            368 =>
            array (
                'id' => '869',
                'estado_id' => '17',
                'descricao' => 'São Miguel do Tapuio'
            ),
            369 =>
            array (
                'id' => '870',
                'estado_id' => '17',
                'descricao' => 'São Pedro do Piauí'
            ),
            370 =>
            array (
                'id' => '871',
                'estado_id' => '17',
                'descricao' => 'São Raimundo Nonato'
            ),
            371 =>
            array (
                'id' => '872',
                'estado_id' => '17',
                'descricao' => 'Sebastião Barros'
            ),
            372 =>
            array (
                'id' => '873',
                'estado_id' => '17',
                'descricao' => 'Sebastião Leal'
            ),
            373 =>
            array (
                'id' => '874',
                'estado_id' => '17',
                'descricao' => 'Sigefredo Pacheco'
            ),
            374 =>
            array (
                'id' => '875',
                'estado_id' => '17',
                'descricao' => 'Simões'
            ),
            375 =>
            array (
                'id' => '876',
                'estado_id' => '17',
                'descricao' => 'Simplício Mendes'
            ),
            376 =>
            array (
                'id' => '877',
                'estado_id' => '17',
                'descricao' => 'Socorro do Piauí'
            ),
            377 =>
            array (
                'id' => '878',
                'estado_id' => '17',
                'descricao' => 'Sussuapara'
            ),
            378 =>
            array (
                'id' => '879',
                'estado_id' => '17',
                'descricao' => 'Tamboril do Piauí'
            ),
            379 =>
            array (
                'id' => '880',
                'estado_id' => '17',
                'descricao' => 'Tanque do Piauí'
            ),
            380 =>
            array (
                'id' => '881',
                'estado_id' => '17',
                'descricao' => 'Teresina'
            ),
            381 =>
            array (
                'id' => '882',
                'estado_id' => '17',
                'descricao' => 'União'
            ),
            382 =>
            array (
                'id' => '883',
                'estado_id' => '17',
                'descricao' => 'Uruçuí'
            ),
            383 =>
            array (
                'id' => '884',
                'estado_id' => '17',
                'descricao' => 'Valença do Piauí'
            ),
            384 =>
            array (
                'id' => '885',
                'estado_id' => '17',
                'descricao' => 'Várzea Branca'
            ),
            385 =>
            array (
                'id' => '886',
                'estado_id' => '17',
                'descricao' => 'Várzea Grande'
            ),
            386 =>
            array (
                'id' => '887',
                'estado_id' => '17',
                'descricao' => 'Vera Mendes'
            ),
            387 =>
            array (
                'id' => '888',
                'estado_id' => '17',
                'descricao' => 'Vila Nova do Piauí'
            ),
            388 =>
            array (
                'id' => '889',
                'estado_id' => '17',
                'descricao' => 'Wall Ferraz'
            ),
            389 =>
            array (
                'id' => '890',
                'estado_id' => '6',
                'descricao' => 'Abaiara'
            ),
            390 =>
            array (
                'id' => '891',
                'estado_id' => '6',
                'descricao' => 'Acarape'
            ),
            391 =>
            array (
                'id' => '892',
                'estado_id' => '6',
                'descricao' => 'Acaraú'
            ),
            392 =>
            array (
                'id' => '893',
                'estado_id' => '6',
                'descricao' => 'Acopiara'
            ),
            393 =>
            array (
                'id' => '894',
                'estado_id' => '6',
                'descricao' => 'Aiuaba'
            ),
            394 =>
            array (
                'id' => '895',
                'estado_id' => '6',
                'descricao' => 'Alcântaras'
            ),
            395 =>
            array (
                'id' => '896',
                'estado_id' => '6',
                'descricao' => 'Altaneira'
            ),
            396 =>
            array (
                'id' => '897',
                'estado_id' => '6',
                'descricao' => 'Alto Santo'
            ),
            397 =>
            array (
                'id' => '898',
                'estado_id' => '6',
                'descricao' => 'Amontada'
            ),
            398 =>
            array (
                'id' => '899',
                'estado_id' => '6',
                'descricao' => 'Antonina do Norte'
            ),
            399 =>
            array (
                'id' => '900',
                'estado_id' => '6',
                'descricao' => 'Apuiarés'
            ),
            400 =>
            array (
                'id' => '901',
                'estado_id' => '6',
                'descricao' => 'Aquiraz'
            ),
            401 =>
            array (
                'id' => '902',
                'estado_id' => '6',
                'descricao' => 'Aracati'
            ),
            402 =>
            array (
                'id' => '903',
                'estado_id' => '6',
                'descricao' => 'Aracoiaba'
            ),
            403 =>
            array (
                'id' => '904',
                'estado_id' => '6',
                'descricao' => 'Ararendá'
            ),
            404 =>
            array (
                'id' => '905',
                'estado_id' => '6',
                'descricao' => 'Araripe'
            ),
            405 =>
            array (
                'id' => '906',
                'estado_id' => '6',
                'descricao' => 'Aratuba'
            ),
            406 =>
            array (
                'id' => '907',
                'estado_id' => '6',
                'descricao' => 'Arneiroz'
            ),
            407 =>
            array (
                'id' => '908',
                'estado_id' => '6',
                'descricao' => 'Assaré'
            ),
            408 =>
            array (
                'id' => '909',
                'estado_id' => '6',
                'descricao' => 'Aurora'
            ),
            409 =>
            array (
                'id' => '910',
                'estado_id' => '6',
                'descricao' => 'Baixio'
            ),
            410 =>
            array (
                'id' => '911',
                'estado_id' => '6',
                'descricao' => 'Banabuiú'
            ),
            411 =>
            array (
                'id' => '912',
                'estado_id' => '6',
                'descricao' => 'Barbalha'
            ),
            412 =>
            array (
                'id' => '913',
                'estado_id' => '6',
                'descricao' => 'Barreira'
            ),
            413 =>
            array (
                'id' => '914',
                'estado_id' => '6',
                'descricao' => 'Barro'
            ),
            414 =>
            array (
                'id' => '915',
                'estado_id' => '6',
                'descricao' => 'Barroquinha'
            ),
            415 =>
            array (
                'id' => '916',
                'estado_id' => '6',
                'descricao' => 'Baturité'
            ),
            416 =>
            array (
                'id' => '917',
                'estado_id' => '6',
                'descricao' => 'Beberibe'
            ),
            417 =>
            array (
                'id' => '918',
                'estado_id' => '6',
                'descricao' => 'Bela Cruz'
            ),
            418 =>
            array (
                'id' => '919',
                'estado_id' => '6',
                'descricao' => 'Boa Viagem'
            ),
            419 =>
            array (
                'id' => '920',
                'estado_id' => '6',
                'descricao' => 'Brejo Santo'
            ),
            420 =>
            array (
                'id' => '921',
                'estado_id' => '6',
                'descricao' => 'Camocim'
            ),
            421 =>
            array (
                'id' => '922',
                'estado_id' => '6',
                'descricao' => 'Campos Sales'
            ),
            422 =>
            array (
                'id' => '923',
                'estado_id' => '6',
                'descricao' => 'Canindé'
            ),
            423 =>
            array (
                'id' => '924',
                'estado_id' => '6',
                'descricao' => 'Capistrano'
            ),
            424 =>
            array (
                'id' => '925',
                'estado_id' => '6',
                'descricao' => 'Caridade'
            ),
            425 =>
            array (
                'id' => '926',
                'estado_id' => '6',
                'descricao' => 'Cariré'
            ),
            426 =>
            array (
                'id' => '927',
                'estado_id' => '6',
                'descricao' => 'Caririaçu'
            ),
            427 =>
            array (
                'id' => '928',
                'estado_id' => '6',
                'descricao' => 'Cariús'
            ),
            428 =>
            array (
                'id' => '929',
                'estado_id' => '6',
                'descricao' => 'Carnaubal'
            ),
            429 =>
            array (
                'id' => '930',
                'estado_id' => '6',
                'descricao' => 'Cascavel'
            ),
            430 =>
            array (
                'id' => '931',
                'estado_id' => '6',
                'descricao' => 'Catarina'
            ),
            431 =>
            array (
                'id' => '932',
                'estado_id' => '6',
                'descricao' => 'Catunda'
            ),
            432 =>
            array (
                'id' => '933',
                'estado_id' => '6',
                'descricao' => 'Caucaia'
            ),
            433 =>
            array (
                'id' => '934',
                'estado_id' => '6',
                'descricao' => 'Cedro'
            ),
            434 =>
            array (
                'id' => '935',
                'estado_id' => '6',
                'descricao' => 'Chaval'
            ),
            435 =>
            array (
                'id' => '936',
                'estado_id' => '6',
                'descricao' => 'Choró'
            ),
            436 =>
            array (
                'id' => '937',
                'estado_id' => '6',
                'descricao' => 'Chorozinho'
            ),
            437 =>
            array (
                'id' => '938',
                'estado_id' => '6',
                'descricao' => 'Coreaú'
            ),
            438 =>
            array (
                'id' => '939',
                'estado_id' => '6',
                'descricao' => 'Crateús'
            ),
            439 =>
            array (
                'id' => '940',
                'estado_id' => '6',
                'descricao' => 'Crato'
            ),
            440 =>
            array (
                'id' => '941',
                'estado_id' => '6',
                'descricao' => 'Croatá'
            ),
            441 =>
            array (
                'id' => '942',
                'estado_id' => '6',
                'descricao' => 'Cruz'
            ),
            442 =>
            array (
                'id' => '943',
                'estado_id' => '6',
                'descricao' => 'Deputado Irapuan Pinheiro'
            ),
            443 =>
            array (
                'id' => '944',
                'estado_id' => '6',
                'descricao' => 'Ererê'
            ),
            444 =>
            array (
                'id' => '945',
                'estado_id' => '6',
                'descricao' => 'Eusébio'
            ),
            445 =>
            array (
                'id' => '946',
                'estado_id' => '6',
                'descricao' => 'Farias Brito'
            ),
            446 =>
            array (
                'id' => '947',
                'estado_id' => '6',
                'descricao' => 'Forquilha'
            ),
            447 =>
            array (
                'id' => '948',
                'estado_id' => '6',
                'descricao' => 'Fortaleza'
            ),
            448 =>
            array (
                'id' => '949',
                'estado_id' => '6',
                'descricao' => 'Fortim'
            ),
            449 =>
            array (
                'id' => '950',
                'estado_id' => '6',
                'descricao' => 'Frecheirinha'
            ),
            450 =>
            array (
                'id' => '951',
                'estado_id' => '6',
                'descricao' => 'General Sampaio'
            ),
            451 =>
            array (
                'id' => '952',
                'estado_id' => '6',
                'descricao' => 'Graça'
            ),
            452 =>
            array (
                'id' => '953',
                'estado_id' => '6',
                'descricao' => 'Granja'
            ),
            453 =>
            array (
                'id' => '954',
                'estado_id' => '6',
                'descricao' => 'Granjeiro'
            ),
            454 =>
            array (
                'id' => '955',
                'estado_id' => '6',
                'descricao' => 'Groaíras'
            ),
            455 =>
            array (
                'id' => '956',
                'estado_id' => '6',
                'descricao' => 'Guaiúba'
            ),
            456 =>
            array (
                'id' => '957',
                'estado_id' => '6',
                'descricao' => 'Guaraciaba do Norte'
            ),
            457 =>
            array (
                'id' => '958',
                'estado_id' => '6',
                'descricao' => 'Guaramiranga'
            ),
            458 =>
            array (
                'id' => '959',
                'estado_id' => '6',
                'descricao' => 'Hidrolândia'
            ),
            459 =>
            array (
                'id' => '960',
                'estado_id' => '6',
                'descricao' => 'Horizonte'
            ),
            460 =>
            array (
                'id' => '961',
                'estado_id' => '6',
                'descricao' => 'Ibaretama'
            ),
            461 =>
            array (
                'id' => '962',
                'estado_id' => '6',
                'descricao' => 'Ibiapina'
            ),
            462 =>
            array (
                'id' => '963',
                'estado_id' => '6',
                'descricao' => 'Ibicuitinga'
            ),
            463 =>
            array (
                'id' => '964',
                'estado_id' => '6',
                'descricao' => 'Icapuí'
            ),
            464 =>
            array (
                'id' => '965',
                'estado_id' => '6',
                'descricao' => 'Icó'
            ),
            465 =>
            array (
                'id' => '966',
                'estado_id' => '6',
                'descricao' => 'Iguatu'
            ),
            466 =>
            array (
                'id' => '967',
                'estado_id' => '6',
                'descricao' => 'Independência'
            ),
            467 =>
            array (
                'id' => '968',
                'estado_id' => '6',
                'descricao' => 'Ipaporanga'
            ),
            468 =>
            array (
                'id' => '969',
                'estado_id' => '6',
                'descricao' => 'Ipaumirim'
            ),
            469 =>
            array (
                'id' => '970',
                'estado_id' => '6',
                'descricao' => 'Ipu'
            ),
            470 =>
            array (
                'id' => '971',
                'estado_id' => '6',
                'descricao' => 'Ipueiras'
            ),
            471 =>
            array (
                'id' => '972',
                'estado_id' => '6',
                'descricao' => 'Iracema'
            ),
            472 =>
            array (
                'id' => '973',
                'estado_id' => '6',
                'descricao' => 'Irauçuba'
            ),
            473 =>
            array (
                'id' => '974',
                'estado_id' => '6',
                'descricao' => 'Itaiçaba'
            ),
            474 =>
            array (
                'id' => '975',
                'estado_id' => '6',
                'descricao' => 'Itaitinga'
            ),
            475 =>
            array (
                'id' => '976',
                'estado_id' => '6',
                'descricao' => 'Itapagé'
            ),
            476 =>
            array (
                'id' => '977',
                'estado_id' => '6',
                'descricao' => 'Itapipoca'
            ),
            477 =>
            array (
                'id' => '978',
                'estado_id' => '6',
                'descricao' => 'Itapiúna'
            ),
            478 =>
            array (
                'id' => '979',
                'estado_id' => '6',
                'descricao' => 'Itarema'
            ),
            479 =>
            array (
                'id' => '980',
                'estado_id' => '6',
                'descricao' => 'Itatira'
            ),
            480 =>
            array (
                'id' => '981',
                'estado_id' => '6',
                'descricao' => 'Jaguaretama'
            ),
            481 =>
            array (
                'id' => '982',
                'estado_id' => '6',
                'descricao' => 'Jaguaribara'
            ),
            482 =>
            array (
                'id' => '983',
                'estado_id' => '6',
                'descricao' => 'Jaguaribe'
            ),
            483 =>
            array (
                'id' => '984',
                'estado_id' => '6',
                'descricao' => 'Jaguaruana'
            ),
            484 =>
            array (
                'id' => '985',
                'estado_id' => '6',
                'descricao' => 'Jardim'
            ),
            485 =>
            array (
                'id' => '986',
                'estado_id' => '6',
                'descricao' => 'Jati'
            ),
            486 =>
            array (
                'id' => '987',
                'estado_id' => '6',
                'descricao' => 'Jijoca de Jericoacoara'
            ),
            487 =>
            array (
                'id' => '988',
                'estado_id' => '6',
                'descricao' => 'Juazeiro do Norte'
            ),
            488 =>
            array (
                'id' => '989',
                'estado_id' => '6',
                'descricao' => 'Jucás'
            ),
            489 =>
            array (
                'id' => '990',
                'estado_id' => '6',
                'descricao' => 'Lavras da Mangabeira'
            ),
            490 =>
            array (
                'id' => '991',
                'estado_id' => '6',
                'descricao' => 'Limoeiro do Norte'
            ),
            491 =>
            array (
                'id' => '992',
                'estado_id' => '6',
                'descricao' => 'Madalena'
            ),
            492 =>
            array (
                'id' => '993',
                'estado_id' => '6',
                'descricao' => 'Maracanaú'
            ),
            493 =>
            array (
                'id' => '994',
                'estado_id' => '6',
                'descricao' => 'Maranguape'
            ),
            494 =>
            array (
                'id' => '995',
                'estado_id' => '6',
                'descricao' => 'Marco'
            ),
            495 =>
            array (
                'id' => '996',
                'estado_id' => '6',
                'descricao' => 'Martinópole'
            ),
            496 =>
            array (
                'id' => '997',
                'estado_id' => '6',
                'descricao' => 'Massapê'
            ),
            497 =>
            array (
                'id' => '998',
                'estado_id' => '6',
                'descricao' => 'Mauriti'
            ),
            498 =>
            array (
                'id' => '999',
                'estado_id' => '6',
                'descricao' => 'Meruoca'
            ),
            499 =>
            array (
                'id' => '1000',
                'estado_id' => '6',
                'descricao' => 'Milagres'
            ),
        ));
        \DB::table('municipios')->insert(array (
            0 =>
            array (
                'id' => '1001',
                'estado_id' => '6',
                'descricao' => 'Milhã'
            ),
            1 =>
            array (
                'id' => '1002',
                'estado_id' => '6',
                'descricao' => 'Miraíma'
            ),
            2 =>
            array (
                'id' => '1003',
                'estado_id' => '6',
                'descricao' => 'Missão Velha'
            ),
            3 =>
            array (
                'id' => '1004',
                'estado_id' => '6',
                'descricao' => 'Mombaça'
            ),
            4 =>
            array (
                'id' => '1005',
                'estado_id' => '6',
                'descricao' => 'Monsenhor Tabosa'
            ),
            5 =>
            array (
                'id' => '1006',
                'estado_id' => '6',
                'descricao' => 'Morada Nova'
            ),
            6 =>
            array (
                'id' => '1007',
                'estado_id' => '6',
                'descricao' => 'Moraújo'
            ),
            7 =>
            array (
                'id' => '1008',
                'estado_id' => '6',
                'descricao' => 'Morrinhos'
            ),
            8 =>
            array (
                'id' => '1009',
                'estado_id' => '6',
                'descricao' => 'Mucambo'
            ),
            9 =>
            array (
                'id' => '1010',
                'estado_id' => '6',
                'descricao' => 'Mulungu'
            ),
            10 =>
            array (
                'id' => '1011',
                'estado_id' => '6',
                'descricao' => 'Nova Olinda'
            ),
            11 =>
            array (
                'id' => '1012',
                'estado_id' => '6',
                'descricao' => 'Nova Russas'
            ),
            12 =>
            array (
                'id' => '1013',
                'estado_id' => '6',
                'descricao' => 'Novo Oriente'
            ),
            13 =>
            array (
                'id' => '1014',
                'estado_id' => '6',
                'descricao' => 'Ocara'
            ),
            14 =>
            array (
                'id' => '1015',
                'estado_id' => '6',
                'descricao' => 'Orós'
            ),
            15 =>
            array (
                'id' => '1016',
                'estado_id' => '6',
                'descricao' => 'Pacajus'
            ),
            16 =>
            array (
                'id' => '1017',
                'estado_id' => '6',
                'descricao' => 'Pacatuba'
            ),
            17 =>
            array (
                'id' => '1018',
                'estado_id' => '6',
                'descricao' => 'Pacoti'
            ),
            18 =>
            array (
                'id' => '1019',
                'estado_id' => '6',
                'descricao' => 'Pacujá'
            ),
            19 =>
            array (
                'id' => '1020',
                'estado_id' => '6',
                'descricao' => 'Palhano'
            ),
            20 =>
            array (
                'id' => '1021',
                'estado_id' => '6',
                'descricao' => 'Palmácia'
            ),
            21 =>
            array (
                'id' => '1022',
                'estado_id' => '6',
                'descricao' => 'Paracuru'
            ),
            22 =>
            array (
                'id' => '1023',
                'estado_id' => '6',
                'descricao' => 'Paraipaba'
            ),
            23 =>
            array (
                'id' => '1024',
                'estado_id' => '6',
                'descricao' => 'Parambu'
            ),
            24 =>
            array (
                'id' => '1025',
                'estado_id' => '6',
                'descricao' => 'Paramoti'
            ),
            25 =>
            array (
                'id' => '1026',
                'estado_id' => '6',
                'descricao' => 'Pedra Branca'
            ),
            26 =>
            array (
                'id' => '1027',
                'estado_id' => '6',
                'descricao' => 'Penaforte'
            ),
            27 =>
            array (
                'id' => '1028',
                'estado_id' => '6',
                'descricao' => 'Pentecoste'
            ),
            28 =>
            array (
                'id' => '1029',
                'estado_id' => '6',
                'descricao' => 'Pereiro'
            ),
            29 =>
            array (
                'id' => '1030',
                'estado_id' => '6',
                'descricao' => 'Pindoretama'
            ),
            30 =>
            array (
                'id' => '1031',
                'estado_id' => '6',
                'descricao' => 'Piquet Carneiro'
            ),
            31 =>
            array (
                'id' => '1032',
                'estado_id' => '6',
                'descricao' => 'Pires Ferreira'
            ),
            32 =>
            array (
                'id' => '1033',
                'estado_id' => '6',
                'descricao' => 'Poranga'
            ),
            33 =>
            array (
                'id' => '1034',
                'estado_id' => '6',
                'descricao' => 'Porteiras'
            ),
            34 =>
            array (
                'id' => '1035',
                'estado_id' => '6',
                'descricao' => 'Potengi'
            ),
            35 =>
            array (
                'id' => '1036',
                'estado_id' => '6',
                'descricao' => 'Potiretama'
            ),
            36 =>
            array (
                'id' => '1037',
                'estado_id' => '6',
                'descricao' => 'Quiterianópolis'
            ),
            37 =>
            array (
                'id' => '1038',
                'estado_id' => '6',
                'descricao' => 'Quixadá'
            ),
            38 =>
            array (
                'id' => '1039',
                'estado_id' => '6',
                'descricao' => 'Quixelô'
            ),
            39 =>
            array (
                'id' => '1040',
                'estado_id' => '6',
                'descricao' => 'Quixeramobim'
            ),
            40 =>
            array (
                'id' => '1041',
                'estado_id' => '6',
                'descricao' => 'Quixeré'
            ),
            41 =>
            array (
                'id' => '1042',
                'estado_id' => '6',
                'descricao' => 'Redenção'
            ),
            42 =>
            array (
                'id' => '1043',
                'estado_id' => '6',
                'descricao' => 'Reriutaba'
            ),
            43 =>
            array (
                'id' => '1044',
                'estado_id' => '6',
                'descricao' => 'Russas'
            ),
            44 =>
            array (
                'id' => '1045',
                'estado_id' => '6',
                'descricao' => 'Saboeiro'
            ),
            45 =>
            array (
                'id' => '1046',
                'estado_id' => '6',
                'descricao' => 'Salitre'
            ),
            46 =>
            array (
                'id' => '1047',
                'estado_id' => '6',
                'descricao' => 'Santana do Acaraú'
            ),
            47 =>
            array (
                'id' => '1048',
                'estado_id' => '6',
                'descricao' => 'Santana do Cariri'
            ),
            48 =>
            array (
                'id' => '1049',
                'estado_id' => '6',
                'descricao' => 'Santa Quitéria'
            ),
            49 =>
            array (
                'id' => '1050',
                'estado_id' => '6',
                'descricao' => 'São Benedito'
            ),
            50 =>
            array (
                'id' => '1051',
                'estado_id' => '6',
                'descricao' => 'São Gonçalo do Amarante'
            ),
            51 =>
            array (
                'id' => '1052',
                'estado_id' => '6',
                'descricao' => 'São João do Jaguaribe'
            ),
            52 =>
            array (
                'id' => '1053',
                'estado_id' => '6',
                'descricao' => 'São Luís do Curu'
            ),
            53 =>
            array (
                'id' => '1054',
                'estado_id' => '6',
                'descricao' => 'Senador Pompeu'
            ),
            54 =>
            array (
                'id' => '1055',
                'estado_id' => '6',
                'descricao' => 'Senador Sá'
            ),
            55 =>
            array (
                'id' => '1056',
                'estado_id' => '6',
                'descricao' => 'Sobral'
            ),
            56 =>
            array (
                'id' => '1057',
                'estado_id' => '6',
                'descricao' => 'Solonópole'
            ),
            57 =>
            array (
                'id' => '1058',
                'estado_id' => '6',
                'descricao' => 'Tabuleiro do Norte'
            ),
            58 =>
            array (
                'id' => '1059',
                'estado_id' => '6',
                'descricao' => 'Tamboril'
            ),
            59 =>
            array (
                'id' => '1060',
                'estado_id' => '6',
                'descricao' => 'Tarrafas'
            ),
            60 =>
            array (
                'id' => '1061',
                'estado_id' => '6',
                'descricao' => 'Tauá'
            ),
            61 =>
            array (
                'id' => '1062',
                'estado_id' => '6',
                'descricao' => 'Tejuçuoca'
            ),
            62 =>
            array (
                'id' => '1063',
                'estado_id' => '6',
                'descricao' => 'Tianguá'
            ),
            63 =>
            array (
                'id' => '1064',
                'estado_id' => '6',
                'descricao' => 'Trairi'
            ),
            64 =>
            array (
                'id' => '1065',
                'estado_id' => '6',
                'descricao' => 'Tururu'
            ),
            65 =>
            array (
                'id' => '1066',
                'estado_id' => '6',
                'descricao' => 'Ubajara'
            ),
            66 =>
            array (
                'id' => '1067',
                'estado_id' => '6',
                'descricao' => 'Umari'
            ),
            67 =>
            array (
                'id' => '1068',
                'estado_id' => '6',
                'descricao' => 'Umirim'
            ),
            68 =>
            array (
                'id' => '1069',
                'estado_id' => '6',
                'descricao' => 'Uruburetama'
            ),
            69 =>
            array (
                'id' => '1070',
                'estado_id' => '6',
                'descricao' => 'Uruoca'
            ),
            70 =>
            array (
                'id' => '1071',
                'estado_id' => '6',
                'descricao' => 'Varjota'
            ),
            71 =>
            array (
                'id' => '1072',
                'estado_id' => '6',
                'descricao' => 'Várzea Alegre'
            ),
            72 =>
            array (
                'id' => '1073',
                'estado_id' => '6',
                'descricao' => 'Viçosa do Ceará'
            ),
            73 =>
            array (
                'id' => '1074',
                'estado_id' => '20',
                'descricao' => 'Acari'
            ),
            74 =>
            array (
                'id' => '1075',
                'estado_id' => '20',
                'descricao' => 'Açu'
            ),
            75 =>
            array (
                'id' => '1076',
                'estado_id' => '20',
                'descricao' => 'Afonso Bezerra'
            ),
            76 =>
            array (
                'id' => '1077',
                'estado_id' => '20',
                'descricao' => 'Água Nova'
            ),
            77 =>
            array (
                'id' => '1078',
                'estado_id' => '20',
                'descricao' => 'Alexandria'
            ),
            78 =>
            array (
                'id' => '1079',
                'estado_id' => '20',
                'descricao' => 'Almino Afonso'
            ),
            79 =>
            array (
                'id' => '1080',
                'estado_id' => '20',
                'descricao' => 'Alto do Rodrigues'
            ),
            80 =>
            array (
                'id' => '1081',
                'estado_id' => '20',
                'descricao' => 'Angicos'
            ),
            81 =>
            array (
                'id' => '1082',
                'estado_id' => '20',
                'descricao' => 'Antônio Martins'
            ),
            82 =>
            array (
                'id' => '1083',
                'estado_id' => '20',
                'descricao' => 'Apodi'
            ),
            83 =>
            array (
                'id' => '1084',
                'estado_id' => '20',
                'descricao' => 'Areia Branca'
            ),
            84 =>
            array (
                'id' => '1085',
                'estado_id' => '20',
                'descricao' => 'Arês'
            ),
            85 =>
            array (
                'id' => '1086',
                'estado_id' => '20',
                'descricao' => 'Augusto Severo'
            ),
            86 =>
            array (
                'id' => '1087',
                'estado_id' => '20',
                'descricao' => 'Baía Formosa'
            ),
            87 =>
            array (
                'id' => '1088',
                'estado_id' => '20',
                'descricao' => 'Baraúna'
            ),
            88 =>
            array (
                'id' => '1089',
                'estado_id' => '20',
                'descricao' => 'Barcelona'
            ),
            89 =>
            array (
                'id' => '1090',
                'estado_id' => '20',
                'descricao' => 'Bento Fernandes'
            ),
            90 =>
            array (
                'id' => '1091',
                'estado_id' => '20',
                'descricao' => 'Bodó'
            ),
            91 =>
            array (
                'id' => '1092',
                'estado_id' => '20',
                'descricao' => 'Bom Jesus'
            ),
            92 =>
            array (
                'id' => '1093',
                'estado_id' => '20',
                'descricao' => 'Brejinho'
            ),
            93 =>
            array (
                'id' => '1094',
                'estado_id' => '20',
                'descricao' => 'Caiçara do Norte'
            ),
            94 =>
            array (
                'id' => '1095',
                'estado_id' => '20',
                'descricao' => 'Caiçara do Rio do Vento'
            ),
            95 =>
            array (
                'id' => '1096',
                'estado_id' => '20',
                'descricao' => 'Caicó'
            ),
            96 =>
            array (
                'id' => '1097',
                'estado_id' => '20',
                'descricao' => 'Campo Redondo'
            ),
            97 =>
            array (
                'id' => '1098',
                'estado_id' => '20',
                'descricao' => 'Canguaretama'
            ),
            98 =>
            array (
                'id' => '1099',
                'estado_id' => '20',
                'descricao' => 'Caraúbas'
            ),
            99 =>
            array (
                'id' => '1100',
                'estado_id' => '20',
                'descricao' => 'Carnaúba dos Dantas'
            ),
            100 =>
            array (
                'id' => '1101',
                'estado_id' => '20',
                'descricao' => 'Carnaubais'
            ),
            101 =>
            array (
                'id' => '1102',
                'estado_id' => '20',
                'descricao' => 'Ceará-Mirim'
            ),
            102 =>
            array (
                'id' => '1103',
                'estado_id' => '20',
                'descricao' => 'Cerro Corá'
            ),
            103 =>
            array (
                'id' => '1104',
                'estado_id' => '20',
                'descricao' => 'Coronel Ezequiel'
            ),
            104 =>
            array (
                'id' => '1105',
                'estado_id' => '20',
                'descricao' => 'Coronel João Pessoa'
            ),
            105 =>
            array (
                'id' => '1106',
                'estado_id' => '20',
                'descricao' => 'Cruzeta'
            ),
            106 =>
            array (
                'id' => '1107',
                'estado_id' => '20',
                'descricao' => 'Currais Novos'
            ),
            107 =>
            array (
                'id' => '1108',
                'estado_id' => '20',
                'descricao' => 'Doutor Severiano'
            ),
            108 =>
            array (
                'id' => '1109',
                'estado_id' => '20',
                'descricao' => 'Parnamirim'
            ),
            109 =>
            array (
                'id' => '1110',
                'estado_id' => '20',
                'descricao' => 'Encanto'
            ),
            110 =>
            array (
                'id' => '1111',
                'estado_id' => '20',
                'descricao' => 'Equador'
            ),
            111 =>
            array (
                'id' => '1112',
                'estado_id' => '20',
                'descricao' => 'Espírito Santo'
            ),
            112 =>
            array (
                'id' => '1113',
                'estado_id' => '20',
                'descricao' => 'Extremoz'
            ),
            113 =>
            array (
                'id' => '1114',
                'estado_id' => '20',
                'descricao' => 'Felipe Guerra'
            ),
            114 =>
            array (
                'id' => '1115',
                'estado_id' => '20',
                'descricao' => 'Fernando Pedroza'
            ),
            115 =>
            array (
                'id' => '1116',
                'estado_id' => '20',
                'descricao' => 'Florânia'
            ),
            116 =>
            array (
                'id' => '1117',
                'estado_id' => '20',
                'descricao' => 'Francisco Dantas'
            ),
            117 =>
            array (
                'id' => '1118',
                'estado_id' => '20',
                'descricao' => 'Frutuoso Gomes'
            ),
            118 =>
            array (
                'id' => '1119',
                'estado_id' => '20',
                'descricao' => 'Galinhos'
            ),
            119 =>
            array (
                'id' => '1120',
                'estado_id' => '20',
                'descricao' => 'Goianinha'
            ),
            120 =>
            array (
                'id' => '1121',
                'estado_id' => '20',
                'descricao' => 'Governador Dix-Sept Rosado'
            ),
            121 =>
            array (
                'id' => '1122',
                'estado_id' => '20',
                'descricao' => 'Grossos'
            ),
            122 =>
            array (
                'id' => '1123',
                'estado_id' => '20',
                'descricao' => 'Guamaré'
            ),
            123 =>
            array (
                'id' => '1124',
                'estado_id' => '20',
                'descricao' => 'Ielmo Marinho'
            ),
            124 =>
            array (
                'id' => '1125',
                'estado_id' => '20',
                'descricao' => 'Ipanguaçu'
            ),
            125 =>
            array (
                'id' => '1126',
                'estado_id' => '20',
                'descricao' => 'Ipueira'
            ),
            126 =>
            array (
                'id' => '1127',
                'estado_id' => '20',
                'descricao' => 'Itajá'
            ),
            127 =>
            array (
                'id' => '1128',
                'estado_id' => '20',
                'descricao' => 'Itaú'
            ),
            128 =>
            array (
                'id' => '1129',
                'estado_id' => '20',
                'descricao' => 'Jaçanã'
            ),
            129 =>
            array (
                'id' => '1130',
                'estado_id' => '20',
                'descricao' => 'Jandaíra'
            ),
            130 =>
            array (
                'id' => '1131',
                'estado_id' => '20',
                'descricao' => 'Janduís'
            ),
            131 =>
            array (
                'id' => '1132',
                'estado_id' => '20',
                'descricao' => 'Januário Cicco'
            ),
            132 =>
            array (
                'id' => '1133',
                'estado_id' => '20',
                'descricao' => 'Japi'
            ),
            133 =>
            array (
                'id' => '1134',
                'estado_id' => '20',
                'descricao' => 'Jardim de Angicos'
            ),
            134 =>
            array (
                'id' => '1135',
                'estado_id' => '20',
                'descricao' => 'Jardim de Piranhas'
            ),
            135 =>
            array (
                'id' => '1136',
                'estado_id' => '20',
                'descricao' => 'Jardim do Seridó'
            ),
            136 =>
            array (
                'id' => '1137',
                'estado_id' => '20',
                'descricao' => 'João Câmara'
            ),
            137 =>
            array (
                'id' => '1138',
                'estado_id' => '20',
                'descricao' => 'João Dias'
            ),
            138 =>
            array (
                'id' => '1139',
                'estado_id' => '20',
                'descricao' => 'José da Penha'
            ),
            139 =>
            array (
                'id' => '1140',
                'estado_id' => '20',
                'descricao' => 'Jucurutu'
            ),
            140 =>
            array (
                'id' => '1141',
                'estado_id' => '20',
                'descricao' => 'Jundiá'
            ),
            141 =>
            array (
                'id' => '1142',
                'estado_id' => '20',
                'descricao' => 'Lagoa D\'anta'
            ),
            142 =>
            array (
                'id' => '1143',
                'estado_id' => '20',
                'descricao' => 'Lagoa de Pedras'
            ),
            143 =>
            array (
                'id' => '1144',
                'estado_id' => '20',
                'descricao' => 'Lagoa de Velhos'
            ),
            144 =>
            array (
                'id' => '1145',
                'estado_id' => '20',
                'descricao' => 'Lagoa Nova'
            ),
            145 =>
            array (
                'id' => '1146',
                'estado_id' => '20',
                'descricao' => 'Lagoa Salgada'
            ),
            146 =>
            array (
                'id' => '1147',
                'estado_id' => '20',
                'descricao' => 'Lajes'
            ),
            147 =>
            array (
                'id' => '1148',
                'estado_id' => '20',
                'descricao' => 'Lajes Pintadas'
            ),
            148 =>
            array (
                'id' => '1149',
                'estado_id' => '20',
                'descricao' => 'Lucrécia'
            ),
            149 =>
            array (
                'id' => '1150',
                'estado_id' => '20',
                'descricao' => 'Luís Gomes'
            ),
            150 =>
            array (
                'id' => '1151',
                'estado_id' => '20',
                'descricao' => 'Macaíba'
            ),
            151 =>
            array (
                'id' => '1152',
                'estado_id' => '20',
                'descricao' => 'Macau'
            ),
            152 =>
            array (
                'id' => '1153',
                'estado_id' => '20',
                'descricao' => 'Major Sales'
            ),
            153 =>
            array (
                'id' => '1154',
                'estado_id' => '20',
                'descricao' => 'Marcelino Vieira'
            ),
            154 =>
            array (
                'id' => '1155',
                'estado_id' => '20',
                'descricao' => 'Martins'
            ),
            155 =>
            array (
                'id' => '1156',
                'estado_id' => '20',
                'descricao' => 'Maxaranguape'
            ),
            156 =>
            array (
                'id' => '1157',
                'estado_id' => '20',
                'descricao' => 'Messias Targino'
            ),
            157 =>
            array (
                'id' => '1158',
                'estado_id' => '20',
                'descricao' => 'Montanhas'
            ),
            158 =>
            array (
                'id' => '1159',
                'estado_id' => '20',
                'descricao' => 'Monte Alegre'
            ),
            159 =>
            array (
                'id' => '1160',
                'estado_id' => '20',
                'descricao' => 'Monte das Gameleiras'
            ),
            160 =>
            array (
                'id' => '1161',
                'estado_id' => '20',
                'descricao' => 'Mossoró'
            ),
            161 =>
            array (
                'id' => '1162',
                'estado_id' => '20',
                'descricao' => 'Natal',
            ),
            162 =>
            array (
                'id' => '1163',
                'estado_id' => '20',
                'descricao' => 'Nísia Floresta'
            ),
            163 =>
            array (
                'id' => '1164',
                'estado_id' => '20',
                'descricao' => 'Nova Cruz'
            ),
            164 =>
            array (
                'id' => '1165',
                'estado_id' => '20',
                'descricao' => 'Olho-D\'água do Borges'
            ),
            165 =>
            array (
                'id' => '1166',
                'estado_id' => '20',
                'descricao' => 'Ouro Branco'
            ),
            166 =>
            array (
                'id' => '1167',
                'estado_id' => '20',
                'descricao' => 'Paraná'
            ),
            167 =>
            array (
                'id' => '1168',
                'estado_id' => '20',
                'descricao' => 'Paraú'
            ),
            168 =>
            array (
                'id' => '1169',
                'estado_id' => '20',
                'descricao' => 'Parazinho'
            ),
            169 =>
            array (
                'id' => '1170',
                'estado_id' => '20',
                'descricao' => 'Parelhas'
            ),
            170 =>
            array (
                'id' => '1171',
                'estado_id' => '20',
                'descricao' => 'Rio do Fogo'
            ),
            171 =>
            array (
                'id' => '1172',
                'estado_id' => '20',
                'descricao' => 'Passa e Fica'
            ),
            172 =>
            array (
                'id' => '1173',
                'estado_id' => '20',
                'descricao' => 'Passagem'
            ),
            173 =>
            array (
                'id' => '1174',
                'estado_id' => '20',
                'descricao' => 'Patu'
            ),
            174 =>
            array (
                'id' => '1175',
                'estado_id' => '20',
                'descricao' => 'Santa Maria'
            ),
            175 =>
            array (
                'id' => '1176',
                'estado_id' => '20',
                'descricao' => 'Pau dos Ferros'
            ),
            176 =>
            array (
                'id' => '1177',
                'estado_id' => '20',
                'descricao' => 'Pedra Grande'
            ),
            177 =>
            array (
                'id' => '1178',
                'estado_id' => '20',
                'descricao' => 'Pedra Preta'
            ),
            178 =>
            array (
                'id' => '1179',
                'estado_id' => '20',
                'descricao' => 'Pedro Avelino'
            ),
            179 =>
            array (
                'id' => '1180',
                'estado_id' => '20',
                'descricao' => 'Pedro Velho'
            ),
            180 =>
            array (
                'id' => '1181',
                'estado_id' => '20',
                'descricao' => 'Pendências'
            ),
            181 =>
            array (
                'id' => '1182',
                'estado_id' => '20',
                'descricao' => 'Pilões'
            ),
            182 =>
            array (
                'id' => '1183',
                'estado_id' => '20',
                'descricao' => 'Poço Branco'
            ),
            183 =>
            array (
                'id' => '1184',
                'estado_id' => '20',
                'descricao' => 'Portalegre'
            ),
            184 =>
            array (
                'id' => '1185',
                'estado_id' => '20',
                'descricao' => 'Porto do Mangue'
            ),
            185 =>
            array (
                'id' => '1186',
                'estado_id' => '20',
                'descricao' => 'Presidente Juscelino'
            ),
            186 =>
            array (
                'id' => '1187',
                'estado_id' => '20',
                'descricao' => 'Pureza'
            ),
            187 =>
            array (
                'id' => '1188',
                'estado_id' => '20',
                'descricao' => 'Rafael Fernandes'
            ),
            188 =>
            array (
                'id' => '1189',
                'estado_id' => '20',
                'descricao' => 'Rafael Godeiro'
            ),
            189 =>
            array (
                'id' => '1190',
                'estado_id' => '20',
                'descricao' => 'Riacho da Cruz'
            ),
            190 =>
            array (
                'id' => '1191',
                'estado_id' => '20',
                'descricao' => 'Riacho de Santana'
            ),
            191 =>
            array (
                'id' => '1192',
                'estado_id' => '20',
                'descricao' => 'Riachuelo'
            ),
            192 =>
            array (
                'id' => '1193',
                'estado_id' => '20',
                'descricao' => 'Rodolfo Fernandes'
            ),
            193 =>
            array (
                'id' => '1194',
                'estado_id' => '20',
                'descricao' => 'Tibau'
            ),
            194 =>
            array (
                'id' => '1195',
                'estado_id' => '20',
                'descricao' => 'Ruy Barbosa'
            ),
            195 =>
            array (
                'id' => '1196',
                'estado_id' => '20',
                'descricao' => 'Santa Cruz'
            ),
            196 =>
            array (
                'id' => '1197',
                'estado_id' => '20',
                'descricao' => 'Santana do Matos'
            ),
            197 =>
            array (
                'id' => '1198',
                'estado_id' => '20',
                'descricao' => 'Santana do Seridó'
            ),
            198 =>
            array (
                'id' => '1199',
                'estado_id' => '20',
                'descricao' => 'Santo Antônio'
            ),
            199 =>
            array (
                'id' => '1200',
                'estado_id' => '20',
                'descricao' => 'São Bento do Norte'
            ),
            200 =>
            array (
                'id' => '1201',
                'estado_id' => '20',
                'descricao' => 'São Bento do Trairí'
            ),
            201 =>
            array (
                'id' => '1202',
                'estado_id' => '20',
                'descricao' => 'São Fernando'
            ),
            202 =>
            array (
                'id' => '1203',
                'estado_id' => '20',
                'descricao' => 'São Francisco do Oeste'
            ),
            203 =>
            array (
                'id' => '1204',
                'estado_id' => '20',
                'descricao' => 'São Gonçalo do Amarante'
            ),
            204 =>
            array (
                'id' => '1205',
                'estado_id' => '20',
                'descricao' => 'São João do Sabugi'
            ),
            205 =>
            array (
                'id' => '1206',
                'estado_id' => '20',
                'descricao' => 'São José de Mipibu'
            ),
            206 =>
            array (
                'id' => '1207',
                'estado_id' => '20',
                'descricao' => 'São José do Campestre'
            ),
            207 =>
            array (
                'id' => '1208',
                'estado_id' => '20',
                'descricao' => 'São José do Seridó'
            ),
            208 =>
            array (
                'id' => '1209',
                'estado_id' => '20',
                'descricao' => 'São Miguel'
            ),
            209 =>
            array (
                'id' => '1210',
                'estado_id' => '20',
                'descricao' => 'São Miguel do Gostoso'
            ),
            210 =>
            array (
                'id' => '1211',
                'estado_id' => '20',
                'descricao' => 'São Paulo do Potengi'
            ),
            211 =>
            array (
                'id' => '1212',
                'estado_id' => '20',
                'descricao' => 'São Pedro'
            ),
            212 =>
            array (
                'id' => '1213',
                'estado_id' => '20',
                'descricao' => 'São Rafael'
            ),
            213 =>
            array (
                'id' => '1214',
                'estado_id' => '20',
                'descricao' => 'São Tomé'
            ),
            214 =>
            array (
                'id' => '1215',
                'estado_id' => '20',
                'descricao' => 'São Vicente'
            ),
            215 =>
            array (
                'id' => '1216',
                'estado_id' => '20',
                'descricao' => 'Senador Elói de Souza'
            ),
            216 =>
            array (
                'id' => '1217',
                'estado_id' => '20',
                'descricao' => 'Senador Georgino Avelino'
            ),
            217 =>
            array (
                'id' => '1218',
                'estado_id' => '20',
                'descricao' => 'Serra de São Bento'
            ),
            218 =>
            array (
                'id' => '1219',
                'estado_id' => '20',
                'descricao' => 'Serra do Mel'
            ),
            219 =>
            array (
                'id' => '1220',
                'estado_id' => '20',
                'descricao' => 'Serra Negra do Norte'
            ),
            220 =>
            array (
                'id' => '1221',
                'estado_id' => '20',
                'descricao' => 'Serrinha'
            ),
            221 =>
            array (
                'id' => '1222',
                'estado_id' => '20',
                'descricao' => 'Serrinha dos Pintos'
            ),
            222 =>
            array (
                'id' => '1223',
                'estado_id' => '20',
                'descricao' => 'Severiano Melo'
            ),
            223 =>
            array (
                'id' => '1224',
                'estado_id' => '20',
                'descricao' => 'Sítio Novo'
            ),
            224 =>
            array (
                'id' => '1225',
                'estado_id' => '20',
                'descricao' => 'Taboleiro Grande'
            ),
            225 =>
            array (
                'id' => '1226',
                'estado_id' => '20',
                'descricao' => 'Taipu'
            ),
            226 =>
            array (
                'id' => '1227',
                'estado_id' => '20',
                'descricao' => 'Tangará'
            ),
            227 =>
            array (
                'id' => '1228',
                'estado_id' => '20',
                'descricao' => 'Tenente Ananias'
            ),
            228 =>
            array (
                'id' => '1229',
                'estado_id' => '20',
                'descricao' => 'Tenente Laurentino Cruz'
            ),
            229 =>
            array (
                'id' => '1230',
                'estado_id' => '20',
                'descricao' => 'Tibau do Sul'
            ),
            230 =>
            array (
                'id' => '1231',
                'estado_id' => '20',
                'descricao' => 'Timbaúba dos Batistas'
            ),
            231 =>
            array (
                'id' => '1232',
                'estado_id' => '20',
                'descricao' => 'Touros'
            ),
            232 =>
            array (
                'id' => '1233',
                'estado_id' => '20',
                'descricao' => 'Triunfo Potiguar'
            ),
            233 =>
            array (
                'id' => '1234',
                'estado_id' => '20',
                'descricao' => 'Umarizal'
            ),
            234 =>
            array (
                'id' => '1235',
                'estado_id' => '20',
                'descricao' => 'Upanema'
            ),
            235 =>
            array (
                'id' => '1236',
                'estado_id' => '20',
                'descricao' => 'Várzea'
            ),
            236 =>
            array (
                'id' => '1237',
                'estado_id' => '20',
                'descricao' => 'Venha-Ver'
            ),
            237 =>
            array (
                'id' => '1238',
                'estado_id' => '20',
                'descricao' => 'Vera Cruz'
            ),
            238 =>
            array (
                'id' => '1239',
                'estado_id' => '20',
                'descricao' => 'Viçosa'
            ),
            239 =>
            array (
                'id' => '1240',
                'estado_id' => '20',
                'descricao' => 'Vila Flor'
            ),
            240 =>
            array (
                'id' => '1241',
                'estado_id' => '15',
                'descricao' => 'Água Branca'
            ),
            241 =>
            array (
                'id' => '1242',
                'estado_id' => '15',
                'descricao' => 'Aguiar'
            ),
            242 =>
            array (
                'id' => '1243',
                'estado_id' => '15',
                'descricao' => 'Alagoa Grande'
            ),
            243 =>
            array (
                'id' => '1244',
                'estado_id' => '15',
                'descricao' => 'Alagoa Nova'
            ),
            244 =>
            array (
                'id' => '1245',
                'estado_id' => '15',
                'descricao' => 'Alagoinha'
            ),
            245 =>
            array (
                'id' => '1246',
                'estado_id' => '15',
                'descricao' => 'Alcantil'
            ),
            246 =>
            array (
                'id' => '1247',
                'estado_id' => '15',
                'descricao' => 'Algodão de Jandaíra'
            ),
            247 =>
            array (
                'id' => '1248',
                'estado_id' => '15',
                'descricao' => 'Alhandra'
            ),
            248 =>
            array (
                'id' => '1249',
                'estado_id' => '15',
                'descricao' => 'São João do Rio do Peixe'
            ),
            249 =>
            array (
                'id' => '1250',
                'estado_id' => '15',
                'descricao' => 'Amparo'
            ),
            250 =>
            array (
                'id' => '1251',
                'estado_id' => '15',
                'descricao' => 'Aparecida'
            ),
            251 =>
            array (
                'id' => '1252',
                'estado_id' => '15',
                'descricao' => 'Araçagi'
            ),
            252 =>
            array (
                'id' => '1253',
                'estado_id' => '15',
                'descricao' => 'Arara'
            ),
            253 =>
            array (
                'id' => '1254',
                'estado_id' => '15',
                'descricao' => 'Araruna'
            ),
            254 =>
            array (
                'id' => '1255',
                'estado_id' => '15',
                'descricao' => 'Areia'
            ),
            255 =>
            array (
                'id' => '1256',
                'estado_id' => '15',
                'descricao' => 'Areia de Baraúnas'
            ),
            256 =>
            array (
                'id' => '1257',
                'estado_id' => '15',
                'descricao' => 'Areial'
            ),
            257 =>
            array (
                'id' => '1258',
                'estado_id' => '15',
                'descricao' => 'Aroeiras'
            ),
            258 =>
            array (
                'id' => '1259',
                'estado_id' => '15',
                'descricao' => 'Assunção'
            ),
            259 =>
            array (
                'id' => '1260',
                'estado_id' => '15',
                'descricao' => 'Baía da Traição'
            ),
            260 =>
            array (
                'id' => '1261',
                'estado_id' => '15',
                'descricao' => 'Bananeiras'
            ),
            261 =>
            array (
                'id' => '1262',
                'estado_id' => '15',
                'descricao' => 'Baraúna'
            ),
            262 =>
            array (
                'id' => '1263',
                'estado_id' => '15',
                'descricao' => 'Barra de Santana'
            ),
            263 =>
            array (
                'id' => '1264',
                'estado_id' => '15',
                'descricao' => 'Barra de Santa Rosa'
            ),
            264 =>
            array (
                'id' => '1265',
                'estado_id' => '15',
                'descricao' => 'Barra de São Miguel'
            ),
            265 =>
            array (
                'id' => '1266',
                'estado_id' => '15',
                'descricao' => 'Bayeux'
            ),
            266 =>
            array (
                'id' => '1267',
                'estado_id' => '15',
                'descricao' => 'Belém'
            ),
            267 =>
            array (
                'id' => '1268',
                'estado_id' => '15',
                'descricao' => 'Belém do Brejo do Cruz'
            ),
            268 =>
            array (
                'id' => '1269',
                'estado_id' => '15',
                'descricao' => 'Bernardino Batista'
            ),
            269 =>
            array (
                'id' => '1270',
                'estado_id' => '15',
                'descricao' => 'Boa Ventura'
            ),
            270 =>
            array (
                'id' => '1271',
                'estado_id' => '15',
                'descricao' => 'Boa Vista'
            ),
            271 =>
            array (
                'id' => '1272',
                'estado_id' => '15',
                'descricao' => 'Bom Jesus'
            ),
            272 =>
            array (
                'id' => '1273',
                'estado_id' => '15',
                'descricao' => 'Bom Sucesso'
            ),
            273 =>
            array (
                'id' => '1274',
                'estado_id' => '15',
                'descricao' => 'Bonito de Santa Fé'
            ),
            274 =>
            array (
                'id' => '1275',
                'estado_id' => '15',
                'descricao' => 'Boqueirão'
            ),
            275 =>
            array (
                'id' => '1276',
                'estado_id' => '15',
                'descricao' => 'Igaracy'
            ),
            276 =>
            array (
                'id' => '1277',
                'estado_id' => '15',
                'descricao' => 'Borborema'
            ),
            277 =>
            array (
                'id' => '1278',
                'estado_id' => '15',
                'descricao' => 'Brejo do Cruz'
            ),
            278 =>
            array (
                'id' => '1279',
                'estado_id' => '15',
                'descricao' => 'Brejo dos Santos'
            ),
            279 =>
            array (
                'id' => '1280',
                'estado_id' => '15',
                'descricao' => 'Caaporã'
            ),
            280 =>
            array (
                'id' => '1281',
                'estado_id' => '15',
                'descricao' => 'Cabaceiras'
            ),
            281 =>
            array (
                'id' => '1282',
                'estado_id' => '15',
                'descricao' => 'Cabedelo',
            ),
            282 =>
            array (
                'id' => '1283',
                'estado_id' => '15',
                'descricao' => 'Cachoeira dos Índios'
            ),
            283 =>
            array (
                'id' => '1284',
                'estado_id' => '15',
                'descricao' => 'Cacimba de Areia'
            ),
            284 =>
            array (
                'id' => '1285',
                'estado_id' => '15',
                'descricao' => 'Cacimba de Dentro'
            ),
            285 =>
            array (
                'id' => '1286',
                'estado_id' => '15',
                'descricao' => 'Cacimbas'
            ),
            286 =>
            array (
                'id' => '1287',
                'estado_id' => '15',
                'descricao' => 'Caiçara'
            ),
            287 =>
            array (
                'id' => '1288',
                'estado_id' => '15',
                'descricao' => 'Cajazeiras'
            ),
            288 =>
            array (
                'id' => '1289',
                'estado_id' => '15',
                'descricao' => 'Cajazeirinhas'
            ),
            289 =>
            array (
                'id' => '1290',
                'estado_id' => '15',
                'descricao' => 'Caldas Brandão'
            ),
            290 =>
            array (
                'id' => '1291',
                'estado_id' => '15',
                'descricao' => 'Camalaú'
            ),
            291 =>
            array (
                'id' => '1292',
                'estado_id' => '15',
                'descricao' => 'Campina Grande'
            ),
            292 =>
            array (
                'id' => '1293',
                'estado_id' => '15',
                'descricao' => 'Capim'
            ),
            293 =>
            array (
                'id' => '1294',
                'estado_id' => '15',
                'descricao' => 'Caraúbas'
            ),
            294 =>
            array (
                'id' => '1295',
                'estado_id' => '15',
                'descricao' => 'Carrapateira'
            ),
            295 =>
            array (
                'id' => '1296',
                'estado_id' => '15',
                'descricao' => 'Casserengue'
            ),
            296 =>
            array (
                'id' => '1297',
                'estado_id' => '15',
                'descricao' => 'Catingueira'
            ),
            297 =>
            array (
                'id' => '1298',
                'estado_id' => '15',
                'descricao' => 'Catolé do Rocha'
            ),
            298 =>
            array (
                'id' => '1299',
                'estado_id' => '15',
                'descricao' => 'Caturité'
            ),
            299 =>
            array (
                'id' => '1300',
                'estado_id' => '15',
                'descricao' => 'Conceição'
            ),
            300 =>
            array (
                'id' => '1301',
                'estado_id' => '15',
                'descricao' => 'Condado'
            ),
            301 =>
            array (
                'id' => '1302',
                'estado_id' => '15',
                'descricao' => 'Conde'
            ),
            302 =>
            array (
                'id' => '1303',
                'estado_id' => '15',
                'descricao' => 'Congo'
            ),
            303 =>
            array (
                'id' => '1304',
                'estado_id' => '15',
                'descricao' => 'Coremas'
            ),
            304 =>
            array (
                'id' => '1305',
                'estado_id' => '15',
                'descricao' => 'Coxixola'
            ),
            305 =>
            array (
                'id' => '1306',
                'estado_id' => '15',
                'descricao' => 'Cruz do Espírito Santo'
            ),
            306 =>
            array (
                'id' => '1307',
                'estado_id' => '15',
                'descricao' => 'Cubati'
            ),
            307 =>
            array (
                'id' => '1308',
                'estado_id' => '15',
                'descricao' => 'Cuité'
            ),
            308 =>
            array (
                'id' => '1309',
                'estado_id' => '15',
                'descricao' => 'Cuitegi'
            ),
            309 =>
            array (
                'id' => '1310',
                'estado_id' => '15',
                'descricao' => 'Cuité de Mamanguape'
            ),
            310 =>
            array (
                'id' => '1311',
                'estado_id' => '15',
                'descricao' => 'Curral de Cima'
            ),
            311 =>
            array (
                'id' => '1312',
                'estado_id' => '15',
                'descricao' => 'Curral Velho'
            ),
            312 =>
            array (
                'id' => '1313',
                'estado_id' => '15',
                'descricao' => 'Damião'
            ),
            313 =>
            array (
                'id' => '1314',
                'estado_id' => '15',
                'descricao' => 'Desterro'
            ),
            314 =>
            array (
                'id' => '1315',
                'estado_id' => '15',
                'descricao' => 'Vista Serrana'
            ),
            315 =>
            array (
                'id' => '1316',
                'estado_id' => '15',
                'descricao' => 'Diamante'
            ),
            316 =>
            array (
                'id' => '1317',
                'estado_id' => '15',
                'descricao' => 'Dona Inês'
            ),
            317 =>
            array (
                'id' => '1318',
                'estado_id' => '15',
                'descricao' => 'Duas Estradas'
            ),
            318 =>
            array (
                'id' => '1319',
                'estado_id' => '15',
                'descricao' => 'Emas'
            ),
            319 =>
            array (
                'id' => '1320',
                'estado_id' => '15',
                'descricao' => 'Esperança'
            ),
            320 =>
            array (
                'id' => '1321',
                'estado_id' => '15',
                'descricao' => 'Fagundes'
            ),
            321 =>
            array (
                'id' => '1322',
                'estado_id' => '15',
                'descricao' => 'Frei Martinho'
            ),
            322 =>
            array (
                'id' => '1323',
                'estado_id' => '15',
                'descricao' => 'Gado Bravo'
            ),
            323 =>
            array (
                'id' => '1324',
                'estado_id' => '15',
                'descricao' => 'Guarabira'
            ),
            324 =>
            array (
                'id' => '1325',
                'estado_id' => '15',
                'descricao' => 'Gurinhém'
            ),
            325 =>
            array (
                'id' => '1326',
                'estado_id' => '15',
                'descricao' => 'Gurjão'
            ),
            326 =>
            array (
                'id' => '1327',
                'estado_id' => '15',
                'descricao' => 'Ibiara'
            ),
            327 =>
            array (
                'id' => '1328',
                'estado_id' => '15',
                'descricao' => 'Imaculada'
            ),
            328 =>
            array (
                'id' => '1329',
                'estado_id' => '15',
                'descricao' => 'Ingá'
            ),
            329 =>
            array (
                'id' => '1330',
                'estado_id' => '15',
                'descricao' => 'Itabaiana'
            ),
            330 =>
            array (
                'id' => '1331',
                'estado_id' => '15',
                'descricao' => 'Itaporanga'
            ),
            331 =>
            array (
                'id' => '1332',
                'estado_id' => '15',
                'descricao' => 'Itapororoca'
            ),
            332 =>
            array (
                'id' => '1333',
                'estado_id' => '15',
                'descricao' => 'Itatuba'
            ),
            333 =>
            array (
                'id' => '1334',
                'estado_id' => '15',
                'descricao' => 'Jacaraú'
            ),
            334 =>
            array (
                'id' => '1335',
                'estado_id' => '15',
                'descricao' => 'Jericó'
            ),
            335 =>
            array (
                'id' => '1336',
                'estado_id' => '15',
                'descricao' => 'João Pessoa',
            ),
            336 =>
            array (
                'id' => '1337',
                'estado_id' => '15',
                'descricao' => 'Juarez Távora'
            ),
            337 =>
            array (
                'id' => '1338',
                'estado_id' => '15',
                'descricao' => 'Juazeirinho'
            ),
            338 =>
            array (
                'id' => '1339',
                'estado_id' => '15',
                'descricao' => 'Junco do Seridó'
            ),
            339 =>
            array (
                'id' => '1340',
                'estado_id' => '15',
                'descricao' => 'Juripiranga'
            ),
            340 =>
            array (
                'id' => '1341',
                'estado_id' => '15',
                'descricao' => 'Juru'
            ),
            341 =>
            array (
                'id' => '1342',
                'estado_id' => '15',
                'descricao' => 'Lagoa'
            ),
            342 =>
            array (
                'id' => '1343',
                'estado_id' => '15',
                'descricao' => 'Lagoa de Dentro'
            ),
            343 =>
            array (
                'id' => '1344',
                'estado_id' => '15',
                'descricao' => 'Lagoa Seca'
            ),
            344 =>
            array (
                'id' => '1345',
                'estado_id' => '15',
                'descricao' => 'Lastro'
            ),
            345 =>
            array (
                'id' => '1346',
                'estado_id' => '15',
                'descricao' => 'Livramento'
            ),
            346 =>
            array (
                'id' => '1347',
                'estado_id' => '15',
                'descricao' => 'Logradouro'
            ),
            347 =>
            array (
                'id' => '1348',
                'estado_id' => '15',
                'descricao' => 'Lucena'
            ),
            348 =>
            array (
                'id' => '1349',
                'estado_id' => '15',
                'descricao' => 'Mãe D\'água'
            ),
            349 =>
            array (
                'id' => '1350',
                'estado_id' => '15',
                'descricao' => 'Malta'
            ),
            350 =>
            array (
                'id' => '1351',
                'estado_id' => '15',
                'descricao' => 'Mamanguape'
            ),
            351 =>
            array (
                'id' => '1352',
                'estado_id' => '15',
                'descricao' => 'Manaíra'
            ),
            352 =>
            array (
                'id' => '1353',
                'estado_id' => '15',
                'descricao' => 'Marcação'
            ),
            353 =>
            array (
                'id' => '1354',
                'estado_id' => '15',
                'descricao' => 'Mari'
            ),
            354 =>
            array (
                'id' => '1355',
                'estado_id' => '15',
                'descricao' => 'Marizópolis'
            ),
            355 =>
            array (
                'id' => '1356',
                'estado_id' => '15',
                'descricao' => 'Massaranduba'
            ),
            356 =>
            array (
                'id' => '1357',
                'estado_id' => '15',
                'descricao' => 'Mataraca'
            ),
            357 =>
            array (
                'id' => '1358',
                'estado_id' => '15',
                'descricao' => 'Matinhas'
            ),
            358 =>
            array (
                'id' => '1359',
                'estado_id' => '15',
                'descricao' => 'Mato Grosso'
            ),
            359 =>
            array (
                'id' => '1360',
                'estado_id' => '15',
                'descricao' => 'Maturéia'
            ),
            360 =>
            array (
                'id' => '1361',
                'estado_id' => '15',
                'descricao' => 'Mogeiro'
            ),
            361 =>
            array (
                'id' => '1362',
                'estado_id' => '15',
                'descricao' => 'Montadas'
            ),
            362 =>
            array (
                'id' => '1363',
                'estado_id' => '15',
                'descricao' => 'Monte Horebe'
            ),
            363 =>
            array (
                'id' => '1364',
                'estado_id' => '15',
                'descricao' => 'Monteiro'
            ),
            364 =>
            array (
                'id' => '1365',
                'estado_id' => '15',
                'descricao' => 'Mulungu'
            ),
            365 =>
            array (
                'id' => '1366',
                'estado_id' => '15',
                'descricao' => 'Natuba'
            ),
            366 =>
            array (
                'id' => '1367',
                'estado_id' => '15',
                'descricao' => 'Nazarezinho'
            ),
            367 =>
            array (
                'id' => '1368',
                'estado_id' => '15',
                'descricao' => 'Nova Floresta'
            ),
            368 =>
            array (
                'id' => '1369',
                'estado_id' => '15',
                'descricao' => 'Nova Olinda'
            ),
            369 =>
            array (
                'id' => '1370',
                'estado_id' => '15',
                'descricao' => 'Nova Palmeira'
            ),
            370 =>
            array (
                'id' => '1371',
                'estado_id' => '15',
                'descricao' => 'Olho D\'água'
            ),
            371 =>
            array (
                'id' => '1372',
                'estado_id' => '15',
                'descricao' => 'Olivedos'
            ),
            372 =>
            array (
                'id' => '1373',
                'estado_id' => '15',
                'descricao' => 'Ouro Velho'
            ),
            373 =>
            array (
                'id' => '1374',
                'estado_id' => '15',
                'descricao' => 'Parari'
            ),
            374 =>
            array (
                'id' => '1375',
                'estado_id' => '15',
                'descricao' => 'Passagem'
            ),
            375 =>
            array (
                'id' => '1376',
                'estado_id' => '15',
                'descricao' => 'Patos'
            ),
            376 =>
            array (
                'id' => '1377',
                'estado_id' => '15',
                'descricao' => 'Paulista'
            ),
            377 =>
            array (
                'id' => '1378',
                'estado_id' => '15',
                'descricao' => 'Pedra Branca'
            ),
            378 =>
            array (
                'id' => '1379',
                'estado_id' => '15',
                'descricao' => 'Pedra Lavrada'
            ),
            379 =>
            array (
                'id' => '1380',
                'estado_id' => '15',
                'descricao' => 'Pedras de Fogo'
            ),
            380 =>
            array (
                'id' => '1381',
                'estado_id' => '15',
                'descricao' => 'Piancó'
            ),
            381 =>
            array (
                'id' => '1382',
                'estado_id' => '15',
                'descricao' => 'Picuí'
            ),
            382 =>
            array (
                'id' => '1383',
                'estado_id' => '15',
                'descricao' => 'Pilar'
            ),
            383 =>
            array (
                'id' => '1384',
                'estado_id' => '15',
                'descricao' => 'Pilões'
            ),
            384 =>
            array (
                'id' => '1385',
                'estado_id' => '15',
                'descricao' => 'Pilõezinhos'
            ),
            385 =>
            array (
                'id' => '1386',
                'estado_id' => '15',
                'descricao' => 'Pirpirituba'
            ),
            386 =>
            array (
                'id' => '1387',
                'estado_id' => '15',
                'descricao' => 'Pitimbu'
            ),
            387 =>
            array (
                'id' => '1388',
                'estado_id' => '15',
                'descricao' => 'Pocinhos'
            ),
            388 =>
            array (
                'id' => '1389',
                'estado_id' => '15',
                'descricao' => 'Poço Dantas'
            ),
            389 =>
            array (
                'id' => '1390',
                'estado_id' => '15',
                'descricao' => 'Poço de José de Moura'
            ),
            390 =>
            array (
                'id' => '1391',
                'estado_id' => '15',
                'descricao' => 'Pombal'
            ),
            391 =>
            array (
                'id' => '1392',
                'estado_id' => '15',
                'descricao' => 'Prata'
            ),
            392 =>
            array (
                'id' => '1393',
                'estado_id' => '15',
                'descricao' => 'Princesa Isabel'
            ),
            393 =>
            array (
                'id' => '1394',
                'estado_id' => '15',
                'descricao' => 'Puxinanã'
            ),
            394 =>
            array (
                'id' => '1395',
                'estado_id' => '15',
                'descricao' => 'Queimadas'
            ),
            395 =>
            array (
                'id' => '1396',
                'estado_id' => '15',
                'descricao' => 'Quixabá'
            ),
            396 =>
            array (
                'id' => '1397',
                'estado_id' => '15',
                'descricao' => 'Remígio'
            ),
            397 =>
            array (
                'id' => '1398',
                'estado_id' => '15',
                'descricao' => 'Pedro Régis'
            ),
            398 =>
            array (
                'id' => '1399',
                'estado_id' => '15',
                'descricao' => 'Riachão'
            ),
            399 =>
            array (
                'id' => '1400',
                'estado_id' => '15',
                'descricao' => 'Riachão do Bacamarte'
            ),
            400 =>
            array (
                'id' => '1401',
                'estado_id' => '15',
                'descricao' => 'Riachão do Poço'
            ),
            401 =>
            array (
                'id' => '1402',
                'estado_id' => '15',
                'descricao' => 'Riacho de Santo Antônio'
            ),
            402 =>
            array (
                'id' => '1403',
                'estado_id' => '15',
                'descricao' => 'Riacho dos Cavalos'
            ),
            403 =>
            array (
                'id' => '1404',
                'estado_id' => '15',
                'descricao' => 'Rio Tinto'
            ),
            404 =>
            array (
                'id' => '1405',
                'estado_id' => '15',
                'descricao' => 'Salgadinho'
            ),
            405 =>
            array (
                'id' => '1406',
                'estado_id' => '15',
                'descricao' => 'Salgado de São Félix'
            ),
            406 =>
            array (
                'id' => '1407',
                'estado_id' => '15',
                'descricao' => 'Santa Cecília'
            ),
            407 =>
            array (
                'id' => '1408',
                'estado_id' => '15',
                'descricao' => 'Santa Cruz'
            ),
            408 =>
            array (
                'id' => '1409',
                'estado_id' => '15',
                'descricao' => 'Santa Helena'
            ),
            409 =>
            array (
                'id' => '1410',
                'estado_id' => '15',
                'descricao' => 'Santa Inês'
            ),
            410 =>
            array (
                'id' => '1411',
                'estado_id' => '15',
                'descricao' => 'Santa Luzia'
            ),
            411 =>
            array (
                'id' => '1412',
                'estado_id' => '15',
                'descricao' => 'Santana de Mangueira'
            ),
            412 =>
            array (
                'id' => '1413',
                'estado_id' => '15',
                'descricao' => 'Santana dos Garrotes'
            ),
            413 =>
            array (
                'id' => '1414',
                'estado_id' => '15',
                'descricao' => 'Santarém'
            ),
            414 =>
            array (
                'id' => '1415',
                'estado_id' => '15',
                'descricao' => 'Santa Rita'
            ),
            415 =>
            array (
                'id' => '1416',
                'estado_id' => '15',
                'descricao' => 'Santa Teresinha'
            ),
            416 =>
            array (
                'id' => '1417',
                'estado_id' => '15',
                'descricao' => 'Santo André'
            ),
            417 =>
            array (
                'id' => '1418',
                'estado_id' => '15',
                'descricao' => 'São Bento'
            ),
            418 =>
            array (
                'id' => '1419',
                'estado_id' => '15',
                'descricao' => 'São Bentinho'
            ),
            419 =>
            array (
                'id' => '1420',
                'estado_id' => '15',
                'descricao' => 'São Domingos do Cariri'
            ),
            420 =>
            array (
                'id' => '1421',
                'estado_id' => '15',
                'descricao' => 'São Domingos de Pombal'
            ),
            421 =>
            array (
                'id' => '1422',
                'estado_id' => '15',
                'descricao' => 'São Francisco'
            ),
            422 =>
            array (
                'id' => '1423',
                'estado_id' => '15',
                'descricao' => 'São João do Cariri'
            ),
            423 =>
            array (
                'id' => '1424',
                'estado_id' => '15',
                'descricao' => 'São João do Tigre'
            ),
            424 =>
            array (
                'id' => '1425',
                'estado_id' => '15',
                'descricao' => 'São José da Lagoa Tapada'
            ),
            425 =>
            array (
                'id' => '1426',
                'estado_id' => '15',
                'descricao' => 'São José de Caiana'
            ),
            426 =>
            array (
                'id' => '1427',
                'estado_id' => '15',
                'descricao' => 'São José de Espinharas'
            ),
            427 =>
            array (
                'id' => '1428',
                'estado_id' => '15',
                'descricao' => 'São José dos Ramos'
            ),
            428 =>
            array (
                'id' => '1429',
                'estado_id' => '15',
                'descricao' => 'São José de Piranhas'
            ),
            429 =>
            array (
                'id' => '1430',
                'estado_id' => '15',
                'descricao' => 'São José de Princesa'
            ),
            430 =>
            array (
                'id' => '1431',
                'estado_id' => '15',
                'descricao' => 'São José do Bonfim'
            ),
            431 =>
            array (
                'id' => '1432',
                'estado_id' => '15',
                'descricao' => 'São José do Brejo do Cruz'
            ),
            432 =>
            array (
                'id' => '1433',
                'estado_id' => '15',
                'descricao' => 'São José do Sabugi'
            ),
            433 =>
            array (
                'id' => '1434',
                'estado_id' => '15',
                'descricao' => 'São José dos Cordeiros'
            ),
            434 =>
            array (
                'id' => '1435',
                'estado_id' => '15',
                'descricao' => 'São Mamede'
            ),
            435 =>
            array (
                'id' => '1436',
                'estado_id' => '15',
                'descricao' => 'São Miguel de Taipu'
            ),
            436 =>
            array (
                'id' => '1437',
                'estado_id' => '15',
                'descricao' => 'São Sebastião de Lagoa de Roça'
            ),
            437 =>
            array (
                'id' => '1438',
                'estado_id' => '15',
                'descricao' => 'São Sebastião do Umbuzeiro'
            ),
            438 =>
            array (
                'id' => '1439',
                'estado_id' => '15',
                'descricao' => 'Sapé'
            ),
            439 =>
            array (
                'id' => '1440',
                'estado_id' => '15',
                'descricao' => 'Seridó'
            ),
            440 =>
            array (
                'id' => '1441',
                'estado_id' => '15',
                'descricao' => 'Serra Branca'
            ),
            441 =>
            array (
                'id' => '1442',
                'estado_id' => '15',
                'descricao' => 'Serra da Raiz'
            ),
            442 =>
            array (
                'id' => '1443',
                'estado_id' => '15',
                'descricao' => 'Serra Grande'
            ),
            443 =>
            array (
                'id' => '1444',
                'estado_id' => '15',
                'descricao' => 'Serra Redonda'
            ),
            444 =>
            array (
                'id' => '1445',
                'estado_id' => '15',
                'descricao' => 'Serraria'
            ),
            445 =>
            array (
                'id' => '1446',
                'estado_id' => '15',
                'descricao' => 'Sertãozinho'
            ),
            446 =>
            array (
                'id' => '1447',
                'estado_id' => '15',
                'descricao' => 'Sobrado'
            ),
            447 =>
            array (
                'id' => '1448',
                'estado_id' => '15',
                'descricao' => 'Solânea'
            ),
            448 =>
            array (
                'id' => '1449',
                'estado_id' => '15',
                'descricao' => 'Soledade'
            ),
            449 =>
            array (
                'id' => '1450',
                'estado_id' => '15',
                'descricao' => 'Sossêgo'
            ),
            450 =>
            array (
                'id' => '1451',
                'estado_id' => '15',
                'descricao' => 'Sousa'
            ),
            451 =>
            array (
                'id' => '1452',
                'estado_id' => '15',
                'descricao' => 'Sumé'
            ),
            452 =>
            array (
                'id' => '1453',
                'estado_id' => '15',
                'descricao' => 'Campo de Santana'
            ),
            453 =>
            array (
                'id' => '1454',
                'estado_id' => '15',
                'descricao' => 'Taperoá'
            ),
            454 =>
            array (
                'id' => '1455',
                'estado_id' => '15',
                'descricao' => 'Tavares'
            ),
            455 =>
            array (
                'id' => '1456',
                'estado_id' => '15',
                'descricao' => 'Teixeira'
            ),
            456 =>
            array (
                'id' => '1457',
                'estado_id' => '15',
                'descricao' => 'Tenório'
            ),
            457 =>
            array (
                'id' => '1458',
                'estado_id' => '15',
                'descricao' => 'Triunfo'
            ),
            458 =>
            array (
                'id' => '1459',
                'estado_id' => '15',
                'descricao' => 'Uiraúna'
            ),
            459 =>
            array (
                'id' => '1460',
                'estado_id' => '15',
                'descricao' => 'Umbuzeiro'
            ),
            460 =>
            array (
                'id' => '1461',
                'estado_id' => '15',
                'descricao' => 'Várzea'
            ),
            461 =>
            array (
                'id' => '1462',
                'estado_id' => '15',
                'descricao' => 'Vieirópolis'
            ),
            462 =>
            array (
                'id' => '1463',
                'estado_id' => '15',
                'descricao' => 'Zabelê'
            ),
            463 =>
            array (
                'id' => '1464',
                'estado_id' => '16',
                'descricao' => 'Abreu e Lima'
            ),
            464 =>
            array (
                'id' => '1465',
                'estado_id' => '16',
                'descricao' => 'Afogados da Ingazeira'
            ),
            465 =>
            array (
                'id' => '1466',
                'estado_id' => '16',
                'descricao' => 'Afrânio'
            ),
            466 =>
            array (
                'id' => '1467',
                'estado_id' => '16',
                'descricao' => 'Agrestina'
            ),
            467 =>
            array (
                'id' => '1468',
                'estado_id' => '16',
                'descricao' => 'Água Preta'
            ),
            468 =>
            array (
                'id' => '1469',
                'estado_id' => '16',
                'descricao' => 'Águas Belas'
            ),
            469 =>
            array (
                'id' => '1470',
                'estado_id' => '16',
                'descricao' => 'Alagoinha'
            ),
            470 =>
            array (
                'id' => '1471',
                'estado_id' => '16',
                'descricao' => 'Aliança'
            ),
            471 =>
            array (
                'id' => '1472',
                'estado_id' => '16',
                'descricao' => 'Altinho'
            ),
            472 =>
            array (
                'id' => '1473',
                'estado_id' => '16',
                'descricao' => 'Amaraji'
            ),
            473 =>
            array (
                'id' => '1474',
                'estado_id' => '16',
                'descricao' => 'Angelim'
            ),
            474 =>
            array (
                'id' => '1475',
                'estado_id' => '16',
                'descricao' => 'Araçoiaba'
            ),
            475 =>
            array (
                'id' => '1476',
                'estado_id' => '16',
                'descricao' => 'Araripina'
            ),
            476 =>
            array (
                'id' => '1477',
                'estado_id' => '16',
                'descricao' => 'Arcoverde'
            ),
            477 =>
            array (
                'id' => '1478',
                'estado_id' => '16',
                'descricao' => 'Barra de Guabiraba'
            ),
            478 =>
            array (
                'id' => '1479',
                'estado_id' => '16',
                'descricao' => 'Barreiros'
            ),
            479 =>
            array (
                'id' => '1480',
                'estado_id' => '16',
                'descricao' => 'Belém de Maria'
            ),
            480 =>
            array (
                'id' => '1481',
                'estado_id' => '16',
                'descricao' => 'Belém de São Francisco'
            ),
            481 =>
            array (
                'id' => '1482',
                'estado_id' => '16',
                'descricao' => 'Belo Jardim'
            ),
            482 =>
            array (
                'id' => '1483',
                'estado_id' => '16',
                'descricao' => 'Betânia'
            ),
            483 =>
            array (
                'id' => '1484',
                'estado_id' => '16',
                'descricao' => 'Bezerros'
            ),
            484 =>
            array (
                'id' => '1485',
                'estado_id' => '16',
                'descricao' => 'Bodocó'
            ),
            485 =>
            array (
                'id' => '1486',
                'estado_id' => '16',
                'descricao' => 'Bom Conselho'
            ),
            486 =>
            array (
                'id' => '1487',
                'estado_id' => '16',
                'descricao' => 'Bom Jardim'
            ),
            487 =>
            array (
                'id' => '1488',
                'estado_id' => '16',
                'descricao' => 'Bonito'
            ),
            488 =>
            array (
                'id' => '1489',
                'estado_id' => '16',
                'descricao' => 'Brejão'
            ),
            489 =>
            array (
                'id' => '1490',
                'estado_id' => '16',
                'descricao' => 'Brejinho'
            ),
            490 =>
            array (
                'id' => '1491',
                'estado_id' => '16',
                'descricao' => 'Brejo da Madre de Deus'
            ),
            491 =>
            array (
                'id' => '1492',
                'estado_id' => '16',
                'descricao' => 'Buenos Aires'
            ),
            492 =>
            array (
                'id' => '1493',
                'estado_id' => '16',
                'descricao' => 'Buíque'
            ),
            493 =>
            array (
                'id' => '1494',
                'estado_id' => '16',
                'descricao' => 'Cabo de Santo Agostinho'
            ),
            494 =>
            array (
                'id' => '1495',
                'estado_id' => '16',
                'descricao' => 'Cabrobó'
            ),
            495 =>
            array (
                'id' => '1496',
                'estado_id' => '16',
                'descricao' => 'Cachoeirinha'
            ),
            496 =>
            array (
                'id' => '1497',
                'estado_id' => '16',
                'descricao' => 'Caetés'
            ),
            497 =>
            array (
                'id' => '1498',
                'estado_id' => '16',
                'descricao' => 'Calçado'
            ),
            498 =>
            array (
                'id' => '1499',
                'estado_id' => '16',
                'descricao' => 'Calumbi'
            ),
            499 =>
            array (
                'id' => '1500',
                'estado_id' => '16',
                'descricao' => 'Camaragibe'
            ),
        ));
        \DB::table('municipios')->insert(array (
            0 =>
            array (
                'id' => '1501',
                'estado_id' => '16',
                'descricao' => 'Camocim de São Félix'
            ),
            1 =>
            array (
                'id' => '1502',
                'estado_id' => '16',
                'descricao' => 'Camutanga'
            ),
            2 =>
            array (
                'id' => '1503',
                'estado_id' => '16',
                'descricao' => 'Canhotinho'
            ),
            3 =>
            array (
                'id' => '1504',
                'estado_id' => '16',
                'descricao' => 'Capoeiras'
            ),
            4 =>
            array (
                'id' => '1505',
                'estado_id' => '16',
                'descricao' => 'Carnaíba'
            ),
            5 =>
            array (
                'id' => '1506',
                'estado_id' => '16',
                'descricao' => 'Carnaubeira da Penha'
            ),
            6 =>
            array (
                'id' => '1507',
                'estado_id' => '16',
                'descricao' => 'Carpina'
            ),
            7 =>
            array (
                'id' => '1508',
                'estado_id' => '16',
                'descricao' => 'Caruaru'
            ),
            8 =>
            array (
                'id' => '1509',
                'estado_id' => '16',
                'descricao' => 'Casinhas'
            ),
            9 =>
            array (
                'id' => '1510',
                'estado_id' => '16',
                'descricao' => 'Catende'
            ),
            10 =>
            array (
                'id' => '1511',
                'estado_id' => '16',
                'descricao' => 'Cedro'
            ),
            11 =>
            array (
                'id' => '1512',
                'estado_id' => '16',
                'descricao' => 'Chã de Alegria'
            ),
            12 =>
            array (
                'id' => '1513',
                'estado_id' => '16',
                'descricao' => 'Chã Grande'
            ),
            13 =>
            array (
                'id' => '1514',
                'estado_id' => '16',
                'descricao' => 'Condado'
            ),
            14 =>
            array (
                'id' => '1515',
                'estado_id' => '16',
                'descricao' => 'Correntes'
            ),
            15 =>
            array (
                'id' => '1516',
                'estado_id' => '16',
                'descricao' => 'Cortês'
            ),
            16 =>
            array (
                'id' => '1517',
                'estado_id' => '16',
                'descricao' => 'Cumaru'
            ),
            17 =>
            array (
                'id' => '1518',
                'estado_id' => '16',
                'descricao' => 'Cupira'
            ),
            18 =>
            array (
                'id' => '1519',
                'estado_id' => '16',
                'descricao' => 'Custódia'
            ),
            19 =>
            array (
                'id' => '1520',
                'estado_id' => '16',
                'descricao' => 'Dormentes'
            ),
            20 =>
            array (
                'id' => '1521',
                'estado_id' => '16',
                'descricao' => 'Escada'
            ),
            21 =>
            array (
                'id' => '1522',
                'estado_id' => '16',
                'descricao' => 'Exu'
            ),
            22 =>
            array (
                'id' => '1523',
                'estado_id' => '16',
                'descricao' => 'Feira Nova'
            ),
            23 =>
            array (
                'id' => '1524',
                'estado_id' => '16',
                'descricao' => 'Fernando de Noronha',
            ),
            24 =>
            array (
                'id' => '1525',
                'estado_id' => '16',
                'descricao' => 'Ferreiros'
            ),
            25 =>
            array (
                'id' => '1526',
                'estado_id' => '16',
                'descricao' => 'Flores'
            ),
            26 =>
            array (
                'id' => '1527',
                'estado_id' => '16',
                'descricao' => 'Floresta'
            ),
            27 =>
            array (
                'id' => '1528',
                'estado_id' => '16',
                'descricao' => 'Frei Miguelinho'
            ),
            28 =>
            array (
                'id' => '1529',
                'estado_id' => '16',
                'descricao' => 'Gameleira'
            ),
            29 =>
            array (
                'id' => '1530',
                'estado_id' => '16',
                'descricao' => 'Garanhuns'
            ),
            30 =>
            array (
                'id' => '1531',
                'estado_id' => '16',
                'descricao' => 'Glória do Goitá'
            ),
            31 =>
            array (
                'id' => '1532',
                'estado_id' => '16',
                'descricao' => 'Goiana'
            ),
            32 =>
            array (
                'id' => '1533',
                'estado_id' => '16',
                'descricao' => 'Granito'
            ),
            33 =>
            array (
                'id' => '1534',
                'estado_id' => '16',
                'descricao' => 'Gravatá'
            ),
            34 =>
            array (
                'id' => '1535',
                'estado_id' => '16',
                'descricao' => 'Iati'
            ),
            35 =>
            array (
                'id' => '1536',
                'estado_id' => '16',
                'descricao' => 'Ibimirim'
            ),
            36 =>
            array (
                'id' => '1537',
                'estado_id' => '16',
                'descricao' => 'Ibirajuba'
            ),
            37 =>
            array (
                'id' => '1538',
                'estado_id' => '16',
                'descricao' => 'Igarassu'
            ),
            38 =>
            array (
                'id' => '1539',
                'estado_id' => '16',
                'descricao' => 'Iguaraci'
            ),
            39 =>
            array (
                'id' => '1540',
                'estado_id' => '16',
                'descricao' => 'Inajá'
            ),
            40 =>
            array (
                'id' => '1541',
                'estado_id' => '16',
                'descricao' => 'Ingazeira'
            ),
            41 =>
            array (
                'id' => '1542',
                'estado_id' => '16',
                'descricao' => 'Ipojuca'
            ),
            42 =>
            array (
                'id' => '1543',
                'estado_id' => '16',
                'descricao' => 'Ipubi'
            ),
            43 =>
            array (
                'id' => '1544',
                'estado_id' => '16',
                'descricao' => 'Itacuruba'
            ),
            44 =>
            array (
                'id' => '1545',
                'estado_id' => '16',
                'descricao' => 'Itaíba'
            ),
            45 =>
            array (
                'id' => '1546',
                'estado_id' => '16',
                'descricao' => 'Ilha de Itamaracá'
            ),
            46 =>
            array (
                'id' => '1547',
                'estado_id' => '16',
                'descricao' => 'Itambé'
            ),
            47 =>
            array (
                'id' => '1548',
                'estado_id' => '16',
                'descricao' => 'Itapetim'
            ),
            48 =>
            array (
                'id' => '1549',
                'estado_id' => '16',
                'descricao' => 'Itapissuma'
            ),
            49 =>
            array (
                'id' => '1550',
                'estado_id' => '16',
                'descricao' => 'Itaquitinga'
            ),
            50 =>
            array (
                'id' => '1551',
                'estado_id' => '16',
                'descricao' => 'Jaboatão dos Guararapes'
            ),
            51 =>
            array (
                'id' => '1552',
                'estado_id' => '16',
                'descricao' => 'Jaqueira'
            ),
            52 =>
            array (
                'id' => '1553',
                'estado_id' => '16',
                'descricao' => 'Jataúba'
            ),
            53 =>
            array (
                'id' => '1554',
                'estado_id' => '16',
                'descricao' => 'Jatobá'
            ),
            54 =>
            array (
                'id' => '1555',
                'estado_id' => '16',
                'descricao' => 'João Alfredo'
            ),
            55 =>
            array (
                'id' => '1556',
                'estado_id' => '16',
                'descricao' => 'Joaquim Nabuco'
            ),
            56 =>
            array (
                'id' => '1557',
                'estado_id' => '16',
                'descricao' => 'Jucati'
            ),
            57 =>
            array (
                'id' => '1558',
                'estado_id' => '16',
                'descricao' => 'Jupi'
            ),
            58 =>
            array (
                'id' => '1559',
                'estado_id' => '16',
                'descricao' => 'Jurema'
            ),
            59 =>
            array (
                'id' => '1560',
                'estado_id' => '16',
                'descricao' => 'Lagoa do Carro'
            ),
            60 =>
            array (
                'id' => '1561',
                'estado_id' => '16',
                'descricao' => 'Lagoa do Itaenga'
            ),
            61 =>
            array (
                'id' => '1562',
                'estado_id' => '16',
                'descricao' => 'Lagoa do Ouro'
            ),
            62 =>
            array (
                'id' => '1563',
                'estado_id' => '16',
                'descricao' => 'Lagoa dos Gatos'
            ),
            63 =>
            array (
                'id' => '1564',
                'estado_id' => '16',
                'descricao' => 'Lagoa Grande'
            ),
            64 =>
            array (
                'id' => '1565',
                'estado_id' => '16',
                'descricao' => 'Lajedo'
            ),
            65 =>
            array (
                'id' => '1566',
                'estado_id' => '16',
                'descricao' => 'Limoeiro'
            ),
            66 =>
            array (
                'id' => '1567',
                'estado_id' => '16',
                'descricao' => 'Macaparana'
            ),
            67 =>
            array (
                'id' => '1568',
                'estado_id' => '16',
                'descricao' => 'Machados'
            ),
            68 =>
            array (
                'id' => '1569',
                'estado_id' => '16',
                'descricao' => 'Manari'
            ),
            69 =>
            array (
                'id' => '1570',
                'estado_id' => '16',
                'descricao' => 'Maraial'
            ),
            70 =>
            array (
                'id' => '1571',
                'estado_id' => '16',
                'descricao' => 'Mirandiba'
            ),
            71 =>
            array (
                'id' => '1572',
                'estado_id' => '16',
                'descricao' => 'Moreno'
            ),
            72 =>
            array (
                'id' => '1573',
                'estado_id' => '16',
                'descricao' => 'Nazaré da Mata'
            ),
            73 =>
            array (
                'id' => '1574',
                'estado_id' => '16',
                'descricao' => 'Olinda'
            ),
            74 =>
            array (
                'id' => '1575',
                'estado_id' => '16',
                'descricao' => 'Orobó'
            ),
            75 =>
            array (
                'id' => '1576',
                'estado_id' => '16',
                'descricao' => 'Orocó'
            ),
            76 =>
            array (
                'id' => '1577',
                'estado_id' => '16',
                'descricao' => 'Ouricuri'
            ),
            77 =>
            array (
                'id' => '1578',
                'estado_id' => '16',
                'descricao' => 'Palmares'
            ),
            78 =>
            array (
                'id' => '1579',
                'estado_id' => '16',
                'descricao' => 'Palmeirina'
            ),
            79 =>
            array (
                'id' => '1580',
                'estado_id' => '16',
                'descricao' => 'Panelas'
            ),
            80 =>
            array (
                'id' => '1581',
                'estado_id' => '16',
                'descricao' => 'Paranatama'
            ),
            81 =>
            array (
                'id' => '1582',
                'estado_id' => '16',
                'descricao' => 'Parnamirim'
            ),
            82 =>
            array (
                'id' => '1583',
                'estado_id' => '16',
                'descricao' => 'Passira'
            ),
            83 =>
            array (
                'id' => '1584',
                'estado_id' => '16',
                'descricao' => 'Paudalho'
            ),
            84 =>
            array (
                'id' => '1585',
                'estado_id' => '16',
                'descricao' => 'Paulista'
            ),
            85 =>
            array (
                'id' => '1586',
                'estado_id' => '16',
                'descricao' => 'Pedra'
            ),
            86 =>
            array (
                'id' => '1587',
                'estado_id' => '16',
                'descricao' => 'Pesqueira'
            ),
            87 =>
            array (
                'id' => '1588',
                'estado_id' => '16',
                'descricao' => 'Petrolândia'
            ),
            88 =>
            array (
                'id' => '1589',
                'estado_id' => '16',
                'descricao' => 'Petrolina'
            ),
            89 =>
            array (
                'id' => '1590',
                'estado_id' => '16',
                'descricao' => 'Poção'
            ),
            90 =>
            array (
                'id' => '1591',
                'estado_id' => '16',
                'descricao' => 'Pombos'
            ),
            91 =>
            array (
                'id' => '1592',
                'estado_id' => '16',
                'descricao' => 'Primavera'
            ),
            92 =>
            array (
                'id' => '1593',
                'estado_id' => '16',
                'descricao' => 'Quipapá'
            ),
            93 =>
            array (
                'id' => '1594',
                'estado_id' => '16',
                'descricao' => 'Quixaba'
            ),
            94 =>
            array (
                'id' => '1595',
                'estado_id' => '16',
                'descricao' => 'Recife',
            ),
            95 =>
            array (
                'id' => '1596',
                'estado_id' => '16',
                'descricao' => 'Riacho das Almas'
            ),
            96 =>
            array (
                'id' => '1597',
                'estado_id' => '16',
                'descricao' => 'Ribeirão'
            ),
            97 =>
            array (
                'id' => '1598',
                'estado_id' => '16',
                'descricao' => 'Rio Formoso'
            ),
            98 =>
            array (
                'id' => '1599',
                'estado_id' => '16',
                'descricao' => 'Sairé'
            ),
            99 =>
            array (
                'id' => '1600',
                'estado_id' => '16',
                'descricao' => 'Salgadinho'
            ),
            100 =>
            array (
                'id' => '1601',
                'estado_id' => '16',
                'descricao' => 'Salgueiro'
            ),
            101 =>
            array (
                'id' => '1602',
                'estado_id' => '16',
                'descricao' => 'Saloá'
            ),
            102 =>
            array (
                'id' => '1603',
                'estado_id' => '16',
                'descricao' => 'Sanharó'
            ),
            103 =>
            array (
                'id' => '1604',
                'estado_id' => '16',
                'descricao' => 'Santa Cruz'
            ),
            104 =>
            array (
                'id' => '1605',
                'estado_id' => '16',
                'descricao' => 'Santa Cruz da Baixa Verde'
            ),
            105 =>
            array (
                'id' => '1606',
                'estado_id' => '16',
                'descricao' => 'Santa Cruz do Capibaribe'
            ),
            106 =>
            array (
                'id' => '1607',
                'estado_id' => '16',
                'descricao' => 'Santa Filomena'
            ),
            107 =>
            array (
                'id' => '1608',
                'estado_id' => '16',
                'descricao' => 'Santa Maria da Boa Vista'
            ),
            108 =>
            array (
                'id' => '1609',
                'estado_id' => '16',
                'descricao' => 'Santa Maria do Cambucá'
            ),
            109 =>
            array (
                'id' => '1610',
                'estado_id' => '16',
                'descricao' => 'Santa Terezinha'
            ),
            110 =>
            array (
                'id' => '1611',
                'estado_id' => '16',
                'descricao' => 'São Benedito do Sul'
            ),
            111 =>
            array (
                'id' => '1612',
                'estado_id' => '16',
                'descricao' => 'São Bento do Una'
            ),
            112 =>
            array (
                'id' => '1613',
                'estado_id' => '16',
                'descricao' => 'São Caitano'
            ),
            113 =>
            array (
                'id' => '1614',
                'estado_id' => '16',
                'descricao' => 'São João'
            ),
            114 =>
            array (
                'id' => '1615',
                'estado_id' => '16',
                'descricao' => 'São Joaquim do Monte'
            ),
            115 =>
            array (
                'id' => '1616',
                'estado_id' => '16',
                'descricao' => 'São José da Coroa Grande'
            ),
            116 =>
            array (
                'id' => '1617',
                'estado_id' => '16',
                'descricao' => 'São José do Belmonte'
            ),
            117 =>
            array (
                'id' => '1618',
                'estado_id' => '16',
                'descricao' => 'São José do Egito'
            ),
            118 =>
            array (
                'id' => '1619',
                'estado_id' => '16',
                'descricao' => 'São Lourenço da Mata'
            ),
            119 =>
            array (
                'id' => '1620',
                'estado_id' => '16',
                'descricao' => 'São Vicente Ferrer'
            ),
            120 =>
            array (
                'id' => '1621',
                'estado_id' => '16',
                'descricao' => 'Serra Talhada'
            ),
            121 =>
            array (
                'id' => '1622',
                'estado_id' => '16',
                'descricao' => 'Serrita'
            ),
            122 =>
            array (
                'id' => '1623',
                'estado_id' => '16',
                'descricao' => 'Sertânia'
            ),
            123 =>
            array (
                'id' => '1624',
                'estado_id' => '16',
                'descricao' => 'Sirinhaém'
            ),
            124 =>
            array (
                'id' => '1625',
                'estado_id' => '16',
                'descricao' => 'Moreilândia'
            ),
            125 =>
            array (
                'id' => '1626',
                'estado_id' => '16',
                'descricao' => 'Solidão'
            ),
            126 =>
            array (
                'id' => '1627',
                'estado_id' => '16',
                'descricao' => 'Surubim'
            ),
            127 =>
            array (
                'id' => '1628',
                'estado_id' => '16',
                'descricao' => 'Tabira'
            ),
            128 =>
            array (
                'id' => '1629',
                'estado_id' => '16',
                'descricao' => 'Tacaimbó'
            ),
            129 =>
            array (
                'id' => '1630',
                'estado_id' => '16',
                'descricao' => 'Tacaratu'
            ),
            130 =>
            array (
                'id' => '1631',
                'estado_id' => '16',
                'descricao' => 'Tamandaré'
            ),
            131 =>
            array (
                'id' => '1632',
                'estado_id' => '16',
                'descricao' => 'Taquaritinga do Norte'
            ),
            132 =>
            array (
                'id' => '1633',
                'estado_id' => '16',
                'descricao' => 'Terezinha'
            ),
            133 =>
            array (
                'id' => '1634',
                'estado_id' => '16',
                'descricao' => 'Terra Nova'
            ),
            134 =>
            array (
                'id' => '1635',
                'estado_id' => '16',
                'descricao' => 'Timbaúba'
            ),
            135 =>
            array (
                'id' => '1636',
                'estado_id' => '16',
                'descricao' => 'Toritama'
            ),
            136 =>
            array (
                'id' => '1637',
                'estado_id' => '16',
                'descricao' => 'Tracunhaém'
            ),
            137 =>
            array (
                'id' => '1638',
                'estado_id' => '16',
                'descricao' => 'Trindade'
            ),
            138 =>
            array (
                'id' => '1639',
                'estado_id' => '16',
                'descricao' => 'Triunfo'
            ),
            139 =>
            array (
                'id' => '1640',
                'estado_id' => '16',
                'descricao' => 'Tupanatinga'
            ),
            140 =>
            array (
                'id' => '1641',
                'estado_id' => '16',
                'descricao' => 'Tuparetama'
            ),
            141 =>
            array (
                'id' => '1642',
                'estado_id' => '16',
                'descricao' => 'Venturosa'
            ),
            142 =>
            array (
                'id' => '1643',
                'estado_id' => '16',
                'descricao' => 'Verdejante'
            ),
            143 =>
            array (
                'id' => '1644',
                'estado_id' => '16',
                'descricao' => 'Vertente do Lério'
            ),
            144 =>
            array (
                'id' => '1645',
                'estado_id' => '16',
                'descricao' => 'Vertentes'
            ),
            145 =>
            array (
                'id' => '1646',
                'estado_id' => '16',
                'descricao' => 'Vicência'
            ),
            146 =>
            array (
                'id' => '1647',
                'estado_id' => '16',
                'descricao' => 'Vitória de Santo Antão'
            ),
            147 =>
            array (
                'id' => '1648',
                'estado_id' => '16',
                'descricao' => 'Xexéu'
            ),
            148 =>
            array (
                'id' => '1649',
                'estado_id' => '2',
                'descricao' => 'Água Branca'
            ),
            149 =>
            array (
                'id' => '1650',
                'estado_id' => '2',
                'descricao' => 'Anadia'
            ),
            150 =>
            array (
                'id' => '1651',
                'estado_id' => '2',
                'descricao' => 'Arapiraca'
            ),
            151 =>
            array (
                'id' => '1652',
                'estado_id' => '2',
                'descricao' => 'Atalaia'
            ),
            152 =>
            array (
                'id' => '1653',
                'estado_id' => '2',
                'descricao' => 'Barra de Santo Antônio'
            ),
            153 =>
            array (
                'id' => '1654',
                'estado_id' => '2',
                'descricao' => 'Barra de São Miguel'
            ),
            154 =>
            array (
                'id' => '1655',
                'estado_id' => '2',
                'descricao' => 'Batalha'
            ),
            155 =>
            array (
                'id' => '1656',
                'estado_id' => '2',
                'descricao' => 'Belém'
            ),
            156 =>
            array (
                'id' => '1657',
                'estado_id' => '2',
                'descricao' => 'Belo Monte'
            ),
            157 =>
            array (
                'id' => '1658',
                'estado_id' => '2',
                'descricao' => 'Boca da Mata'
            ),
            158 =>
            array (
                'id' => '1659',
                'estado_id' => '2',
                'descricao' => 'Branquinha'
            ),
            159 =>
            array (
                'id' => '1660',
                'estado_id' => '2',
                'descricao' => 'Cacimbinhas'
            ),
            160 =>
            array (
                'id' => '1661',
                'estado_id' => '2',
                'descricao' => 'Cajueiro'
            ),
            161 =>
            array (
                'id' => '1662',
                'estado_id' => '2',
                'descricao' => 'Campestre'
            ),
            162 =>
            array (
                'id' => '1663',
                'estado_id' => '2',
                'descricao' => 'Campo Alegre'
            ),
            163 =>
            array (
                'id' => '1664',
                'estado_id' => '2',
                'descricao' => 'Campo Grande'
            ),
            164 =>
            array (
                'id' => '1665',
                'estado_id' => '2',
                'descricao' => 'Canapi'
            ),
            165 =>
            array (
                'id' => '1666',
                'estado_id' => '2',
                'descricao' => 'Capela'
            ),
            166 =>
            array (
                'id' => '1667',
                'estado_id' => '2',
                'descricao' => 'Carneiros'
            ),
            167 =>
            array (
                'id' => '1668',
                'estado_id' => '2',
                'descricao' => 'Chã Preta'
            ),
            168 =>
            array (
                'id' => '1669',
                'estado_id' => '2',
                'descricao' => 'Coité do Nóia'
            ),
            169 =>
            array (
                'id' => '1670',
                'estado_id' => '2',
                'descricao' => 'Colônia Leopoldina'
            ),
            170 =>
            array (
                'id' => '1671',
                'estado_id' => '2',
                'descricao' => 'Coqueiro Seco'
            ),
            171 =>
            array (
                'id' => '1672',
                'estado_id' => '2',
                'descricao' => 'Coruripe'
            ),
            172 =>
            array (
                'id' => '1673',
                'estado_id' => '2',
                'descricao' => 'Craíbas'
            ),
            173 =>
            array (
                'id' => '1674',
                'estado_id' => '2',
                'descricao' => 'Delmiro Gouveia'
            ),
            174 =>
            array (
                'id' => '1675',
                'estado_id' => '2',
                'descricao' => 'Dois Riachos'
            ),
            175 =>
            array (
                'id' => '1676',
                'estado_id' => '2',
                'descricao' => 'Estrela de Alagoas'
            ),
            176 =>
            array (
                'id' => '1677',
                'estado_id' => '2',
                'descricao' => 'Feira Grande'
            ),
            177 =>
            array (
                'id' => '1678',
                'estado_id' => '2',
                'descricao' => 'Feliz Deserto'
            ),
            178 =>
            array (
                'id' => '1679',
                'estado_id' => '2',
                'descricao' => 'Flexeiras'
            ),
            179 =>
            array (
                'id' => '1680',
                'estado_id' => '2',
                'descricao' => 'Girau do Ponciano'
            ),
            180 =>
            array (
                'id' => '1681',
                'estado_id' => '2',
                'descricao' => 'Ibateguara'
            ),
            181 =>
            array (
                'id' => '1682',
                'estado_id' => '2',
                'descricao' => 'Igaci'
            ),
            182 =>
            array (
                'id' => '1683',
                'estado_id' => '2',
                'descricao' => 'Igreja Nova'
            ),
            183 =>
            array (
                'id' => '1684',
                'estado_id' => '2',
                'descricao' => 'Inhapi'
            ),
            184 =>
            array (
                'id' => '1685',
                'estado_id' => '2',
                'descricao' => 'Jacaré dos Homens'
            ),
            185 =>
            array (
                'id' => '1686',
                'estado_id' => '2',
                'descricao' => 'Jacuípe'
            ),
            186 =>
            array (
                'id' => '1687',
                'estado_id' => '2',
                'descricao' => 'Japaratinga'
            ),
            187 =>
            array (
                'id' => '1688',
                'estado_id' => '2',
                'descricao' => 'Jaramataia'
            ),
            188 =>
            array (
                'id' => '1689',
                'estado_id' => '2',
                'descricao' => 'Jequiá da Praia'
            ),
            189 =>
            array (
                'id' => '1690',
                'estado_id' => '2',
                'descricao' => 'Joaquim Gomes'
            ),
            190 =>
            array (
                'id' => '1691',
                'estado_id' => '2',
                'descricao' => 'Jundiá'
            ),
            191 =>
            array (
                'id' => '1692',
                'estado_id' => '2',
                'descricao' => 'Junqueiro'
            ),
            192 =>
            array (
                'id' => '1693',
                'estado_id' => '2',
                'descricao' => 'Lagoa da Canoa'
            ),
            193 =>
            array (
                'id' => '1694',
                'estado_id' => '2',
                'descricao' => 'Limoeiro de Anadia'
            ),
            194 =>
            array (
                'id' => '1695',
                'estado_id' => '2',
                'descricao' => 'Maceió'
            ),
            195 =>
            array (
                'id' => '1696',
                'estado_id' => '2',
                'descricao' => 'Major Isidoro'
            ),
            196 =>
            array (
                'id' => '1697',
                'estado_id' => '2',
                'descricao' => 'Maragogi'
            ),
            197 =>
            array (
                'id' => '1698',
                'estado_id' => '2',
                'descricao' => 'Maravilha'
            ),
            198 =>
            array (
                'id' => '1699',
                'estado_id' => '2',
                'descricao' => 'Marechal Deodoro'
            ),
            199 =>
            array (
                'id' => '1700',
                'estado_id' => '2',
                'descricao' => 'Maribondo'
            ),
            200 =>
            array (
                'id' => '1701',
                'estado_id' => '2',
                'descricao' => 'Mar Vermelho'
            ),
            201 =>
            array (
                'id' => '1702',
                'estado_id' => '2',
                'descricao' => 'Mata Grande'
            ),
            202 =>
            array (
                'id' => '1703',
                'estado_id' => '2',
                'descricao' => 'Matriz de Camaragibe'
            ),
            203 =>
            array (
                'id' => '1704',
                'estado_id' => '2',
                'descricao' => 'Messias'
            ),
            204 =>
            array (
                'id' => '1705',
                'estado_id' => '2',
                'descricao' => 'Minador do Negrão'
            ),
            205 =>
            array (
                'id' => '1706',
                'estado_id' => '2',
                'descricao' => 'Monteirópolis'
            ),
            206 =>
            array (
                'id' => '1707',
                'estado_id' => '2',
                'descricao' => 'Murici'
            ),
            207 =>
            array (
                'id' => '1708',
                'estado_id' => '2',
                'descricao' => 'Novo Lino'
            ),
            208 =>
            array (
                'id' => '1709',
                'estado_id' => '2',
                'descricao' => 'Olho D\'água das Flores'
            ),
            209 =>
            array (
                'id' => '1710',
                'estado_id' => '2',
                'descricao' => 'Olho D\'água do Casado'
            ),
            210 =>
            array (
                'id' => '1711',
                'estado_id' => '2',
                'descricao' => 'Olho D\'água Grande'
            ),
            211 =>
            array (
                'id' => '1712',
                'estado_id' => '2',
                'descricao' => 'Olivença'
            ),
            212 =>
            array (
                'id' => '1713',
                'estado_id' => '2',
                'descricao' => 'Ouro Branco'
            ),
            213 =>
            array (
                'id' => '1714',
                'estado_id' => '2',
                'descricao' => 'Palestina'
            ),
            214 =>
            array (
                'id' => '1715',
                'estado_id' => '2',
                'descricao' => 'Palmeira dos Índios'
            ),
            215 =>
            array (
                'id' => '1716',
                'estado_id' => '2',
                'descricao' => 'Pão de Açúcar'
            ),
            216 =>
            array (
                'id' => '1717',
                'estado_id' => '2',
                'descricao' => 'Pariconha'
            ),
            217 =>
            array (
                'id' => '1718',
                'estado_id' => '2',
                'descricao' => 'Paripueira'
            ),
            218 =>
            array (
                'id' => '1719',
                'estado_id' => '2',
                'descricao' => 'Passo de Camaragibe'
            ),
            219 =>
            array (
                'id' => '1720',
                'estado_id' => '2',
                'descricao' => 'Paulo Jacinto'
            ),
            220 =>
            array (
                'id' => '1721',
                'estado_id' => '2',
                'descricao' => 'Penedo'
            ),
            221 =>
            array (
                'id' => '1722',
                'estado_id' => '2',
                'descricao' => 'Piaçabuçu'
            ),
            222 =>
            array (
                'id' => '1723',
                'estado_id' => '2',
                'descricao' => 'Pilar'
            ),
            223 =>
            array (
                'id' => '1724',
                'estado_id' => '2',
                'descricao' => 'Pindoba'
            ),
            224 =>
            array (
                'id' => '1725',
                'estado_id' => '2',
                'descricao' => 'Piranhas'
            ),
            225 =>
            array (
                'id' => '1726',
                'estado_id' => '2',
                'descricao' => 'Poço das Trincheiras'
            ),
            226 =>
            array (
                'id' => '1727',
                'estado_id' => '2',
                'descricao' => 'Porto Calvo'
            ),
            227 =>
            array (
                'id' => '1728',
                'estado_id' => '2',
                'descricao' => 'Porto de Pedras'
            ),
            228 =>
            array (
                'id' => '1729',
                'estado_id' => '2',
                'descricao' => 'Porto Real do Colégio'
            ),
            229 =>
            array (
                'id' => '1730',
                'estado_id' => '2',
                'descricao' => 'Quebrangulo'
            ),
            230 =>
            array (
                'id' => '1731',
                'estado_id' => '2',
                'descricao' => 'Rio Largo'
            ),
            231 =>
            array (
                'id' => '1732',
                'estado_id' => '2',
                'descricao' => 'Roteiro'
            ),
            232 =>
            array (
                'id' => '1733',
                'estado_id' => '2',
                'descricao' => 'Santa Luzia do Norte'
            ),
            233 =>
            array (
                'id' => '1734',
                'estado_id' => '2',
                'descricao' => 'Santana do Ipanema'
            ),
            234 =>
            array (
                'id' => '1735',
                'estado_id' => '2',
                'descricao' => 'Santana do Mundaú'
            ),
            235 =>
            array (
                'id' => '1736',
                'estado_id' => '2',
                'descricao' => 'São Brás'
            ),
            236 =>
            array (
                'id' => '1737',
                'estado_id' => '2',
                'descricao' => 'São José da Laje'
            ),
            237 =>
            array (
                'id' => '1738',
                'estado_id' => '2',
                'descricao' => 'São José da Tapera'
            ),
            238 =>
            array (
                'id' => '1739',
                'estado_id' => '2',
                'descricao' => 'São Luís do Quitunde'
            ),
            239 =>
            array (
                'id' => '1740',
                'estado_id' => '2',
                'descricao' => 'São Miguel dos Campos'
            ),
            240 =>
            array (
                'id' => '1741',
                'estado_id' => '2',
                'descricao' => 'São Miguel dos Milagres'
            ),
            241 =>
            array (
                'id' => '1742',
                'estado_id' => '2',
                'descricao' => 'São Sebastião'
            ),
            242 =>
            array (
                'id' => '1743',
                'estado_id' => '2',
                'descricao' => 'Satuba'
            ),
            243 =>
            array (
                'id' => '1744',
                'estado_id' => '2',
                'descricao' => 'Senador Rui Palmeira'
            ),
            244 =>
            array (
                'id' => '1745',
                'estado_id' => '2',
                'descricao' => 'Tanque D\'arca'
            ),
            245 =>
            array (
                'id' => '1746',
                'estado_id' => '2',
                'descricao' => 'Taquarana'
            ),
            246 =>
            array (
                'id' => '1747',
                'estado_id' => '2',
                'descricao' => 'Teotônio Vilela'
            ),
            247 =>
            array (
                'id' => '1748',
                'estado_id' => '2',
                'descricao' => 'Traipu'
            ),
            248 =>
            array (
                'id' => '1749',
                'estado_id' => '2',
                'descricao' => 'União dos Palmares'
            ),
            249 =>
            array (
                'id' => '1750',
                'estado_id' => '2',
                'descricao' => 'Viçosa'
            ),
            250 =>
            array (
                'id' => '1751',
                'estado_id' => '25',
                'descricao' => 'Amparo de São Francisco'
            ),
            251 =>
            array (
                'id' => '1752',
                'estado_id' => '25',
                'descricao' => 'Aquidabã'
            ),
            252 =>
            array (
                'id' => '1753',
                'estado_id' => '25',
                'descricao' => 'Aracaju',
            ),
            253 =>
            array (
                'id' => '1754',
                'estado_id' => '25',
                'descricao' => 'Arauá'
            ),
            254 =>
            array (
                'id' => '1755',
                'estado_id' => '25',
                'descricao' => 'Areia Branca'
            ),
            255 =>
            array (
                'id' => '1756',
                'estado_id' => '25',
                'descricao' => 'Barra dos Coqueiros'
            ),
            256 =>
            array (
                'id' => '1757',
                'estado_id' => '25',
                'descricao' => 'Boquim'
            ),
            257 =>
            array (
                'id' => '1758',
                'estado_id' => '25',
                'descricao' => 'Brejo Grande'
            ),
            258 =>
            array (
                'id' => '1759',
                'estado_id' => '25',
                'descricao' => 'Campo do Brito'
            ),
            259 =>
            array (
                'id' => '1760',
                'estado_id' => '25',
                'descricao' => 'Canhoba'
            ),
            260 =>
            array (
                'id' => '1761',
                'estado_id' => '25',
                'descricao' => 'Canindé de São Francisco'
            ),
            261 =>
            array (
                'id' => '1762',
                'estado_id' => '25',
                'descricao' => 'Capela'
            ),
            262 =>
            array (
                'id' => '1763',
                'estado_id' => '25',
                'descricao' => 'Carira'
            ),
            263 =>
            array (
                'id' => '1764',
                'estado_id' => '25',
                'descricao' => 'Carmópolis'
            ),
            264 =>
            array (
                'id' => '1765',
                'estado_id' => '25',
                'descricao' => 'Cedro de São João'
            ),
            265 =>
            array (
                'id' => '1766',
                'estado_id' => '25',
                'descricao' => 'Cristinápolis'
            ),
            266 =>
            array (
                'id' => '1767',
                'estado_id' => '25',
                'descricao' => 'Cumbe'
            ),
            267 =>
            array (
                'id' => '1768',
                'estado_id' => '25',
                'descricao' => 'Divina Pastora'
            ),
            268 =>
            array (
                'id' => '1769',
                'estado_id' => '25',
                'descricao' => 'Estância'
            ),
            269 =>
            array (
                'id' => '1770',
                'estado_id' => '25',
                'descricao' => 'Feira Nova'
            ),
            270 =>
            array (
                'id' => '1771',
                'estado_id' => '25',
                'descricao' => 'Frei Paulo'
            ),
            271 =>
            array (
                'id' => '1772',
                'estado_id' => '25',
                'descricao' => 'Gararu'
            ),
            272 =>
            array (
                'id' => '1773',
                'estado_id' => '25',
                'descricao' => 'General Maynard'
            ),
            273 =>
            array (
                'id' => '1774',
                'estado_id' => '25',
                'descricao' => 'Gracho Cardoso'
            ),
            274 =>
            array (
                'id' => '1775',
                'estado_id' => '25',
                'descricao' => 'Ilha das Flores'
            ),
            275 =>
            array (
                'id' => '1776',
                'estado_id' => '25',
                'descricao' => 'Indiaroba'
            ),
            276 =>
            array (
                'id' => '1777',
                'estado_id' => '25',
                'descricao' => 'Itabaiana'
            ),
            277 =>
            array (
                'id' => '1778',
                'estado_id' => '25',
                'descricao' => 'Itabaianinha'
            ),
            278 =>
            array (
                'id' => '1779',
                'estado_id' => '25',
                'descricao' => 'Itabi'
            ),
            279 =>
            array (
                'id' => '1780',
                'estado_id' => '25',
                'descricao' => 'Itaporanga D\'ajuda'
            ),
            280 =>
            array (
                'id' => '1781',
                'estado_id' => '25',
                'descricao' => 'Japaratuba'
            ),
            281 =>
            array (
                'id' => '1782',
                'estado_id' => '25',
                'descricao' => 'Japoatã'
            ),
            282 =>
            array (
                'id' => '1783',
                'estado_id' => '25',
                'descricao' => 'Lagarto'
            ),
            283 =>
            array (
                'id' => '1784',
                'estado_id' => '25',
                'descricao' => 'Laranjeiras'
            ),
            284 =>
            array (
                'id' => '1785',
                'estado_id' => '25',
                'descricao' => 'Macambira'
            ),
            285 =>
            array (
                'id' => '1786',
                'estado_id' => '25',
                'descricao' => 'Malhada dos Bois'
            ),
            286 =>
            array (
                'id' => '1787',
                'estado_id' => '25',
                'descricao' => 'Malhador'
            ),
            287 =>
            array (
                'id' => '1788',
                'estado_id' => '25',
                'descricao' => 'Maruim'
            ),
            288 =>
            array (
                'id' => '1789',
                'estado_id' => '25',
                'descricao' => 'Moita Bonita'
            ),
            289 =>
            array (
                'id' => '1790',
                'estado_id' => '25',
                'descricao' => 'Monte Alegre de Sergipe'
            ),
            290 =>
            array (
                'id' => '1791',
                'estado_id' => '25',
                'descricao' => 'Muribeca'
            ),
            291 =>
            array (
                'id' => '1792',
                'estado_id' => '25',
                'descricao' => 'Neópolis'
            ),
            292 =>
            array (
                'id' => '1793',
                'estado_id' => '25',
                'descricao' => 'Nossa Senhora Aparecida'
            ),
            293 =>
            array (
                'id' => '1794',
                'estado_id' => '25',
                'descricao' => 'Nossa Senhora da Glória'
            ),
            294 =>
            array (
                'id' => '1795',
                'estado_id' => '25',
                'descricao' => 'Nossa Senhora das Dores'
            ),
            295 =>
            array (
                'id' => '1796',
                'estado_id' => '25',
                'descricao' => 'Nossa Senhora de Lourdes'
            ),
            296 =>
            array (
                'id' => '1797',
                'estado_id' => '25',
                'descricao' => 'Nossa Senhora do Socorro'
            ),
            297 =>
            array (
                'id' => '1798',
                'estado_id' => '25',
                'descricao' => 'Pacatuba'
            ),
            298 =>
            array (
                'id' => '1799',
                'estado_id' => '25',
                'descricao' => 'Pedra Mole'
            ),
            299 =>
            array (
                'id' => '1800',
                'estado_id' => '25',
                'descricao' => 'Pedrinhas'
            ),
            300 =>
            array (
                'id' => '1801',
                'estado_id' => '25',
                'descricao' => 'Pinhão'
            ),
            301 =>
            array (
                'id' => '1802',
                'estado_id' => '25',
                'descricao' => 'Pirambu'
            ),
            302 =>
            array (
                'id' => '1803',
                'estado_id' => '25',
                'descricao' => 'Poço Redondo'
            ),
            303 =>
            array (
                'id' => '1804',
                'estado_id' => '25',
                'descricao' => 'Poço Verde'
            ),
            304 =>
            array (
                'id' => '1805',
                'estado_id' => '25',
                'descricao' => 'Porto da Folha'
            ),
            305 =>
            array (
                'id' => '1806',
                'estado_id' => '25',
                'descricao' => 'Propriá'
            ),
            306 =>
            array (
                'id' => '1807',
                'estado_id' => '25',
                'descricao' => 'Riachão do Dantas'
            ),
            307 =>
            array (
                'id' => '1808',
                'estado_id' => '25',
                'descricao' => 'Riachuelo'
            ),
            308 =>
            array (
                'id' => '1809',
                'estado_id' => '25',
                'descricao' => 'Ribeirópolis'
            ),
            309 =>
            array (
                'id' => '1810',
                'estado_id' => '25',
                'descricao' => 'Rosário do Catete'
            ),
            310 =>
            array (
                'id' => '1811',
                'estado_id' => '25',
                'descricao' => 'Salgado'
            ),
            311 =>
            array (
                'id' => '1812',
                'estado_id' => '25',
                'descricao' => 'Santa Luzia do Itanhy'
            ),
            312 =>
            array (
                'id' => '1813',
                'estado_id' => '25',
                'descricao' => 'Santana do São Francisco'
            ),
            313 =>
            array (
                'id' => '1814',
                'estado_id' => '25',
                'descricao' => 'Santa Rosa de Lima'
            ),
            314 =>
            array (
                'id' => '1815',
                'estado_id' => '25',
                'descricao' => 'Santo Amaro das Brotas'
            ),
            315 =>
            array (
                'id' => '1816',
                'estado_id' => '25',
                'descricao' => 'São Cristóvão'
            ),
            316 =>
            array (
                'id' => '1817',
                'estado_id' => '25',
                'descricao' => 'São Domingos'
            ),
            317 =>
            array (
                'id' => '1818',
                'estado_id' => '25',
                'descricao' => 'São Francisco'
            ),
            318 =>
            array (
                'id' => '1819',
                'estado_id' => '25',
                'descricao' => 'São Miguel do Aleixo'
            ),
            319 =>
            array (
                'id' => '1820',
                'estado_id' => '25',
                'descricao' => 'Simão Dias'
            ),
            320 =>
            array (
                'id' => '1821',
                'estado_id' => '25',
                'descricao' => 'Siriri'
            ),
            321 =>
            array (
                'id' => '1822',
                'estado_id' => '25',
                'descricao' => 'Telha'
            ),
            322 =>
            array (
                'id' => '1823',
                'estado_id' => '25',
                'descricao' => 'Tobias Barreto'
            ),
            323 =>
            array (
                'id' => '1824',
                'estado_id' => '25',
                'descricao' => 'Tomar do Geru'
            ),
            324 =>
            array (
                'id' => '1825',
                'estado_id' => '25',
                'descricao' => 'Umbaúba'
            ),
            325 =>
            array (
                'id' => '1826',
                'estado_id' => '5',
                'descricao' => 'Abaíra'
            ),
            326 =>
            array (
                'id' => '1827',
                'estado_id' => '5',
                'descricao' => 'Abaré'
            ),
            327 =>
            array (
                'id' => '1828',
                'estado_id' => '5',
                'descricao' => 'Acajutiba'
            ),
            328 =>
            array (
                'id' => '1829',
                'estado_id' => '5',
                'descricao' => 'Adustina'
            ),
            329 =>
            array (
                'id' => '1830',
                'estado_id' => '5',
                'descricao' => 'Água Fria'
            ),
            330 =>
            array (
                'id' => '1831',
                'estado_id' => '5',
                'descricao' => 'Érico Cardoso'
            ),
            331 =>
            array (
                'id' => '1832',
                'estado_id' => '5',
                'descricao' => 'Aiquara'
            ),
            332 =>
            array (
                'id' => '1833',
                'estado_id' => '5',
                'descricao' => 'Alagoinhas'
            ),
            333 =>
            array (
                'id' => '1834',
                'estado_id' => '5',
                'descricao' => 'Alcobaça'
            ),
            334 =>
            array (
                'id' => '1835',
                'estado_id' => '5',
                'descricao' => 'Almadina'
            ),
            335 =>
            array (
                'id' => '1836',
                'estado_id' => '5',
                'descricao' => 'Amargosa'
            ),
            336 =>
            array (
                'id' => '1837',
                'estado_id' => '5',
                'descricao' => 'Amélia Rodrigues'
            ),
            337 =>
            array (
                'id' => '1838',
                'estado_id' => '5',
                'descricao' => 'América Dourada'
            ),
            338 =>
            array (
                'id' => '1839',
                'estado_id' => '5',
                'descricao' => 'Anagé'
            ),
            339 =>
            array (
                'id' => '1840',
                'estado_id' => '5',
                'descricao' => 'Andaraí'
            ),
            340 =>
            array (
                'id' => '1841',
                'estado_id' => '5',
                'descricao' => 'Andorinha'
            ),
            341 =>
            array (
                'id' => '1842',
                'estado_id' => '5',
                'descricao' => 'Angical'
            ),
            342 =>
            array (
                'id' => '1843',
                'estado_id' => '5',
                'descricao' => 'Anguera'
            ),
            343 =>
            array (
                'id' => '1844',
                'estado_id' => '5',
                'descricao' => 'Antas'
            ),
            344 =>
            array (
                'id' => '1845',
                'estado_id' => '5',
                'descricao' => 'Antônio Cardoso'
            ),
            345 =>
            array (
                'id' => '1846',
                'estado_id' => '5',
                'descricao' => 'Antônio Gonçalves'
            ),
            346 =>
            array (
                'id' => '1847',
                'estado_id' => '5',
                'descricao' => 'Aporá'
            ),
            347 =>
            array (
                'id' => '1848',
                'estado_id' => '5',
                'descricao' => 'Apuarema'
            ),
            348 =>
            array (
                'id' => '1849',
                'estado_id' => '5',
                'descricao' => 'Aracatu'
            ),
            349 =>
            array (
                'id' => '1850',
                'estado_id' => '5',
                'descricao' => 'Araças'
            ),
            350 =>
            array (
                'id' => '1851',
                'estado_id' => '5',
                'descricao' => 'Araci'
            ),
            351 =>
            array (
                'id' => '1852',
                'estado_id' => '5',
                'descricao' => 'Aramari'
            ),
            352 =>
            array (
                'id' => '1853',
                'estado_id' => '5',
                'descricao' => 'Arataca'
            ),
            353 =>
            array (
                'id' => '1854',
                'estado_id' => '5',
                'descricao' => 'Aratuípe'
            ),
            354 =>
            array (
                'id' => '1855',
                'estado_id' => '5',
                'descricao' => 'Aurelino Leal'
            ),
            355 =>
            array (
                'id' => '1856',
                'estado_id' => '5',
                'descricao' => 'Baianópolis'
            ),
            356 =>
            array (
                'id' => '1857',
                'estado_id' => '5',
                'descricao' => 'Baixa Grande'
            ),
            357 =>
            array (
                'id' => '1858',
                'estado_id' => '5',
                'descricao' => 'Banzaê'
            ),
            358 =>
            array (
                'id' => '1859',
                'estado_id' => '5',
                'descricao' => 'Barra'
            ),
            359 =>
            array (
                'id' => '1860',
                'estado_id' => '5',
                'descricao' => 'Barra da Estiva'
            ),
            360 =>
            array (
                'id' => '1861',
                'estado_id' => '5',
                'descricao' => 'Barra do Choça'
            ),
            361 =>
            array (
                'id' => '1862',
                'estado_id' => '5',
                'descricao' => 'Barra do Mendes'
            ),
            362 =>
            array (
                'id' => '1863',
                'estado_id' => '5',
                'descricao' => 'Barra do Rocha'
            ),
            363 =>
            array (
                'id' => '1864',
                'estado_id' => '5',
                'descricao' => 'Barreiras'
            ),
            364 =>
            array (
                'id' => '1865',
                'estado_id' => '5',
                'descricao' => 'Barro Alto'
            ),
            365 =>
            array (
                'id' => '1866',
                'estado_id' => '5',
                'descricao' => 'Barrocas'
            ),
            366 =>
            array (
                'id' => '1867',
                'estado_id' => '5',
                'descricao' => 'Barro Preto'
            ),
            367 =>
            array (
                'id' => '1868',
                'estado_id' => '5',
                'descricao' => 'Belmonte'
            ),
            368 =>
            array (
                'id' => '1869',
                'estado_id' => '5',
                'descricao' => 'Belo Campo'
            ),
            369 =>
            array (
                'id' => '1870',
                'estado_id' => '5',
                'descricao' => 'Biritinga'
            ),
            370 =>
            array (
                'id' => '1871',
                'estado_id' => '5',
                'descricao' => 'Boa Nova'
            ),
            371 =>
            array (
                'id' => '1872',
                'estado_id' => '5',
                'descricao' => 'Boa Vista do Tupim'
            ),
            372 =>
            array (
                'id' => '1873',
                'estado_id' => '5',
                'descricao' => 'Bom Jesus da Lapa'
            ),
            373 =>
            array (
                'id' => '1874',
                'estado_id' => '5',
                'descricao' => 'Bom Jesus da Serra'
            ),
            374 =>
            array (
                'id' => '1875',
                'estado_id' => '5',
                'descricao' => 'Boninal'
            ),
            375 =>
            array (
                'id' => '1876',
                'estado_id' => '5',
                'descricao' => 'Bonito'
            ),
            376 =>
            array (
                'id' => '1877',
                'estado_id' => '5',
                'descricao' => 'Boquira'
            ),
            377 =>
            array (
                'id' => '1878',
                'estado_id' => '5',
                'descricao' => 'Botuporã'
            ),
            378 =>
            array (
                'id' => '1879',
                'estado_id' => '5',
                'descricao' => 'Brejões'
            ),
            379 =>
            array (
                'id' => '1880',
                'estado_id' => '5',
                'descricao' => 'Brejolândia'
            ),
            380 =>
            array (
                'id' => '1881',
                'estado_id' => '5',
                'descricao' => 'Brotas de Macaúbas'
            ),
            381 =>
            array (
                'id' => '1882',
                'estado_id' => '5',
                'descricao' => 'Brumado'
            ),
            382 =>
            array (
                'id' => '1883',
                'estado_id' => '5',
                'descricao' => 'Buerarema'
            ),
            383 =>
            array (
                'id' => '1884',
                'estado_id' => '5',
                'descricao' => 'Buritirama'
            ),
            384 =>
            array (
                'id' => '1885',
                'estado_id' => '5',
                'descricao' => 'Caatiba'
            ),
            385 =>
            array (
                'id' => '1886',
                'estado_id' => '5',
                'descricao' => 'Cabaceiras do Paraguaçu'
            ),
            386 =>
            array (
                'id' => '1887',
                'estado_id' => '5',
                'descricao' => 'Cachoeira'
            ),
            387 =>
            array (
                'id' => '1888',
                'estado_id' => '5',
                'descricao' => 'Caculé'
            ),
            388 =>
            array (
                'id' => '1889',
                'estado_id' => '5',
                'descricao' => 'Caém'
            ),
            389 =>
            array (
                'id' => '1890',
                'estado_id' => '5',
                'descricao' => 'Caetanos'
            ),
            390 =>
            array (
                'id' => '1891',
                'estado_id' => '5',
                'descricao' => 'Caetité'
            ),
            391 =>
            array (
                'id' => '1892',
                'estado_id' => '5',
                'descricao' => 'Cafarnaum'
            ),
            392 =>
            array (
                'id' => '1893',
                'estado_id' => '5',
                'descricao' => 'Cairu'
            ),
            393 =>
            array (
                'id' => '1894',
                'estado_id' => '5',
                'descricao' => 'Caldeirão Grande'
            ),
            394 =>
            array (
                'id' => '1895',
                'estado_id' => '5',
                'descricao' => 'Camacan'
            ),
            395 =>
            array (
                'id' => '1896',
                'estado_id' => '5',
                'descricao' => 'Camaçari'
            ),
            396 =>
            array (
                'id' => '1897',
                'estado_id' => '5',
                'descricao' => 'Camamu'
            ),
            397 =>
            array (
                'id' => '1898',
                'estado_id' => '5',
                'descricao' => 'Campo Alegre de Lourdes'
            ),
            398 =>
            array (
                'id' => '1899',
                'estado_id' => '5',
                'descricao' => 'Campo Formoso'
            ),
            399 =>
            array (
                'id' => '1900',
                'estado_id' => '5',
                'descricao' => 'Canápolis'
            ),
            400 =>
            array (
                'id' => '1901',
                'estado_id' => '5',
                'descricao' => 'Canarana'
            ),
            401 =>
            array (
                'id' => '1902',
                'estado_id' => '5',
                'descricao' => 'Canavieiras'
            ),
            402 =>
            array (
                'id' => '1903',
                'estado_id' => '5',
                'descricao' => 'Candeal'
            ),
            403 =>
            array (
                'id' => '1904',
                'estado_id' => '5',
                'descricao' => 'Candeias'
            ),
            404 =>
            array (
                'id' => '1905',
                'estado_id' => '5',
                'descricao' => 'Candiba'
            ),
            405 =>
            array (
                'id' => '1906',
                'estado_id' => '5',
                'descricao' => 'Cândido Sales'
            ),
            406 =>
            array (
                'id' => '1907',
                'estado_id' => '5',
                'descricao' => 'Cansanção'
            ),
            407 =>
            array (
                'id' => '1908',
                'estado_id' => '5',
                'descricao' => 'Canudos'
            ),
            408 =>
            array (
                'id' => '1909',
                'estado_id' => '5',
                'descricao' => 'Capela do Alto Alegre'
            ),
            409 =>
            array (
                'id' => '1910',
                'estado_id' => '5',
                'descricao' => 'Capim Grosso'
            ),
            410 =>
            array (
                'id' => '1911',
                'estado_id' => '5',
                'descricao' => 'Caraíbas'
            ),
            411 =>
            array (
                'id' => '1912',
                'estado_id' => '5',
                'descricao' => 'Caravelas'
            ),
            412 =>
            array (
                'id' => '1913',
                'estado_id' => '5',
                'descricao' => 'Cardeal da Silva'
            ),
            413 =>
            array (
                'id' => '1914',
                'estado_id' => '5',
                'descricao' => 'Carinhanha'
            ),
            414 =>
            array (
                'id' => '1915',
                'estado_id' => '5',
                'descricao' => 'Casa Nova'
            ),
            415 =>
            array (
                'id' => '1916',
                'estado_id' => '5',
                'descricao' => 'Castro Alves'
            ),
            416 =>
            array (
                'id' => '1917',
                'estado_id' => '5',
                'descricao' => 'Catolândia'
            ),
            417 =>
            array (
                'id' => '1918',
                'estado_id' => '5',
                'descricao' => 'Catu'
            ),
            418 =>
            array (
                'id' => '1919',
                'estado_id' => '5',
                'descricao' => 'Caturama'
            ),
            419 =>
            array (
                'id' => '1920',
                'estado_id' => '5',
                'descricao' => 'Central'
            ),
            420 =>
            array (
                'id' => '1921',
                'estado_id' => '5',
                'descricao' => 'Chorrochó'
            ),
            421 =>
            array (
                'id' => '1922',
                'estado_id' => '5',
                'descricao' => 'Cícero Dantas'
            ),
            422 =>
            array (
                'id' => '1923',
                'estado_id' => '5',
                'descricao' => 'Cipó'
            ),
            423 =>
            array (
                'id' => '1924',
                'estado_id' => '5',
                'descricao' => 'Coaraci'
            ),
            424 =>
            array (
                'id' => '1925',
                'estado_id' => '5',
                'descricao' => 'Cocos'
            ),
            425 =>
            array (
                'id' => '1926',
                'estado_id' => '5',
                'descricao' => 'Conceição da Feira'
            ),
            426 =>
            array (
                'id' => '1927',
                'estado_id' => '5',
                'descricao' => 'Conceição do Almeida'
            ),
            427 =>
            array (
                'id' => '1928',
                'estado_id' => '5',
                'descricao' => 'Conceição do Coité'
            ),
            428 =>
            array (
                'id' => '1929',
                'estado_id' => '5',
                'descricao' => 'Conceição do Jacuípe'
            ),
            429 =>
            array (
                'id' => '1930',
                'estado_id' => '5',
                'descricao' => 'Conde'
            ),
            430 =>
            array (
                'id' => '1931',
                'estado_id' => '5',
                'descricao' => 'Condeúba'
            ),
            431 =>
            array (
                'id' => '1932',
                'estado_id' => '5',
                'descricao' => 'Contendas do Sincorá'
            ),
            432 =>
            array (
                'id' => '1933',
                'estado_id' => '5',
                'descricao' => 'Coração de Maria'
            ),
            433 =>
            array (
                'id' => '1934',
                'estado_id' => '5',
                'descricao' => 'Cordeiros'
            ),
            434 =>
            array (
                'id' => '1935',
                'estado_id' => '5',
                'descricao' => 'Coribe'
            ),
            435 =>
            array (
                'id' => '1936',
                'estado_id' => '5',
                'descricao' => 'Coronel João Sá'
            ),
            436 =>
            array (
                'id' => '1937',
                'estado_id' => '5',
                'descricao' => 'Correntina'
            ),
            437 =>
            array (
                'id' => '1938',
                'estado_id' => '5',
                'descricao' => 'Cotegipe'
            ),
            438 =>
            array (
                'id' => '1939',
                'estado_id' => '5',
                'descricao' => 'Cravolândia'
            ),
            439 =>
            array (
                'id' => '1940',
                'estado_id' => '5',
                'descricao' => 'Crisópolis'
            ),
            440 =>
            array (
                'id' => '1941',
                'estado_id' => '5',
                'descricao' => 'Cristópolis'
            ),
            441 =>
            array (
                'id' => '1942',
                'estado_id' => '5',
                'descricao' => 'Cruz das Almas'
            ),
            442 =>
            array (
                'id' => '1943',
                'estado_id' => '5',
                'descricao' => 'Curaçá'
            ),
            443 =>
            array (
                'id' => '1944',
                'estado_id' => '5',
                'descricao' => 'Dário Meira'
            ),
            444 =>
            array (
                'id' => '1945',
                'estado_id' => '5',
                'descricao' => 'Dias D\'ávila'
            ),
            445 =>
            array (
                'id' => '1946',
                'estado_id' => '5',
                'descricao' => 'Dom Basílio'
            ),
            446 =>
            array (
                'id' => '1947',
                'estado_id' => '5',
                'descricao' => 'Dom Macedo Costa'
            ),
            447 =>
            array (
                'id' => '1948',
                'estado_id' => '5',
                'descricao' => 'Elísio Medrado'
            ),
            448 =>
            array (
                'id' => '1949',
                'estado_id' => '5',
                'descricao' => 'Encruzilhada'
            ),
            449 =>
            array (
                'id' => '1950',
                'estado_id' => '5',
                'descricao' => 'Entre Rios'
            ),
            450 =>
            array (
                'id' => '1951',
                'estado_id' => '5',
                'descricao' => 'Esplanada'
            ),
            451 =>
            array (
                'id' => '1952',
                'estado_id' => '5',
                'descricao' => 'Euclides da Cunha'
            ),
            452 =>
            array (
                'id' => '1953',
                'estado_id' => '5',
                'descricao' => 'Eunápolis'
            ),
            453 =>
            array (
                'id' => '1954',
                'estado_id' => '5',
                'descricao' => 'Fátima'
            ),
            454 =>
            array (
                'id' => '1955',
                'estado_id' => '5',
                'descricao' => 'Feira da Mata'
            ),
            455 =>
            array (
                'id' => '1956',
                'estado_id' => '5',
                'descricao' => 'Feira de Santana'
            ),
            456 =>
            array (
                'id' => '1957',
                'estado_id' => '5',
                'descricao' => 'Filadélfia'
            ),
            457 =>
            array (
                'id' => '1958',
                'estado_id' => '5',
                'descricao' => 'Firmino Alves'
            ),
            458 =>
            array (
                'id' => '1959',
                'estado_id' => '5',
                'descricao' => 'Floresta Azul'
            ),
            459 =>
            array (
                'id' => '1960',
                'estado_id' => '5',
                'descricao' => 'Formosa do Rio Preto'
            ),
            460 =>
            array (
                'id' => '1961',
                'estado_id' => '5',
                'descricao' => 'Gandu'
            ),
            461 =>
            array (
                'id' => '1962',
                'estado_id' => '5',
                'descricao' => 'Gavião'
            ),
            462 =>
            array (
                'id' => '1963',
                'estado_id' => '5',
                'descricao' => 'Gentio do Ouro'
            ),
            463 =>
            array (
                'id' => '1964',
                'estado_id' => '5',
                'descricao' => 'Glória'
            ),
            464 =>
            array (
                'id' => '1965',
                'estado_id' => '5',
                'descricao' => 'Gongogi'
            ),
            465 =>
            array (
                'id' => '1966',
                'estado_id' => '5',
                'descricao' => 'Governador Mangabeira'
            ),
            466 =>
            array (
                'id' => '1967',
                'estado_id' => '5',
                'descricao' => 'Guajeru'
            ),
            467 =>
            array (
                'id' => '1968',
                'estado_id' => '5',
                'descricao' => 'Guanambi'
            ),
            468 =>
            array (
                'id' => '1969',
                'estado_id' => '5',
                'descricao' => 'Guaratinga'
            ),
            469 =>
            array (
                'id' => '1970',
                'estado_id' => '5',
                'descricao' => 'Heliópolis'
            ),
            470 =>
            array (
                'id' => '1971',
                'estado_id' => '5',
                'descricao' => 'Iaçu'
            ),
            471 =>
            array (
                'id' => '1972',
                'estado_id' => '5',
                'descricao' => 'Ibiassucê'
            ),
            472 =>
            array (
                'id' => '1973',
                'estado_id' => '5',
                'descricao' => 'Ibicaraí'
            ),
            473 =>
            array (
                'id' => '1974',
                'estado_id' => '5',
                'descricao' => 'Ibicoara'
            ),
            474 =>
            array (
                'id' => '1975',
                'estado_id' => '5',
                'descricao' => 'Ibicuí'
            ),
            475 =>
            array (
                'id' => '1976',
                'estado_id' => '5',
                'descricao' => 'Ibipeba'
            ),
            476 =>
            array (
                'id' => '1977',
                'estado_id' => '5',
                'descricao' => 'Ibipitanga'
            ),
            477 =>
            array (
                'id' => '1978',
                'estado_id' => '5',
                'descricao' => 'Ibiquera'
            ),
            478 =>
            array (
                'id' => '1979',
                'estado_id' => '5',
                'descricao' => 'Ibirapitanga'
            ),
            479 =>
            array (
                'id' => '1980',
                'estado_id' => '5',
                'descricao' => 'Ibirapuã'
            ),
            480 =>
            array (
                'id' => '1981',
                'estado_id' => '5',
                'descricao' => 'Ibirataia'
            ),
            481 =>
            array (
                'id' => '1982',
                'estado_id' => '5',
                'descricao' => 'Ibitiara'
            ),
            482 =>
            array (
                'id' => '1983',
                'estado_id' => '5',
                'descricao' => 'Ibititá'
            ),
            483 =>
            array (
                'id' => '1984',
                'estado_id' => '5',
                'descricao' => 'Ibotirama'
            ),
            484 =>
            array (
                'id' => '1985',
                'estado_id' => '5',
                'descricao' => 'Ichu'
            ),
            485 =>
            array (
                'id' => '1986',
                'estado_id' => '5',
                'descricao' => 'Igaporã'
            ),
            486 =>
            array (
                'id' => '1987',
                'estado_id' => '5',
                'descricao' => 'Igrapiúna'
            ),
            487 =>
            array (
                'id' => '1988',
                'estado_id' => '5',
                'descricao' => 'Iguaí'
            ),
            488 =>
            array (
                'id' => '1989',
                'estado_id' => '5',
                'descricao' => 'Ilhéus'
            ),
            489 =>
            array (
                'id' => '1990',
                'estado_id' => '5',
                'descricao' => 'Inhambupe'
            ),
            490 =>
            array (
                'id' => '1991',
                'estado_id' => '5',
                'descricao' => 'Ipecaetá'
            ),
            491 =>
            array (
                'id' => '1992',
                'estado_id' => '5',
                'descricao' => 'Ipiaú',
            ),
            492 =>
            array (
                'id' => '1993',
                'estado_id' => '5',
                'descricao' => 'Ipirá'
            ),
            493 =>
            array (
                'id' => '1994',
                'estado_id' => '5',
                'descricao' => 'Ipupiara'
            ),
            494 =>
            array (
                'id' => '1995',
                'estado_id' => '5',
                'descricao' => 'Irajuba'
            ),
            495 =>
            array (
                'id' => '1996',
                'estado_id' => '5',
                'descricao' => 'Iramaia'
            ),
            496 =>
            array (
                'id' => '1997',
                'estado_id' => '5',
                'descricao' => 'Iraquara'
            ),
            497 =>
            array (
                'id' => '1998',
                'estado_id' => '5',
                'descricao' => 'Irará'
            ),
            498 =>
            array (
                'id' => '1999',
                'estado_id' => '5',
                'descricao' => 'Irecê'
            ),
            499 =>
            array (
                'id' => '2000',
                'estado_id' => '5',
                'descricao' => 'Itabela'
            ),
        ));
        \DB::table('municipios')->insert(array (
            0 =>
            array (
                'id' => '2001',
                'estado_id' => '5',
                'descricao' => 'Itaberaba'
            ),
            1 =>
            array (
                'id' => '2002',
                'estado_id' => '5',
                'descricao' => 'Itabuna'
            ),
            2 =>
            array (
                'id' => '2003',
                'estado_id' => '5',
                'descricao' => 'Itacaré'
            ),
            3 =>
            array (
                'id' => '2004',
                'estado_id' => '5',
                'descricao' => 'Itaeté'
            ),
            4 =>
            array (
                'id' => '2005',
                'estado_id' => '5',
                'descricao' => 'Itagi'
            ),
            5 =>
            array (
                'id' => '2006',
                'estado_id' => '5',
                'descricao' => 'Itagibá'
            ),
            6 =>
            array (
                'id' => '2007',
                'estado_id' => '5',
                'descricao' => 'Itagimirim'
            ),
            7 =>
            array (
                'id' => '2008',
                'estado_id' => '5',
                'descricao' => 'Itaguaçu da Bahia'
            ),
            8 =>
            array (
                'id' => '2009',
                'estado_id' => '5',
                'descricao' => 'Itaju do Colônia'
            ),
            9 =>
            array (
                'id' => '2010',
                'estado_id' => '5',
                'descricao' => 'Itajuípe'
            ),
            10 =>
            array (
                'id' => '2011',
                'estado_id' => '5',
                'descricao' => 'Itamaraju'
            ),
            11 =>
            array (
                'id' => '2012',
                'estado_id' => '5',
                'descricao' => 'Itamari'
            ),
            12 =>
            array (
                'id' => '2013',
                'estado_id' => '5',
                'descricao' => 'Itambé'
            ),
            13 =>
            array (
                'id' => '2014',
                'estado_id' => '5',
                'descricao' => 'Itanagra'
            ),
            14 =>
            array (
                'id' => '2015',
                'estado_id' => '5',
                'descricao' => 'Itanhém'
            ),
            15 =>
            array (
                'id' => '2016',
                'estado_id' => '5',
                'descricao' => 'Itaparica'
            ),
            16 =>
            array (
                'id' => '2017',
                'estado_id' => '5',
                'descricao' => 'Itapé'
            ),
            17 =>
            array (
                'id' => '2018',
                'estado_id' => '5',
                'descricao' => 'Itapebi'
            ),
            18 =>
            array (
                'id' => '2019',
                'estado_id' => '5',
                'descricao' => 'Itapetinga'
            ),
            19 =>
            array (
                'id' => '2020',
                'estado_id' => '5',
                'descricao' => 'Itapicuru'
            ),
            20 =>
            array (
                'id' => '2021',
                'estado_id' => '5',
                'descricao' => 'Itapitanga'
            ),
            21 =>
            array (
                'id' => '2022',
                'estado_id' => '5',
                'descricao' => 'Itaquara'
            ),
            22 =>
            array (
                'id' => '2023',
                'estado_id' => '5',
                'descricao' => 'Itarantim'
            ),
            23 =>
            array (
                'id' => '2024',
                'estado_id' => '5',
                'descricao' => 'Itatim'
            ),
            24 =>
            array (
                'id' => '2025',
                'estado_id' => '5',
                'descricao' => 'Itiruçu'
            ),
            25 =>
            array (
                'id' => '2026',
                'estado_id' => '5',
                'descricao' => 'Itiúba'
            ),
            26 =>
            array (
                'id' => '2027',
                'estado_id' => '5',
                'descricao' => 'Itororó'
            ),
            27 =>
            array (
                'id' => '2028',
                'estado_id' => '5',
                'descricao' => 'Ituaçu'
            ),
            28 =>
            array (
                'id' => '2029',
                'estado_id' => '5',
                'descricao' => 'Ituberá'
            ),
            29 =>
            array (
                'id' => '2030',
                'estado_id' => '5',
                'descricao' => 'Iuiú'
            ),
            30 =>
            array (
                'id' => '2031',
                'estado_id' => '5',
                'descricao' => 'Jaborandi'
            ),
            31 =>
            array (
                'id' => '2032',
                'estado_id' => '5',
                'descricao' => 'Jacaraci'
            ),
            32 =>
            array (
                'id' => '2033',
                'estado_id' => '5',
                'descricao' => 'Jacobina'
            ),
            33 =>
            array (
                'id' => '2034',
                'estado_id' => '5',
                'descricao' => 'Jaguaquara'
            ),
            34 =>
            array (
                'id' => '2035',
                'estado_id' => '5',
                'descricao' => 'Jaguarari'
            ),
            35 =>
            array (
                'id' => '2036',
                'estado_id' => '5',
                'descricao' => 'Jaguaripe'
            ),
            36 =>
            array (
                'id' => '2037',
                'estado_id' => '5',
                'descricao' => 'Jandaíra'
            ),
            37 =>
            array (
                'id' => '2038',
                'estado_id' => '5',
                'descricao' => 'Jequié'
            ),
            38 =>
            array (
                'id' => '2039',
                'estado_id' => '5',
                'descricao' => 'Jeremoabo'
            ),
            39 =>
            array (
                'id' => '2040',
                'estado_id' => '5',
                'descricao' => 'Jiquiriçá'
            ),
            40 =>
            array (
                'id' => '2041',
                'estado_id' => '5',
                'descricao' => 'Jitaúna'
            ),
            41 =>
            array (
                'id' => '2042',
                'estado_id' => '5',
                'descricao' => 'João Dourado'
            ),
            42 =>
            array (
                'id' => '2043',
                'estado_id' => '5',
                'descricao' => 'Juazeiro'
            ),
            43 =>
            array (
                'id' => '2044',
                'estado_id' => '5',
                'descricao' => 'Jucuruçu'
            ),
            44 =>
            array (
                'id' => '2045',
                'estado_id' => '5',
                'descricao' => 'Jussara'
            ),
            45 =>
            array (
                'id' => '2046',
                'estado_id' => '5',
                'descricao' => 'Jussari'
            ),
            46 =>
            array (
                'id' => '2047',
                'estado_id' => '5',
                'descricao' => 'Jussiape'
            ),
            47 =>
            array (
                'id' => '2048',
                'estado_id' => '5',
                'descricao' => 'Lafaiete Coutinho'
            ),
            48 =>
            array (
                'id' => '2049',
                'estado_id' => '5',
                'descricao' => 'Lagoa Real'
            ),
            49 =>
            array (
                'id' => '2050',
                'estado_id' => '5',
                'descricao' => 'Laje'
            ),
            50 =>
            array (
                'id' => '2051',
                'estado_id' => '5',
                'descricao' => 'Lajedão'
            ),
            51 =>
            array (
                'id' => '2052',
                'estado_id' => '5',
                'descricao' => 'Lajedinho'
            ),
            52 =>
            array (
                'id' => '2053',
                'estado_id' => '5',
                'descricao' => 'Lajedo do Tabocal'
            ),
            53 =>
            array (
                'id' => '2054',
                'estado_id' => '5',
                'descricao' => 'Lamarão'
            ),
            54 =>
            array (
                'id' => '2055',
                'estado_id' => '5',
                'descricao' => 'Lapão'
            ),
            55 =>
            array (
                'id' => '2056',
                'estado_id' => '5',
                'descricao' => 'Lauro de Freitas',
            ),
            56 =>
            array (
                'id' => '2057',
                'estado_id' => '5',
                'descricao' => 'Lençóis'
            ),
            57 =>
            array (
                'id' => '2058',
                'estado_id' => '5',
                'descricao' => 'Licínio de Almeida'
            ),
            58 =>
            array (
                'id' => '2059',
                'estado_id' => '5',
                'descricao' => 'Livramento de Nossa Senhora'
            ),
            59 =>
            array (
                'id' => '2060',
                'estado_id' => '5',
                'descricao' => 'Luís Eduardo Magalhães',
            ),
            60 =>
            array (
                'id' => '2061',
                'estado_id' => '5',
                'descricao' => 'Macajuba'
            ),
            61 =>
            array (
                'id' => '2062',
                'estado_id' => '5',
                'descricao' => 'Macarani'
            ),
            62 =>
            array (
                'id' => '2063',
                'estado_id' => '5',
                'descricao' => 'Macaúbas'
            ),
            63 =>
            array (
                'id' => '2064',
                'estado_id' => '5',
                'descricao' => 'Macururé'
            ),
            64 =>
            array (
                'id' => '2065',
                'estado_id' => '5',
                'descricao' => 'Madre de Deus'
            ),
            65 =>
            array (
                'id' => '2066',
                'estado_id' => '5',
                'descricao' => 'Maetinga'
            ),
            66 =>
            array (
                'id' => '2067',
                'estado_id' => '5',
                'descricao' => 'Maiquinique'
            ),
            67 =>
            array (
                'id' => '2068',
                'estado_id' => '5',
                'descricao' => 'Mairi'
            ),
            68 =>
            array (
                'id' => '2069',
                'estado_id' => '5',
                'descricao' => 'Malhada'
            ),
            69 =>
            array (
                'id' => '2070',
                'estado_id' => '5',
                'descricao' => 'Malhada de Pedras'
            ),
            70 =>
            array (
                'id' => '2071',
                'estado_id' => '5',
                'descricao' => 'Manoel Vitorino'
            ),
            71 =>
            array (
                'id' => '2072',
                'estado_id' => '5',
                'descricao' => 'Mansidão'
            ),
            72 =>
            array (
                'id' => '2073',
                'estado_id' => '5',
                'descricao' => 'Maracás'
            ),
            73 =>
            array (
                'id' => '2074',
                'estado_id' => '5',
                'descricao' => 'Maragogipe'
            ),
            74 =>
            array (
                'id' => '2075',
                'estado_id' => '5',
                'descricao' => 'Maraú'
            ),
            75 =>
            array (
                'id' => '2076',
                'estado_id' => '5',
                'descricao' => 'Marcionílio Souza'
            ),
            76 =>
            array (
                'id' => '2077',
                'estado_id' => '5',
                'descricao' => 'Mascote'
            ),
            77 =>
            array (
                'id' => '2078',
                'estado_id' => '5',
                'descricao' => 'Mata de São João'
            ),
            78 =>
            array (
                'id' => '2079',
                'estado_id' => '5',
                'descricao' => 'Matina'
            ),
            79 =>
            array (
                'id' => '2080',
                'estado_id' => '5',
                'descricao' => 'Medeiros Neto'
            ),
            80 =>
            array (
                'id' => '2081',
                'estado_id' => '5',
                'descricao' => 'Miguel Calmon'
            ),
            81 =>
            array (
                'id' => '2082',
                'estado_id' => '5',
                'descricao' => 'Milagres'
            ),
            82 =>
            array (
                'id' => '2083',
                'estado_id' => '5',
                'descricao' => 'Mirangaba'
            ),
            83 =>
            array (
                'id' => '2084',
                'estado_id' => '5',
                'descricao' => 'Mirante'
            ),
            84 =>
            array (
                'id' => '2085',
                'estado_id' => '5',
                'descricao' => 'Monte Santo'
            ),
            85 =>
            array (
                'id' => '2086',
                'estado_id' => '5',
                'descricao' => 'Morpará'
            ),
            86 =>
            array (
                'id' => '2087',
                'estado_id' => '5',
                'descricao' => 'Morro do Chapéu'
            ),
            87 =>
            array (
                'id' => '2088',
                'estado_id' => '5',
                'descricao' => 'Mortugaba'
            ),
            88 =>
            array (
                'id' => '2089',
                'estado_id' => '5',
                'descricao' => 'Mucugê'
            ),
            89 =>
            array (
                'id' => '2090',
                'estado_id' => '5',
                'descricao' => 'Mucuri'
            ),
            90 =>
            array (
                'id' => '2091',
                'estado_id' => '5',
                'descricao' => 'Mulungu do Morro'
            ),
            91 =>
            array (
                'id' => '2092',
                'estado_id' => '5',
                'descricao' => 'Mundo Novo'
            ),
            92 =>
            array (
                'id' => '2093',
                'estado_id' => '5',
                'descricao' => 'Muniz Ferreira'
            ),
            93 =>
            array (
                'id' => '2094',
                'estado_id' => '5',
                'descricao' => 'Muquém de São Francisco'
            ),
            94 =>
            array (
                'id' => '2095',
                'estado_id' => '5',
                'descricao' => 'Muritiba'
            ),
            95 =>
            array (
                'id' => '2096',
                'estado_id' => '5',
                'descricao' => 'Mutuípe'
            ),
            96 =>
            array (
                'id' => '2097',
                'estado_id' => '5',
                'descricao' => 'Nazaré'
            ),
            97 =>
            array (
                'id' => '2098',
                'estado_id' => '5',
                'descricao' => 'Nilo Peçanha'
            ),
            98 =>
            array (
                'id' => '2099',
                'estado_id' => '5',
                'descricao' => 'Nordestina'
            ),
            99 =>
            array (
                'id' => '2100',
                'estado_id' => '5',
                'descricao' => 'Nova Canaã'
            ),
            100 =>
            array (
                'id' => '2101',
                'estado_id' => '5',
                'descricao' => 'Nova Fátima'
            ),
            101 =>
            array (
                'id' => '2102',
                'estado_id' => '5',
                'descricao' => 'Nova Ibiá'
            ),
            102 =>
            array (
                'id' => '2103',
                'estado_id' => '5',
                'descricao' => 'Nova Itarana'
            ),
            103 =>
            array (
                'id' => '2104',
                'estado_id' => '5',
                'descricao' => 'Nova Redenção'
            ),
            104 =>
            array (
                'id' => '2105',
                'estado_id' => '5',
                'descricao' => 'Nova Soure'
            ),
            105 =>
            array (
                'id' => '2106',
                'estado_id' => '5',
                'descricao' => 'Nova Viçosa'
            ),
            106 =>
            array (
                'id' => '2107',
                'estado_id' => '5',
                'descricao' => 'Novo Horizonte'
            ),
            107 =>
            array (
                'id' => '2108',
                'estado_id' => '5',
                'descricao' => 'Novo Triunfo'
            ),
            108 =>
            array (
                'id' => '2109',
                'estado_id' => '5',
                'descricao' => 'Olindina'
            ),
            109 =>
            array (
                'id' => '2110',
                'estado_id' => '5',
                'descricao' => 'Oliveira dos Brejinhos'
            ),
            110 =>
            array (
                'id' => '2111',
                'estado_id' => '5',
                'descricao' => 'Ouriçangas'
            ),
            111 =>
            array (
                'id' => '2112',
                'estado_id' => '5',
                'descricao' => 'Ourolândia'
            ),
            112 =>
            array (
                'id' => '2113',
                'estado_id' => '5',
                'descricao' => 'Palmas de Monte Alto'
            ),
            113 =>
            array (
                'id' => '2114',
                'estado_id' => '5',
                'descricao' => 'Palmeiras'
            ),
            114 =>
            array (
                'id' => '2115',
                'estado_id' => '5',
                'descricao' => 'Paramirim'
            ),
            115 =>
            array (
                'id' => '2116',
                'estado_id' => '5',
                'descricao' => 'Paratinga'
            ),
            116 =>
            array (
                'id' => '2117',
                'estado_id' => '5',
                'descricao' => 'Paripiranga'
            ),
            117 =>
            array (
                'id' => '2118',
                'estado_id' => '5',
                'descricao' => 'Pau Brasil'
            ),
            118 =>
            array (
                'id' => '2119',
                'estado_id' => '5',
                'descricao' => 'Paulo Afonso'
            ),
            119 =>
            array (
                'id' => '2120',
                'estado_id' => '5',
                'descricao' => 'Pé de Serra'
            ),
            120 =>
            array (
                'id' => '2121',
                'estado_id' => '5',
                'descricao' => 'Pedrão'
            ),
            121 =>
            array (
                'id' => '2122',
                'estado_id' => '5',
                'descricao' => 'Pedro Alexandre'
            ),
            122 =>
            array (
                'id' => '2123',
                'estado_id' => '5',
                'descricao' => 'Piatã'
            ),
            123 =>
            array (
                'id' => '2124',
                'estado_id' => '5',
                'descricao' => 'Pilão Arcado'
            ),
            124 =>
            array (
                'id' => '2125',
                'estado_id' => '5',
                'descricao' => 'Pindaí'
            ),
            125 =>
            array (
                'id' => '2126',
                'estado_id' => '5',
                'descricao' => 'Pindobaçu'
            ),
            126 =>
            array (
                'id' => '2127',
                'estado_id' => '5',
                'descricao' => 'Pintadas'
            ),
            127 =>
            array (
                'id' => '2128',
                'estado_id' => '5',
                'descricao' => 'Piraí do Norte'
            ),
            128 =>
            array (
                'id' => '2129',
                'estado_id' => '5',
                'descricao' => 'Piripá'
            ),
            129 =>
            array (
                'id' => '2130',
                'estado_id' => '5',
                'descricao' => 'Piritiba'
            ),
            130 =>
            array (
                'id' => '2131',
                'estado_id' => '5',
                'descricao' => 'Planaltino'
            ),
            131 =>
            array (
                'id' => '2132',
                'estado_id' => '5',
                'descricao' => 'Planalto'
            ),
            132 =>
            array (
                'id' => '2133',
                'estado_id' => '5',
                'descricao' => 'Poções'
            ),
            133 =>
            array (
                'id' => '2134',
                'estado_id' => '5',
                'descricao' => 'Pojuca'
            ),
            134 =>
            array (
                'id' => '2135',
                'estado_id' => '5',
                'descricao' => 'Ponto Novo'
            ),
            135 =>
            array (
                'id' => '2136',
                'estado_id' => '5',
                'descricao' => 'Porto Seguro'
            ),
            136 =>
            array (
                'id' => '2137',
                'estado_id' => '5',
                'descricao' => 'Potiraguá'
            ),
            137 =>
            array (
                'id' => '2138',
                'estado_id' => '5',
                'descricao' => 'Prado'
            ),
            138 =>
            array (
                'id' => '2139',
                'estado_id' => '5',
                'descricao' => 'Presidente Dutra'
            ),
            139 =>
            array (
                'id' => '2140',
                'estado_id' => '5',
                'descricao' => 'Presidente Jânio Quadros'
            ),
            140 =>
            array (
                'id' => '2141',
                'estado_id' => '5',
                'descricao' => 'Presidente Tancredo Neves'
            ),
            141 =>
            array (
                'id' => '2142',
                'estado_id' => '5',
                'descricao' => 'Queimadas'
            ),
            142 =>
            array (
                'id' => '2143',
                'estado_id' => '5',
                'descricao' => 'Quijingue'
            ),
            143 =>
            array (
                'id' => '2144',
                'estado_id' => '5',
                'descricao' => 'Quixabeira'
            ),
            144 =>
            array (
                'id' => '2145',
                'estado_id' => '5',
                'descricao' => 'Rafael Jambeiro'
            ),
            145 =>
            array (
                'id' => '2146',
                'estado_id' => '5',
                'descricao' => 'Remanso'
            ),
            146 =>
            array (
                'id' => '2147',
                'estado_id' => '5',
                'descricao' => 'Retirolândia'
            ),
            147 =>
            array (
                'id' => '2148',
                'estado_id' => '5',
                'descricao' => 'Riachão das Neves'
            ),
            148 =>
            array (
                'id' => '2149',
                'estado_id' => '5',
                'descricao' => 'Riachão do Jacuípe'
            ),
            149 =>
            array (
                'id' => '2150',
                'estado_id' => '5',
                'descricao' => 'Riacho de Santana'
            ),
            150 =>
            array (
                'id' => '2151',
                'estado_id' => '5',
                'descricao' => 'Ribeira do Amparo'
            ),
            151 =>
            array (
                'id' => '2152',
                'estado_id' => '5',
                'descricao' => 'Ribeira do Pombal'
            ),
            152 =>
            array (
                'id' => '2153',
                'estado_id' => '5',
                'descricao' => 'Ribeirão do Largo'
            ),
            153 =>
            array (
                'id' => '2154',
                'estado_id' => '5',
                'descricao' => 'Rio de Contas'
            ),
            154 =>
            array (
                'id' => '2155',
                'estado_id' => '5',
                'descricao' => 'Rio do Antônio'
            ),
            155 =>
            array (
                'id' => '2156',
                'estado_id' => '5',
                'descricao' => 'Rio do Pires'
            ),
            156 =>
            array (
                'id' => '2157',
                'estado_id' => '5',
                'descricao' => 'Rio Real'
            ),
            157 =>
            array (
                'id' => '2158',
                'estado_id' => '5',
                'descricao' => 'Rodelas'
            ),
            158 =>
            array (
                'id' => '2159',
                'estado_id' => '5',
                'descricao' => 'Ruy Barbosa'
            ),
            159 =>
            array (
                'id' => '2160',
                'estado_id' => '5',
                'descricao' => 'Salinas da Margarida'
            ),
            160 =>
            array (
                'id' => '2161',
                'estado_id' => '5',
                'descricao' => 'Salvador',
            ),
            161 =>
            array (
                'id' => '2162',
                'estado_id' => '5',
                'descricao' => 'Santa Bárbara'
            ),
            162 =>
            array (
                'id' => '2163',
                'estado_id' => '5',
                'descricao' => 'Santa Brígida'
            ),
            163 =>
            array (
                'id' => '2164',
                'estado_id' => '5',
                'descricao' => 'Santa Cruz Cabrália'
            ),
            164 =>
            array (
                'id' => '2165',
                'estado_id' => '5',
                'descricao' => 'Santa Cruz da Vitória'
            ),
            165 =>
            array (
                'id' => '2166',
                'estado_id' => '5',
                'descricao' => 'Santa Inês'
            ),
            166 =>
            array (
                'id' => '2167',
                'estado_id' => '5',
                'descricao' => 'Santaluz'
            ),
            167 =>
            array (
                'id' => '2168',
                'estado_id' => '5',
                'descricao' => 'Santa Luzia'
            ),
            168 =>
            array (
                'id' => '2169',
                'estado_id' => '5',
                'descricao' => 'Santa Maria da Vitória'
            ),
            169 =>
            array (
                'id' => '2170',
                'estado_id' => '5',
                'descricao' => 'Santana'
            ),
            170 =>
            array (
                'id' => '2171',
                'estado_id' => '5',
                'descricao' => 'Santanópolis'
            ),
            171 =>
            array (
                'id' => '2172',
                'estado_id' => '5',
                'descricao' => 'Santa Rita de Cássia'
            ),
            172 =>
            array (
                'id' => '2173',
                'estado_id' => '5',
                'descricao' => 'Santa Teresinha'
            ),
            173 =>
            array (
                'id' => '2174',
                'estado_id' => '5',
                'descricao' => 'Santo Amaro'
            ),
            174 =>
            array (
                'id' => '2175',
                'estado_id' => '5',
                'descricao' => 'Santo Antônio de Jesus'
            ),
            175 =>
            array (
                'id' => '2176',
                'estado_id' => '5',
                'descricao' => 'Santo Estêvão'
            ),
            176 =>
            array (
                'id' => '2177',
                'estado_id' => '5',
                'descricao' => 'São Desidério'
            ),
            177 =>
            array (
                'id' => '2178',
                'estado_id' => '5',
                'descricao' => 'São Domingos'
            ),
            178 =>
            array (
                'id' => '2179',
                'estado_id' => '5',
                'descricao' => 'São Félix'
            ),
            179 =>
            array (
                'id' => '2180',
                'estado_id' => '5',
                'descricao' => 'São Félix do Coribe'
            ),
            180 =>
            array (
                'id' => '2181',
                'estado_id' => '5',
                'descricao' => 'São Felipe'
            ),
            181 =>
            array (
                'id' => '2182',
                'estado_id' => '5',
                'descricao' => 'São Francisco do Conde'
            ),
            182 =>
            array (
                'id' => '2183',
                'estado_id' => '5',
                'descricao' => 'São Gabriel'
            ),
            183 =>
            array (
                'id' => '2184',
                'estado_id' => '5',
                'descricao' => 'São Gonçalo dos Campos'
            ),
            184 =>
            array (
                'id' => '2185',
                'estado_id' => '5',
                'descricao' => 'São José da Vitória'
            ),
            185 =>
            array (
                'id' => '2186',
                'estado_id' => '5',
                'descricao' => 'São José do Jacuípe'
            ),
            186 =>
            array (
                'id' => '2187',
                'estado_id' => '5',
                'descricao' => 'São Miguel das Matas'
            ),
            187 =>
            array (
                'id' => '2188',
                'estado_id' => '5',
                'descricao' => 'São Sebastião do Passé'
            ),
            188 =>
            array (
                'id' => '2189',
                'estado_id' => '5',
                'descricao' => 'Sapeaçu'
            ),
            189 =>
            array (
                'id' => '2190',
                'estado_id' => '5',
                'descricao' => 'Sátiro Dias'
            ),
            190 =>
            array (
                'id' => '2191',
                'estado_id' => '5',
                'descricao' => 'Saubara'
            ),
            191 =>
            array (
                'id' => '2192',
                'estado_id' => '5',
                'descricao' => 'Saúde'
            ),
            192 =>
            array (
                'id' => '2193',
                'estado_id' => '5',
                'descricao' => 'Seabra'
            ),
            193 =>
            array (
                'id' => '2194',
                'estado_id' => '5',
                'descricao' => 'Sebastião Laranjeiras'
            ),
            194 =>
            array (
                'id' => '2195',
                'estado_id' => '5',
                'descricao' => 'Senhor do Bonfim'
            ),
            195 =>
            array (
                'id' => '2196',
                'estado_id' => '5',
                'descricao' => 'Serra do Ramalho'
            ),
            196 =>
            array (
                'id' => '2197',
                'estado_id' => '5',
                'descricao' => 'Sento Sé'
            ),
            197 =>
            array (
                'id' => '2198',
                'estado_id' => '5',
                'descricao' => 'Serra Dourada'
            ),
            198 =>
            array (
                'id' => '2199',
                'estado_id' => '5',
                'descricao' => 'Serra Preta'
            ),
            199 =>
            array (
                'id' => '2200',
                'estado_id' => '5',
                'descricao' => 'Serrinha'
            ),
            200 =>
            array (
                'id' => '2201',
                'estado_id' => '5',
                'descricao' => 'Serrolândia'
            ),
            201 =>
            array (
                'id' => '2202',
                'estado_id' => '5',
                'descricao' => 'Simões Filho'
            ),
            202 =>
            array (
                'id' => '2203',
                'estado_id' => '5',
                'descricao' => 'Sítio do Mato'
            ),
            203 =>
            array (
                'id' => '2204',
                'estado_id' => '5',
                'descricao' => 'Sítio do Quinto'
            ),
            204 =>
            array (
                'id' => '2205',
                'estado_id' => '5',
                'descricao' => 'Sobradinho'
            ),
            205 =>
            array (
                'id' => '2206',
                'estado_id' => '5',
                'descricao' => 'Souto Soares'
            ),
            206 =>
            array (
                'id' => '2207',
                'estado_id' => '5',
                'descricao' => 'Tabocas do Brejo Velho'
            ),
            207 =>
            array (
                'id' => '2208',
                'estado_id' => '5',
                'descricao' => 'Tanhaçu'
            ),
            208 =>
            array (
                'id' => '2209',
                'estado_id' => '5',
                'descricao' => 'Tanque Novo'
            ),
            209 =>
            array (
                'id' => '2210',
                'estado_id' => '5',
                'descricao' => 'Tanquinho'
            ),
            210 =>
            array (
                'id' => '2211',
                'estado_id' => '5',
                'descricao' => 'Taperoá'
            ),
            211 =>
            array (
                'id' => '2212',
                'estado_id' => '5',
                'descricao' => 'Tapiramutá'
            ),
            212 =>
            array (
                'id' => '2213',
                'estado_id' => '5',
                'descricao' => 'Teixeira de Freitas'
            ),
            213 =>
            array (
                'id' => '2214',
                'estado_id' => '5',
                'descricao' => 'Teodoro Sampaio'
            ),
            214 =>
            array (
                'id' => '2215',
                'estado_id' => '5',
                'descricao' => 'Teofilândia'
            ),
            215 =>
            array (
                'id' => '2216',
                'estado_id' => '5',
                'descricao' => 'Teolândia'
            ),
            216 =>
            array (
                'id' => '2217',
                'estado_id' => '5',
                'descricao' => 'Terra Nova'
            ),
            217 =>
            array (
                'id' => '2218',
                'estado_id' => '5',
                'descricao' => 'Tremedal'
            ),
            218 =>
            array (
                'id' => '2219',
                'estado_id' => '5',
                'descricao' => 'Tucano'
            ),
            219 =>
            array (
                'id' => '2220',
                'estado_id' => '5',
                'descricao' => 'Uauá'
            ),
            220 =>
            array (
                'id' => '2221',
                'estado_id' => '5',
                'descricao' => 'Ubaíra'
            ),
            221 =>
            array (
                'id' => '2222',
                'estado_id' => '5',
                'descricao' => 'Ubaitaba'
            ),
            222 =>
            array (
                'id' => '2223',
                'estado_id' => '5',
                'descricao' => 'Ubatã'
            ),
            223 =>
            array (
                'id' => '2224',
                'estado_id' => '5',
                'descricao' => 'Uibaí'
            ),
            224 =>
            array (
                'id' => '2225',
                'estado_id' => '5',
                'descricao' => 'Umburanas'
            ),
            225 =>
            array (
                'id' => '2226',
                'estado_id' => '5',
                'descricao' => 'Una'
            ),
            226 =>
            array (
                'id' => '2227',
                'estado_id' => '5',
                'descricao' => 'Urandi'
            ),
            227 =>
            array (
                'id' => '2228',
                'estado_id' => '5',
                'descricao' => 'Uruçuca'
            ),
            228 =>
            array (
                'id' => '2229',
                'estado_id' => '5',
                'descricao' => 'Utinga'
            ),
            229 =>
            array (
                'id' => '2230',
                'estado_id' => '5',
                'descricao' => 'Valença'
            ),
            230 =>
            array (
                'id' => '2231',
                'estado_id' => '5',
                'descricao' => 'Valente'
            ),
            231 =>
            array (
                'id' => '2232',
                'estado_id' => '5',
                'descricao' => 'Várzea da Roça'
            ),
            232 =>
            array (
                'id' => '2233',
                'estado_id' => '5',
                'descricao' => 'Várzea do Poço'
            ),
            233 =>
            array (
                'id' => '2234',
                'estado_id' => '5',
                'descricao' => 'Várzea Nova'
            ),
            234 =>
            array (
                'id' => '2235',
                'estado_id' => '5',
                'descricao' => 'Varzedo'
            ),
            235 =>
            array (
                'id' => '2236',
                'estado_id' => '5',
                'descricao' => 'Vera Cruz'
            ),
            236 =>
            array (
                'id' => '2237',
                'estado_id' => '5',
                'descricao' => 'Vereda'
            ),
            237 =>
            array (
                'id' => '2238',
                'estado_id' => '5',
                'descricao' => 'Vitória da Conquista'
            ),
            238 =>
            array (
                'id' => '2239',
                'estado_id' => '5',
                'descricao' => 'Wagner'
            ),
            239 =>
            array (
                'id' => '2240',
                'estado_id' => '5',
                'descricao' => 'Wanderley'
            ),
            240 =>
            array (
                'id' => '2241',
                'estado_id' => '5',
                'descricao' => 'Wenceslau Guimarães'
            ),
            241 =>
            array (
                'id' => '2242',
                'estado_id' => '5',
                'descricao' => 'Xique-Xique'
            ),
            242 =>
            array (
                'id' => '2243',
                'estado_id' => '11',
                'descricao' => 'Abadia dos Dourados'
            ),
            243 =>
            array (
                'id' => '2244',
                'estado_id' => '11',
                'descricao' => 'Abaeté'
            ),
            244 =>
            array (
                'id' => '2245',
                'estado_id' => '11',
                'descricao' => 'Abre Campo'
            ),
            245 =>
            array (
                'id' => '2246',
                'estado_id' => '11',
                'descricao' => 'Acaiaca'
            ),
            246 =>
            array (
                'id' => '2247',
                'estado_id' => '11',
                'descricao' => 'Açucena'
            ),
            247 =>
            array (
                'id' => '2248',
                'estado_id' => '11',
                'descricao' => 'Água Boa'
            ),
            248 =>
            array (
                'id' => '2249',
                'estado_id' => '11',
                'descricao' => 'Água Comprida'
            ),
            249 =>
            array (
                'id' => '2250',
                'estado_id' => '11',
                'descricao' => 'Aguanil'
            ),
            250 =>
            array (
                'id' => '2251',
                'estado_id' => '11',
                'descricao' => 'Águas Formosas'
            ),
            251 =>
            array (
                'id' => '2252',
                'estado_id' => '11',
                'descricao' => 'Águas Vermelhas'
            ),
            252 =>
            array (
                'id' => '2253',
                'estado_id' => '11',
                'descricao' => 'Aimorés'
            ),
            253 =>
            array (
                'id' => '2254',
                'estado_id' => '11',
                'descricao' => 'Aiuruoca'
            ),
            254 =>
            array (
                'id' => '2255',
                'estado_id' => '11',
                'descricao' => 'Alagoa'
            ),
            255 =>
            array (
                'id' => '2256',
                'estado_id' => '11',
                'descricao' => 'Albertina'
            ),
            256 =>
            array (
                'id' => '2257',
                'estado_id' => '11',
                'descricao' => 'Além Paraíba'
            ),
            257 =>
            array (
                'id' => '2258',
                'estado_id' => '11',
                'descricao' => 'Alfenas'
            ),
            258 =>
            array (
                'id' => '2259',
                'estado_id' => '11',
                'descricao' => 'Alfredo Vasconcelos'
            ),
            259 =>
            array (
                'id' => '2260',
                'estado_id' => '11',
                'descricao' => 'Almenara'
            ),
            260 =>
            array (
                'id' => '2261',
                'estado_id' => '11',
                'descricao' => 'Alpercata'
            ),
            261 =>
            array (
                'id' => '2262',
                'estado_id' => '11',
                'descricao' => 'Alpinópolis'
            ),
            262 =>
            array (
                'id' => '2263',
                'estado_id' => '11',
                'descricao' => 'Alterosa'
            ),
            263 =>
            array (
                'id' => '2264',
                'estado_id' => '11',
                'descricao' => 'Alto Caparaó'
            ),
            264 =>
            array (
                'id' => '2265',
                'estado_id' => '11',
                'descricao' => 'Alto Rio Doce'
            ),
            265 =>
            array (
                'id' => '2266',
                'estado_id' => '11',
                'descricao' => 'Alvarenga'
            ),
            266 =>
            array (
                'id' => '2267',
                'estado_id' => '11',
                'descricao' => 'Alvinópolis'
            ),
            267 =>
            array (
                'id' => '2268',
                'estado_id' => '11',
                'descricao' => 'Alvorada de Minas'
            ),
            268 =>
            array (
                'id' => '2269',
                'estado_id' => '11',
                'descricao' => 'Amparo do Serra'
            ),
            269 =>
            array (
                'id' => '2270',
                'estado_id' => '11',
                'descricao' => 'Andradas'
            ),
            270 =>
            array (
                'id' => '2271',
                'estado_id' => '11',
                'descricao' => 'Cachoeira de Pajeú'
            ),
            271 =>
            array (
                'id' => '2272',
                'estado_id' => '11',
                'descricao' => 'Andrelândia'
            ),
            272 =>
            array (
                'id' => '2273',
                'estado_id' => '11',
                'descricao' => 'Angelândia'
            ),
            273 =>
            array (
                'id' => '2274',
                'estado_id' => '11',
                'descricao' => 'Antônio Carlos'
            ),
            274 =>
            array (
                'id' => '2275',
                'estado_id' => '11',
                'descricao' => 'Antônio Dias'
            ),
            275 =>
            array (
                'id' => '2276',
                'estado_id' => '11',
                'descricao' => 'Antônio Prado de Minas'
            ),
            276 =>
            array (
                'id' => '2277',
                'estado_id' => '11',
                'descricao' => 'Araçaí'
            ),
            277 =>
            array (
                'id' => '2278',
                'estado_id' => '11',
                'descricao' => 'Aracitaba'
            ),
            278 =>
            array (
                'id' => '2279',
                'estado_id' => '11',
                'descricao' => 'Araçuaí'
            ),
            279 =>
            array (
                'id' => '2280',
                'estado_id' => '11',
                'descricao' => 'Araguari'
            ),
            280 =>
            array (
                'id' => '2281',
                'estado_id' => '11',
                'descricao' => 'Arantina'
            ),
            281 =>
            array (
                'id' => '2282',
                'estado_id' => '11',
                'descricao' => 'Araponga'
            ),
            282 =>
            array (
                'id' => '2283',
                'estado_id' => '11',
                'descricao' => 'Araporã'
            ),
            283 =>
            array (
                'id' => '2284',
                'estado_id' => '11',
                'descricao' => 'Arapuá'
            ),
            284 =>
            array (
                'id' => '2285',
                'estado_id' => '11',
                'descricao' => 'Araújos'
            ),
            285 =>
            array (
                'id' => '2286',
                'estado_id' => '11',
                'descricao' => 'Araxá',
            ),
            286 =>
            array (
                'id' => '2287',
                'estado_id' => '11',
                'descricao' => 'Arceburgo'
            ),
            287 =>
            array (
                'id' => '2288',
                'estado_id' => '11',
                'descricao' => 'Arcos'
            ),
            288 =>
            array (
                'id' => '2289',
                'estado_id' => '11',
                'descricao' => 'Areado'
            ),
            289 =>
            array (
                'id' => '2290',
                'estado_id' => '11',
                'descricao' => 'Argirita'
            ),
            290 =>
            array (
                'id' => '2291',
                'estado_id' => '11',
                'descricao' => 'Aricanduva'
            ),
            291 =>
            array (
                'id' => '2292',
                'estado_id' => '11',
                'descricao' => 'Arinos'
            ),
            292 =>
            array (
                'id' => '2293',
                'estado_id' => '11',
                'descricao' => 'Astolfo Dutra'
            ),
            293 =>
            array (
                'id' => '2294',
                'estado_id' => '11',
                'descricao' => 'Ataléia'
            ),
            294 =>
            array (
                'id' => '2295',
                'estado_id' => '11',
                'descricao' => 'Augusto de Lima'
            ),
            295 =>
            array (
                'id' => '2296',
                'estado_id' => '11',
                'descricao' => 'Baependi'
            ),
            296 =>
            array (
                'id' => '2297',
                'estado_id' => '11',
                'descricao' => 'Baldim'
            ),
            297 =>
            array (
                'id' => '2298',
                'estado_id' => '11',
                'descricao' => 'Bambuí'
            ),
            298 =>
            array (
                'id' => '2299',
                'estado_id' => '11',
                'descricao' => 'Bandeira'
            ),
            299 =>
            array (
                'id' => '2300',
                'estado_id' => '11',
                'descricao' => 'Bandeira do Sul'
            ),
            300 =>
            array (
                'id' => '2301',
                'estado_id' => '11',
                'descricao' => 'Barão de Cocais'
            ),
            301 =>
            array (
                'id' => '2302',
                'estado_id' => '11',
                'descricao' => 'Barão de Monte Alto'
            ),
            302 =>
            array (
                'id' => '2303',
                'estado_id' => '11',
                'descricao' => 'Barbacena'
            ),
            303 =>
            array (
                'id' => '2304',
                'estado_id' => '11',
                'descricao' => 'Barra Longa'
            ),
            304 =>
            array (
                'id' => '2305',
                'estado_id' => '11',
                'descricao' => 'Barroso'
            ),
            305 =>
            array (
                'id' => '2306',
                'estado_id' => '11',
                'descricao' => 'Bela Vista de Minas'
            ),
            306 =>
            array (
                'id' => '2307',
                'estado_id' => '11',
                'descricao' => 'Belmiro Braga'
            ),
            307 =>
            array (
                'id' => '2308',
                'estado_id' => '11',
                'descricao' => 'Belo Horizonte',
            ),
            308 =>
            array (
                'id' => '2309',
                'estado_id' => '11',
                'descricao' => 'Belo Oriente'
            ),
            309 =>
            array (
                'id' => '2310',
                'estado_id' => '11',
                'descricao' => 'Belo Vale'
            ),
            310 =>
            array (
                'id' => '2311',
                'estado_id' => '11',
                'descricao' => 'Berilo'
            ),
            311 =>
            array (
                'id' => '2312',
                'estado_id' => '11',
                'descricao' => 'Bertópolis'
            ),
            312 =>
            array (
                'id' => '2313',
                'estado_id' => '11',
                'descricao' => 'Berizal'
            ),
            313 =>
            array (
                'id' => '2314',
                'estado_id' => '11',
                'descricao' => 'Betim'
            ),
            314 =>
            array (
                'id' => '2315',
                'estado_id' => '11',
                'descricao' => 'Bias Fortes'
            ),
            315 =>
            array (
                'id' => '2316',
                'estado_id' => '11',
                'descricao' => 'Bicas'
            ),
            316 =>
            array (
                'id' => '2317',
                'estado_id' => '11',
                'descricao' => 'Biquinhas'
            ),
            317 =>
            array (
                'id' => '2318',
                'estado_id' => '11',
                'descricao' => 'Boa Esperança'
            ),
            318 =>
            array (
                'id' => '2319',
                'estado_id' => '11',
                'descricao' => 'Bocaina de Minas'
            ),
            319 =>
            array (
                'id' => '2320',
                'estado_id' => '11',
                'descricao' => 'Bocaiúva'
            ),
            320 =>
            array (
                'id' => '2321',
                'estado_id' => '11',
                'descricao' => 'Bom Despacho'
            ),
            321 =>
            array (
                'id' => '2322',
                'estado_id' => '11',
                'descricao' => 'Bom Jardim de Minas'
            ),
            322 =>
            array (
                'id' => '2323',
                'estado_id' => '11',
                'descricao' => 'Bom Jesus da Penha'
            ),
            323 =>
            array (
                'id' => '2324',
                'estado_id' => '11',
                'descricao' => 'Bom Jesus do Amparo'
            ),
            324 =>
            array (
                'id' => '2325',
                'estado_id' => '11',
                'descricao' => 'Bom Jesus do Galho'
            ),
            325 =>
            array (
                'id' => '2326',
                'estado_id' => '11',
                'descricao' => 'Bom Repouso'
            ),
            326 =>
            array (
                'id' => '2327',
                'estado_id' => '11',
                'descricao' => 'Bom Sucesso'
            ),
            327 =>
            array (
                'id' => '2328',
                'estado_id' => '11',
                'descricao' => 'Bonfim'
            ),
            328 =>
            array (
                'id' => '2329',
                'estado_id' => '11',
                'descricao' => 'Bonfinópolis de Minas'
            ),
            329 =>
            array (
                'id' => '2330',
                'estado_id' => '11',
                'descricao' => 'Bonito de Minas'
            ),
            330 =>
            array (
                'id' => '2331',
                'estado_id' => '11',
                'descricao' => 'Borda da Mata'
            ),
            331 =>
            array (
                'id' => '2332',
                'estado_id' => '11',
                'descricao' => 'Botelhos'
            ),
            332 =>
            array (
                'id' => '2333',
                'estado_id' => '11',
                'descricao' => 'Botumirim'
            ),
            333 =>
            array (
                'id' => '2334',
                'estado_id' => '11',
                'descricao' => 'Brasilândia de Minas'
            ),
            334 =>
            array (
                'id' => '2335',
                'estado_id' => '11',
                'descricao' => 'Brasília de Minas'
            ),
            335 =>
            array (
                'id' => '2336',
                'estado_id' => '11',
                'descricao' => 'Brás Pires'
            ),
            336 =>
            array (
                'id' => '2337',
                'estado_id' => '11',
                'descricao' => 'Braúnas'
            ),
            337 =>
            array (
                'id' => '2338',
                'estado_id' => '11',
                'descricao' => 'Brasópolis'
            ),
            338 =>
            array (
                'id' => '2339',
                'estado_id' => '11',
                'descricao' => 'Brumadinho',
            ),
            339 =>
            array (
                'id' => '2340',
                'estado_id' => '11',
                'descricao' => 'Bueno Brandão'
            ),
            340 =>
            array (
                'id' => '2341',
                'estado_id' => '11',
                'descricao' => 'Buenópolis'
            ),
            341 =>
            array (
                'id' => '2342',
                'estado_id' => '11',
                'descricao' => 'Bugre'
            ),
            342 =>
            array (
                'id' => '2343',
                'estado_id' => '11',
                'descricao' => 'Buritis'
            ),
            343 =>
            array (
                'id' => '2344',
                'estado_id' => '11',
                'descricao' => 'Buritizeiro'
            ),
            344 =>
            array (
                'id' => '2345',
                'estado_id' => '11',
                'descricao' => 'Cabeceira Grande'
            ),
            345 =>
            array (
                'id' => '2346',
                'estado_id' => '11',
                'descricao' => 'Cabo Verde'
            ),
            346 =>
            array (
                'id' => '2347',
                'estado_id' => '11',
                'descricao' => 'Cachoeira da Prata'
            ),
            347 =>
            array (
                'id' => '2348',
                'estado_id' => '11',
                'descricao' => 'Cachoeira de Minas'
            ),
            348 =>
            array (
                'id' => '2349',
                'estado_id' => '11',
                'descricao' => 'Cachoeira Dourada'
            ),
            349 =>
            array (
                'id' => '2350',
                'estado_id' => '11',
                'descricao' => 'Caetanópolis'
            ),
            350 =>
            array (
                'id' => '2351',
                'estado_id' => '11',
                'descricao' => 'Caeté'
            ),
            351 =>
            array (
                'id' => '2352',
                'estado_id' => '11',
                'descricao' => 'Caiana'
            ),
            352 =>
            array (
                'id' => '2353',
                'estado_id' => '11',
                'descricao' => 'Cajuri'
            ),
            353 =>
            array (
                'id' => '2354',
                'estado_id' => '11',
                'descricao' => 'Caldas'
            ),
            354 =>
            array (
                'id' => '2355',
                'estado_id' => '11',
                'descricao' => 'Camacho'
            ),
            355 =>
            array (
                'id' => '2356',
                'estado_id' => '11',
                'descricao' => 'Camanducaia'
            ),
            356 =>
            array (
                'id' => '2357',
                'estado_id' => '11',
                'descricao' => 'Cambuí'
            ),
            357 =>
            array (
                'id' => '2358',
                'estado_id' => '11',
                'descricao' => 'Cambuquira'
            ),
            358 =>
            array (
                'id' => '2359',
                'estado_id' => '11',
                'descricao' => 'Campanário'
            ),
            359 =>
            array (
                'id' => '2360',
                'estado_id' => '11',
                'descricao' => 'Campanha'
            ),
            360 =>
            array (
                'id' => '2361',
                'estado_id' => '11',
                'descricao' => 'Campestre'
            ),
            361 =>
            array (
                'id' => '2362',
                'estado_id' => '11',
                'descricao' => 'Campina Verde'
            ),
            362 =>
            array (
                'id' => '2363',
                'estado_id' => '11',
                'descricao' => 'Campo Azul'
            ),
            363 =>
            array (
                'id' => '2364',
                'estado_id' => '11',
                'descricao' => 'Campo Belo'
            ),
            364 =>
            array (
                'id' => '2365',
                'estado_id' => '11',
                'descricao' => 'Campo do Meio'
            ),
            365 =>
            array (
                'id' => '2366',
                'estado_id' => '11',
                'descricao' => 'Campo Florido'
            ),
            366 =>
            array (
                'id' => '2367',
                'estado_id' => '11',
                'descricao' => 'Campos Altos'
            ),
            367 =>
            array (
                'id' => '2368',
                'estado_id' => '11',
                'descricao' => 'Campos Gerais'
            ),
            368 =>
            array (
                'id' => '2369',
                'estado_id' => '11',
                'descricao' => 'Canaã'
            ),
            369 =>
            array (
                'id' => '2370',
                'estado_id' => '11',
                'descricao' => 'Canápolis'
            ),
            370 =>
            array (
                'id' => '2371',
                'estado_id' => '11',
                'descricao' => 'Cana Verde'
            ),
            371 =>
            array (
                'id' => '2372',
                'estado_id' => '11',
                'descricao' => 'Candeias'
            ),
            372 =>
            array (
                'id' => '2373',
                'estado_id' => '11',
                'descricao' => 'Cantagalo'
            ),
            373 =>
            array (
                'id' => '2374',
                'estado_id' => '11',
                'descricao' => 'Caparaó'
            ),
            374 =>
            array (
                'id' => '2375',
                'estado_id' => '11',
                'descricao' => 'Capela Nova'
            ),
            375 =>
            array (
                'id' => '2376',
                'estado_id' => '11',
                'descricao' => 'Capelinha'
            ),
            376 =>
            array (
                'id' => '2377',
                'estado_id' => '11',
                'descricao' => 'Capetinga'
            ),
            377 =>
            array (
                'id' => '2378',
                'estado_id' => '11',
                'descricao' => 'Capim Branco'
            ),
            378 =>
            array (
                'id' => '2379',
                'estado_id' => '11',
                'descricao' => 'Capinópolis',
            ),
            379 =>
            array (
                'id' => '2380',
                'estado_id' => '11',
                'descricao' => 'Capitão Andrade'
            ),
            380 =>
            array (
                'id' => '2381',
                'estado_id' => '11',
                'descricao' => 'Capitão Enéas'
            ),
            381 =>
            array (
                'id' => '2382',
                'estado_id' => '11',
                'descricao' => 'Capitólio'
            ),
            382 =>
            array (
                'id' => '2383',
                'estado_id' => '11',
                'descricao' => 'Caputira'
            ),
            383 =>
            array (
                'id' => '2384',
                'estado_id' => '11',
                'descricao' => 'Caraí'
            ),
            384 =>
            array (
                'id' => '2385',
                'estado_id' => '11',
                'descricao' => 'Caranaíba'
            ),
            385 =>
            array (
                'id' => '2386',
                'estado_id' => '11',
                'descricao' => 'Carandaí'
            ),
            386 =>
            array (
                'id' => '2387',
                'estado_id' => '11',
                'descricao' => 'Carangola'
            ),
            387 =>
            array (
                'id' => '2388',
                'estado_id' => '11',
                'descricao' => 'Caratinga'
            ),
            388 =>
            array (
                'id' => '2389',
                'estado_id' => '11',
                'descricao' => 'Carbonita'
            ),
            389 =>
            array (
                'id' => '2390',
                'estado_id' => '11',
                'descricao' => 'Careaçu'
            ),
            390 =>
            array (
                'id' => '2391',
                'estado_id' => '11',
                'descricao' => 'Carlos Chagas'
            ),
            391 =>
            array (
                'id' => '2392',
                'estado_id' => '11',
                'descricao' => 'Carmésia'
            ),
            392 =>
            array (
                'id' => '2393',
                'estado_id' => '11',
                'descricao' => 'Carmo da Cachoeira'
            ),
            393 =>
            array (
                'id' => '2394',
                'estado_id' => '11',
                'descricao' => 'Carmo da Mata'
            ),
            394 =>
            array (
                'id' => '2395',
                'estado_id' => '11',
                'descricao' => 'Carmo de Minas'
            ),
            395 =>
            array (
                'id' => '2396',
                'estado_id' => '11',
                'descricao' => 'Carmo do Cajuru'
            ),
            396 =>
            array (
                'id' => '2397',
                'estado_id' => '11',
                'descricao' => 'Carmo do Paranaíba'
            ),
            397 =>
            array (
                'id' => '2398',
                'estado_id' => '11',
                'descricao' => 'Carmo do Rio Claro'
            ),
            398 =>
            array (
                'id' => '2399',
                'estado_id' => '11',
                'descricao' => 'Carmópolis de Minas'
            ),
            399 =>
            array (
                'id' => '2400',
                'estado_id' => '11',
                'descricao' => 'Carneirinho'
            ),
            400 =>
            array (
                'id' => '2401',
                'estado_id' => '11',
                'descricao' => 'Carrancas'
            ),
            401 =>
            array (
                'id' => '2402',
                'estado_id' => '11',
                'descricao' => 'Carvalhópolis'
            ),
            402 =>
            array (
                'id' => '2403',
                'estado_id' => '11',
                'descricao' => 'Carvalhos'
            ),
            403 =>
            array (
                'id' => '2404',
                'estado_id' => '11',
                'descricao' => 'Casa Grande'
            ),
            404 =>
            array (
                'id' => '2405',
                'estado_id' => '11',
                'descricao' => 'Cascalho Rico'
            ),
            405 =>
            array (
                'id' => '2406',
                'estado_id' => '11',
                'descricao' => 'Cássia'
            ),
            406 =>
            array (
                'id' => '2407',
                'estado_id' => '11',
                'descricao' => 'Conceição da Barra de Minas'
            ),
            407 =>
            array (
                'id' => '2408',
                'estado_id' => '11',
                'descricao' => 'Cataguases'
            ),
            408 =>
            array (
                'id' => '2409',
                'estado_id' => '11',
                'descricao' => 'Catas Altas'
            ),
            409 =>
            array (
                'id' => '2410',
                'estado_id' => '11',
                'descricao' => 'Catas Altas da Noruega'
            ),
            410 =>
            array (
                'id' => '2411',
                'estado_id' => '11',
                'descricao' => 'Catuji'
            ),
            411 =>
            array (
                'id' => '2412',
                'estado_id' => '11',
                'descricao' => 'Catuti'
            ),
            412 =>
            array (
                'id' => '2413',
                'estado_id' => '11',
                'descricao' => 'Caxambu',
            ),
            413 =>
            array (
                'id' => '2414',
                'estado_id' => '11',
                'descricao' => 'Cedro do Abaeté'
            ),
            414 =>
            array (
                'id' => '2415',
                'estado_id' => '11',
                'descricao' => 'Central de Minas'
            ),
            415 =>
            array (
                'id' => '2416',
                'estado_id' => '11',
                'descricao' => 'Centralina'
            ),
            416 =>
            array (
                'id' => '2417',
                'estado_id' => '11',
                'descricao' => 'Chácara'
            ),
            417 =>
            array (
                'id' => '2418',
                'estado_id' => '11',
                'descricao' => 'Chalé'
            ),
            418 =>
            array (
                'id' => '2419',
                'estado_id' => '11',
                'descricao' => 'Chapada do Norte'
            ),
            419 =>
            array (
                'id' => '2420',
                'estado_id' => '11',
                'descricao' => 'Chapada Gaúcha'
            ),
            420 =>
            array (
                'id' => '2421',
                'estado_id' => '11',
                'descricao' => 'Chiador',
            ),
            421 =>
            array (
                'id' => '2422',
                'estado_id' => '11',
                'descricao' => 'Cipotânea'
            ),
            422 =>
            array (
                'id' => '2423',
                'estado_id' => '11',
                'descricao' => 'Claraval'
            ),
            423 =>
            array (
                'id' => '2424',
                'estado_id' => '11',
                'descricao' => 'Claro dos Poções'
            ),
            424 =>
            array (
                'id' => '2425',
                'estado_id' => '11',
                'descricao' => 'Cláudio'
            ),
            425 =>
            array (
                'id' => '2426',
                'estado_id' => '11',
                'descricao' => 'Coimbra'
            ),
            426 =>
            array (
                'id' => '2427',
                'estado_id' => '11',
                'descricao' => 'Coluna'
            ),
            427 =>
            array (
                'id' => '2428',
                'estado_id' => '11',
                'descricao' => 'Comendador Gomes'
            ),
            428 =>
            array (
                'id' => '2429',
                'estado_id' => '11',
                'descricao' => 'Comercinho'
            ),
            429 =>
            array (
                'id' => '2430',
                'estado_id' => '11',
                'descricao' => 'Conceição da Aparecida'
            ),
            430 =>
            array (
                'id' => '2431',
                'estado_id' => '11',
                'descricao' => 'Conceição das Pedras'
            ),
            431 =>
            array (
                'id' => '2432',
                'estado_id' => '11',
                'descricao' => 'Conceição das Alagoas'
            ),
            432 =>
            array (
                'id' => '2433',
                'estado_id' => '11',
                'descricao' => 'Conceição de Ipanema'
            ),
            433 =>
            array (
                'id' => '2434',
                'estado_id' => '11',
                'descricao' => 'Conceição do Mato Dentro'
            ),
            434 =>
            array (
                'id' => '2435',
                'estado_id' => '11',
                'descricao' => 'Conceição do Pará'
            ),
            435 =>
            array (
                'id' => '2436',
                'estado_id' => '11',
                'descricao' => 'Conceição do Rio Verde'
            ),
            436 =>
            array (
                'id' => '2437',
                'estado_id' => '11',
                'descricao' => 'Conceição dos Ouros'
            ),
            437 =>
            array (
                'id' => '2438',
                'estado_id' => '11',
                'descricao' => 'Cônego Marinho'
            ),
            438 =>
            array (
                'id' => '2439',
                'estado_id' => '11',
                'descricao' => 'Confins'
            ),
            439 =>
            array (
                'id' => '2440',
                'estado_id' => '11',
                'descricao' => 'Congonhal'
            ),
            440 =>
            array (
                'id' => '2441',
                'estado_id' => '11',
                'descricao' => 'Congonhas'
            ),
            441 =>
            array (
                'id' => '2442',
                'estado_id' => '11',
                'descricao' => 'Congonhas do Norte'
            ),
            442 =>
            array (
                'id' => '2443',
                'estado_id' => '11',
                'descricao' => 'Conquista'
            ),
            443 =>
            array (
                'id' => '2444',
                'estado_id' => '11',
                'descricao' => 'Conselheiro Lafaiete'
            ),
            444 =>
            array (
                'id' => '2445',
                'estado_id' => '11',
                'descricao' => 'Conselheiro Pena'
            ),
            445 =>
            array (
                'id' => '2446',
                'estado_id' => '11',
                'descricao' => 'Consolação'
            ),
            446 =>
            array (
                'id' => '2447',
                'estado_id' => '11',
                'descricao' => 'Contagem'
            ),
            447 =>
            array (
                'id' => '2448',
                'estado_id' => '11',
                'descricao' => 'Coqueiral'
            ),
            448 =>
            array (
                'id' => '2449',
                'estado_id' => '11',
                'descricao' => 'Coração de Jesus'
            ),
            449 =>
            array (
                'id' => '2450',
                'estado_id' => '11',
                'descricao' => 'Cordisburgo'
            ),
            450 =>
            array (
                'id' => '2451',
                'estado_id' => '11',
                'descricao' => 'Cordislândia'
            ),
            451 =>
            array (
                'id' => '2452',
                'estado_id' => '11',
                'descricao' => 'Corinto'
            ),
            452 =>
            array (
                'id' => '2453',
                'estado_id' => '11',
                'descricao' => 'Coroaci'
            ),
            453 =>
            array (
                'id' => '2454',
                'estado_id' => '11',
                'descricao' => 'Coromandel'
            ),
            454 =>
            array (
                'id' => '2455',
                'estado_id' => '11',
                'descricao' => 'Coronel Fabriciano'
            ),
            455 =>
            array (
                'id' => '2456',
                'estado_id' => '11',
                'descricao' => 'Coronel Murta'
            ),
            456 =>
            array (
                'id' => '2457',
                'estado_id' => '11',
                'descricao' => 'Coronel Pacheco'
            ),
            457 =>
            array (
                'id' => '2458',
                'estado_id' => '11',
                'descricao' => 'Coronel Xavier Chaves'
            ),
            458 =>
            array (
                'id' => '2459',
                'estado_id' => '11',
                'descricao' => 'Córrego Danta'
            ),
            459 =>
            array (
                'id' => '2460',
                'estado_id' => '11',
                'descricao' => 'Córrego do Bom Jesus'
            ),
            460 =>
            array (
                'id' => '2461',
                'estado_id' => '11',
                'descricao' => 'Córrego Fundo'
            ),
            461 =>
            array (
                'id' => '2462',
                'estado_id' => '11',
                'descricao' => 'Córrego Novo'
            ),
            462 =>
            array (
                'id' => '2463',
                'estado_id' => '11',
                'descricao' => 'Couto de Magalhães de Minas'
            ),
            463 =>
            array (
                'id' => '2464',
                'estado_id' => '11',
                'descricao' => 'Crisólita'
            ),
            464 =>
            array (
                'id' => '2465',
                'estado_id' => '11',
                'descricao' => 'Cristais'
            ),
            465 =>
            array (
                'id' => '2466',
                'estado_id' => '11',
                'descricao' => 'Cristália'
            ),
            466 =>
            array (
                'id' => '2467',
                'estado_id' => '11',
                'descricao' => 'Cristiano Otoni'
            ),
            467 =>
            array (
                'id' => '2468',
                'estado_id' => '11',
                'descricao' => 'Cristina'
            ),
            468 =>
            array (
                'id' => '2469',
                'estado_id' => '11',
                'descricao' => 'Crucilândia'
            ),
            469 =>
            array (
                'id' => '2470',
                'estado_id' => '11',
                'descricao' => 'Cruzeiro da Fortaleza'
            ),
            470 =>
            array (
                'id' => '2471',
                'estado_id' => '11',
                'descricao' => 'Cruzília'
            ),
            471 =>
            array (
                'id' => '2472',
                'estado_id' => '11',
                'descricao' => 'Cuparaque'
            ),
            472 =>
            array (
                'id' => '2473',
                'estado_id' => '11',
                'descricao' => 'Curral de Dentro'
            ),
            473 =>
            array (
                'id' => '2474',
                'estado_id' => '11',
                'descricao' => 'Curvelo'
            ),
            474 =>
            array (
                'id' => '2475',
                'estado_id' => '11',
                'descricao' => 'Datas'
            ),
            475 =>
            array (
                'id' => '2476',
                'estado_id' => '11',
                'descricao' => 'Delfim Moreira'
            ),
            476 =>
            array (
                'id' => '2477',
                'estado_id' => '11',
                'descricao' => 'Delfinópolis'
            ),
            477 =>
            array (
                'id' => '2478',
                'estado_id' => '11',
                'descricao' => 'Delta'
            ),
            478 =>
            array (
                'id' => '2479',
                'estado_id' => '11',
                'descricao' => 'Descoberto'
            ),
            479 =>
            array (
                'id' => '2480',
                'estado_id' => '11',
                'descricao' => 'Desterro de Entre Rios'
            ),
            480 =>
            array (
                'id' => '2481',
                'estado_id' => '11',
                'descricao' => 'Desterro do Melo'
            ),
            481 =>
            array (
                'id' => '2482',
                'estado_id' => '11',
                'descricao' => 'Diamantina'
            ),
            482 =>
            array (
                'id' => '2483',
                'estado_id' => '11',
                'descricao' => 'Diogo de Vasconcelos'
            ),
            483 =>
            array (
                'id' => '2484',
                'estado_id' => '11',
                'descricao' => 'Dionísio'
            ),
            484 =>
            array (
                'id' => '2485',
                'estado_id' => '11',
                'descricao' => 'Divinésia'
            ),
            485 =>
            array (
                'id' => '2486',
                'estado_id' => '11',
                'descricao' => 'Divino'
            ),
            486 =>
            array (
                'id' => '2487',
                'estado_id' => '11',
                'descricao' => 'Divino das Laranjeiras'
            ),
            487 =>
            array (
                'id' => '2488',
                'estado_id' => '11',
                'descricao' => 'Divinolândia de Minas'
            ),
            488 =>
            array (
                'id' => '2489',
                'estado_id' => '11',
                'descricao' => 'Divinópolis'
            ),
            489 =>
            array (
                'id' => '2490',
                'estado_id' => '11',
                'descricao' => 'Divisa Alegre'
            ),
            490 =>
            array (
                'id' => '2491',
                'estado_id' => '11',
                'descricao' => 'Divisa Nova'
            ),
            491 =>
            array (
                'id' => '2492',
                'estado_id' => '11',
                'descricao' => 'Divisópolis'
            ),
            492 =>
            array (
                'id' => '2493',
                'estado_id' => '11',
                'descricao' => 'Dom Bosco'
            ),
            493 =>
            array (
                'id' => '2494',
                'estado_id' => '11',
                'descricao' => 'Dom Cavati'
            ),
            494 =>
            array (
                'id' => '2495',
                'estado_id' => '11',
                'descricao' => 'Dom Joaquim'
            ),
            495 =>
            array (
                'id' => '2496',
                'estado_id' => '11',
                'descricao' => 'Dom Silvério'
            ),
            496 =>
            array (
                'id' => '2497',
                'estado_id' => '11',
                'descricao' => 'Dom Viçoso'
            ),
            497 =>
            array (
                'id' => '2498',
                'estado_id' => '11',
                'descricao' => 'Dona Eusébia'
            ),
            498 =>
            array (
                'id' => '2499',
                'estado_id' => '11',
                'descricao' => 'Dores de Campos'
            ),
            499 =>
            array (
                'id' => '2500',
                'estado_id' => '11',
                'descricao' => 'Dores de Guanhães'
            ),
        ));
        \DB::table('municipios')->insert(array (
            0 =>
            array (
                'id' => '2501',
                'estado_id' => '11',
                'descricao' => 'Dores do Indaiá'
            ),
            1 =>
            array (
                'id' => '2502',
                'estado_id' => '11',
                'descricao' => 'Dores do Turvo'
            ),
            2 =>
            array (
                'id' => '2503',
                'estado_id' => '11',
                'descricao' => 'Doresópolis'
            ),
            3 =>
            array (
                'id' => '2504',
                'estado_id' => '11',
                'descricao' => 'Douradoquara'
            ),
            4 =>
            array (
                'id' => '2505',
                'estado_id' => '11',
                'descricao' => 'Durandé'
            ),
            5 =>
            array (
                'id' => '2506',
                'estado_id' => '11',
                'descricao' => 'Elói Mendes'
            ),
            6 =>
            array (
                'id' => '2507',
                'estado_id' => '11',
                'descricao' => 'Engenheiro Caldas'
            ),
            7 =>
            array (
                'id' => '2508',
                'estado_id' => '11',
                'descricao' => 'Engenheiro Navarro'
            ),
            8 =>
            array (
                'id' => '2509',
                'estado_id' => '11',
                'descricao' => 'Entre Folhas'
            ),
            9 =>
            array (
                'id' => '2510',
                'estado_id' => '11',
                'descricao' => 'Entre Rios de Minas'
            ),
            10 =>
            array (
                'id' => '2511',
                'estado_id' => '11',
                'descricao' => 'Ervália'
            ),
            11 =>
            array (
                'id' => '2512',
                'estado_id' => '11',
                'descricao' => 'Esmeraldas'
            ),
            12 =>
            array (
                'id' => '2513',
                'estado_id' => '11',
                'descricao' => 'Espera Feliz'
            ),
            13 =>
            array (
                'id' => '2514',
                'estado_id' => '11',
                'descricao' => 'Espinosa'
            ),
            14 =>
            array (
                'id' => '2515',
                'estado_id' => '11',
                'descricao' => 'Espírito Santo do Dourado'
            ),
            15 =>
            array (
                'id' => '2516',
                'estado_id' => '11',
                'descricao' => 'Estiva'
            ),
            16 =>
            array (
                'id' => '2517',
                'estado_id' => '11',
                'descricao' => 'Estrela Dalva'
            ),
            17 =>
            array (
                'id' => '2518',
                'estado_id' => '11',
                'descricao' => 'Estrela do Indaiá'
            ),
            18 =>
            array (
                'id' => '2519',
                'estado_id' => '11',
                'descricao' => 'Estrela do Sul'
            ),
            19 =>
            array (
                'id' => '2520',
                'estado_id' => '11',
                'descricao' => 'Eugenópolis'
            ),
            20 =>
            array (
                'id' => '2521',
                'estado_id' => '11',
                'descricao' => 'Ewbank da Câmara'
            ),
            21 =>
            array (
                'id' => '2522',
                'estado_id' => '11',
                'descricao' => 'Extrema'
            ),
            22 =>
            array (
                'id' => '2523',
                'estado_id' => '11',
                'descricao' => 'Fama'
            ),
            23 =>
            array (
                'id' => '2524',
                'estado_id' => '11',
                'descricao' => 'Faria Lemos'
            ),
            24 =>
            array (
                'id' => '2525',
                'estado_id' => '11',
                'descricao' => 'Felício dos Santos'
            ),
            25 =>
            array (
                'id' => '2526',
                'estado_id' => '11',
                'descricao' => 'São Gonçalo do Rio Preto'
            ),
            26 =>
            array (
                'id' => '2527',
                'estado_id' => '11',
                'descricao' => 'Felisburgo'
            ),
            27 =>
            array (
                'id' => '2528',
                'estado_id' => '11',
                'descricao' => 'Felixlândia'
            ),
            28 =>
            array (
                'id' => '2529',
                'estado_id' => '11',
                'descricao' => 'Fernandes Tourinho'
            ),
            29 =>
            array (
                'id' => '2530',
                'estado_id' => '11',
                'descricao' => 'Ferros'
            ),
            30 =>
            array (
                'id' => '2531',
                'estado_id' => '11',
                'descricao' => 'Fervedouro'
            ),
            31 =>
            array (
                'id' => '2532',
                'estado_id' => '11',
                'descricao' => 'Florestal'
            ),
            32 =>
            array (
                'id' => '2533',
                'estado_id' => '11',
                'descricao' => 'Formiga'
            ),
            33 =>
            array (
                'id' => '2534',
                'estado_id' => '11',
                'descricao' => 'Formoso'
            ),
            34 =>
            array (
                'id' => '2535',
                'estado_id' => '11',
                'descricao' => 'Fortaleza de Minas'
            ),
            35 =>
            array (
                'id' => '2536',
                'estado_id' => '11',
                'descricao' => 'Fortuna de Minas'
            ),
            36 =>
            array (
                'id' => '2537',
                'estado_id' => '11',
                'descricao' => 'Francisco Badaró'
            ),
            37 =>
            array (
                'id' => '2538',
                'estado_id' => '11',
                'descricao' => 'Francisco Dumont'
            ),
            38 =>
            array (
                'id' => '2539',
                'estado_id' => '11',
                'descricao' => 'Francisco Sá'
            ),
            39 =>
            array (
                'id' => '2540',
                'estado_id' => '11',
                'descricao' => 'Franciscópolis'
            ),
            40 =>
            array (
                'id' => '2541',
                'estado_id' => '11',
                'descricao' => 'Frei Gaspar'
            ),
            41 =>
            array (
                'id' => '2542',
                'estado_id' => '11',
                'descricao' => 'Frei Inocêncio'
            ),
            42 =>
            array (
                'id' => '2543',
                'estado_id' => '11',
                'descricao' => 'Frei Lagonegro'
            ),
            43 =>
            array (
                'id' => '2544',
                'estado_id' => '11',
                'descricao' => 'Fronteira'
            ),
            44 =>
            array (
                'id' => '2545',
                'estado_id' => '11',
                'descricao' => 'Fronteira dos Vales'
            ),
            45 =>
            array (
                'id' => '2546',
                'estado_id' => '11',
                'descricao' => 'Fruta de Leite'
            ),
            46 =>
            array (
                'id' => '2547',
                'estado_id' => '11',
                'descricao' => 'Frutal'
            ),
            47 =>
            array (
                'id' => '2548',
                'estado_id' => '11',
                'descricao' => 'Funilândia'
            ),
            48 =>
            array (
                'id' => '2549',
                'estado_id' => '11',
                'descricao' => 'Galiléia'
            ),
            49 =>
            array (
                'id' => '2550',
                'estado_id' => '11',
                'descricao' => 'Gameleiras'
            ),
            50 =>
            array (
                'id' => '2551',
                'estado_id' => '11',
                'descricao' => 'Glaucilândia'
            ),
            51 =>
            array (
                'id' => '2552',
                'estado_id' => '11',
                'descricao' => 'Goiabeira'
            ),
            52 =>
            array (
                'id' => '2553',
                'estado_id' => '11',
                'descricao' => 'Goianá'
            ),
            53 =>
            array (
                'id' => '2554',
                'estado_id' => '11',
                'descricao' => 'Gonçalves'
            ),
            54 =>
            array (
                'id' => '2555',
                'estado_id' => '11',
                'descricao' => 'Gonzaga'
            ),
            55 =>
            array (
                'id' => '2556',
                'estado_id' => '11',
                'descricao' => 'Gouveia'
            ),
            56 =>
            array (
                'id' => '2557',
                'estado_id' => '11',
                'descricao' => 'Governador Valadares'
            ),
            57 =>
            array (
                'id' => '2558',
                'estado_id' => '11',
                'descricao' => 'Grão Mogol'
            ),
            58 =>
            array (
                'id' => '2559',
                'estado_id' => '11',
                'descricao' => 'Grupiara'
            ),
            59 =>
            array (
                'id' => '2560',
                'estado_id' => '11',
                'descricao' => 'Guanhães'
            ),
            60 =>
            array (
                'id' => '2561',
                'estado_id' => '11',
                'descricao' => 'Guapé'
            ),
            61 =>
            array (
                'id' => '2562',
                'estado_id' => '11',
                'descricao' => 'Guaraciaba'
            ),
            62 =>
            array (
                'id' => '2563',
                'estado_id' => '11',
                'descricao' => 'Guaraciama'
            ),
            63 =>
            array (
                'id' => '2564',
                'estado_id' => '11',
                'descricao' => 'Guaranésia'
            ),
            64 =>
            array (
                'id' => '2565',
                'estado_id' => '11',
                'descricao' => 'Guarani'
            ),
            65 =>
            array (
                'id' => '2566',
                'estado_id' => '11',
                'descricao' => 'Guarará'
            ),
            66 =>
            array (
                'id' => '2567',
                'estado_id' => '11',
                'descricao' => 'Guarda-Mor'
            ),
            67 =>
            array (
                'id' => '2568',
                'estado_id' => '11',
                'descricao' => 'Guaxupé'
            ),
            68 =>
            array (
                'id' => '2569',
                'estado_id' => '11',
                'descricao' => 'Guidoval'
            ),
            69 =>
            array (
                'id' => '2570',
                'estado_id' => '11',
                'descricao' => 'Guimarânia'
            ),
            70 =>
            array (
                'id' => '2571',
                'estado_id' => '11',
                'descricao' => 'Guiricema'
            ),
            71 =>
            array (
                'id' => '2572',
                'estado_id' => '11',
                'descricao' => 'Gurinhatã'
            ),
            72 =>
            array (
                'id' => '2573',
                'estado_id' => '11',
                'descricao' => 'Heliodora'
            ),
            73 =>
            array (
                'id' => '2574',
                'estado_id' => '11',
                'descricao' => 'Iapu'
            ),
            74 =>
            array (
                'id' => '2575',
                'estado_id' => '11',
                'descricao' => 'Ibertioga'
            ),
            75 =>
            array (
                'id' => '2576',
                'estado_id' => '11',
                'descricao' => 'Ibiá'
            ),
            76 =>
            array (
                'id' => '2577',
                'estado_id' => '11',
                'descricao' => 'Ibiaí'
            ),
            77 =>
            array (
                'id' => '2578',
                'estado_id' => '11',
                'descricao' => 'Ibiracatu'
            ),
            78 =>
            array (
                'id' => '2579',
                'estado_id' => '11',
                'descricao' => 'Ibiraci'
            ),
            79 =>
            array (
                'id' => '2580',
                'estado_id' => '11',
                'descricao' => 'Ibirité'
            ),
            80 =>
            array (
                'id' => '2581',
                'estado_id' => '11',
                'descricao' => 'Ibitiúra de Minas'
            ),
            81 =>
            array (
                'id' => '2582',
                'estado_id' => '11',
                'descricao' => 'Ibituruna'
            ),
            82 =>
            array (
                'id' => '2583',
                'estado_id' => '11',
                'descricao' => 'Icaraí de Minas'
            ),
            83 =>
            array (
                'id' => '2584',
                'estado_id' => '11',
                'descricao' => 'Igarapé'
            ),
            84 =>
            array (
                'id' => '2585',
                'estado_id' => '11',
                'descricao' => 'Igaratinga'
            ),
            85 =>
            array (
                'id' => '2586',
                'estado_id' => '11',
                'descricao' => 'Iguatama'
            ),
            86 =>
            array (
                'id' => '2587',
                'estado_id' => '11',
                'descricao' => 'Ijaci'
            ),
            87 =>
            array (
                'id' => '2588',
                'estado_id' => '11',
                'descricao' => 'Ilicínea'
            ),
            88 =>
            array (
                'id' => '2589',
                'estado_id' => '11',
                'descricao' => 'Imbé de Minas'
            ),
            89 =>
            array (
                'id' => '2590',
                'estado_id' => '11',
                'descricao' => 'Inconfidentes'
            ),
            90 =>
            array (
                'id' => '2591',
                'estado_id' => '11',
                'descricao' => 'Indaiabira'
            ),
            91 =>
            array (
                'id' => '2592',
                'estado_id' => '11',
                'descricao' => 'Indianópolis'
            ),
            92 =>
            array (
                'id' => '2593',
                'estado_id' => '11',
                'descricao' => 'Ingaí'
            ),
            93 =>
            array (
                'id' => '2594',
                'estado_id' => '11',
                'descricao' => 'Inhapim'
            ),
            94 =>
            array (
                'id' => '2595',
                'estado_id' => '11',
                'descricao' => 'Inhaúma'
            ),
            95 =>
            array (
                'id' => '2596',
                'estado_id' => '11',
                'descricao' => 'Inimutaba'
            ),
            96 =>
            array (
                'id' => '2597',
                'estado_id' => '11',
                'descricao' => 'Ipaba'
            ),
            97 =>
            array (
                'id' => '2598',
                'estado_id' => '11',
                'descricao' => 'Ipanema'
            ),
            98 =>
            array (
                'id' => '2599',
                'estado_id' => '11',
                'descricao' => 'Ipatinga'
            ),
            99 =>
            array (
                'id' => '2600',
                'estado_id' => '11',
                'descricao' => 'Ipiaçu'
            ),
            100 =>
            array (
                'id' => '2601',
                'estado_id' => '11',
                'descricao' => 'Ipuiúna'
            ),
            101 =>
            array (
                'id' => '2602',
                'estado_id' => '11',
                'descricao' => 'Iraí de Minas'
            ),
            102 =>
            array (
                'id' => '2603',
                'estado_id' => '11',
                'descricao' => 'Itabira'
            ),
            103 =>
            array (
                'id' => '2604',
                'estado_id' => '11',
                'descricao' => 'Itabirinha'
            ),
            104 =>
            array (
                'id' => '2605',
                'estado_id' => '11',
                'descricao' => 'Itabirito'
            ),
            105 =>
            array (
                'id' => '2606',
                'estado_id' => '11',
                'descricao' => 'Itacambira'
            ),
            106 =>
            array (
                'id' => '2607',
                'estado_id' => '11',
                'descricao' => 'Itacarambi'
            ),
            107 =>
            array (
                'id' => '2608',
                'estado_id' => '11',
                'descricao' => 'Itaguara'
            ),
            108 =>
            array (
                'id' => '2609',
                'estado_id' => '11',
                'descricao' => 'Itaipé'
            ),
            109 =>
            array (
                'id' => '2610',
                'estado_id' => '11',
                'descricao' => 'Itajubá',
            ),
            110 =>
            array (
                'id' => '2611',
                'estado_id' => '11',
                'descricao' => 'Itamarandiba'
            ),
            111 =>
            array (
                'id' => '2612',
                'estado_id' => '11',
                'descricao' => 'Itamarati de Minas'
            ),
            112 =>
            array (
                'id' => '2613',
                'estado_id' => '11',
                'descricao' => 'Itambacuri'
            ),
            113 =>
            array (
                'id' => '2614',
                'estado_id' => '11',
                'descricao' => 'Itambé do Mato Dentro'
            ),
            114 =>
            array (
                'id' => '2615',
                'estado_id' => '11',
                'descricao' => 'Itamogi'
            ),
            115 =>
            array (
                'id' => '2616',
                'estado_id' => '11',
                'descricao' => 'Itamonte'
            ),
            116 =>
            array (
                'id' => '2617',
                'estado_id' => '11',
                'descricao' => 'Itanhandu'
            ),
            117 =>
            array (
                'id' => '2618',
                'estado_id' => '11',
                'descricao' => 'Itanhomi'
            ),
            118 =>
            array (
                'id' => '2619',
                'estado_id' => '11',
                'descricao' => 'Itaobim'
            ),
            119 =>
            array (
                'id' => '2620',
                'estado_id' => '11',
                'descricao' => 'Itapagipe'
            ),
            120 =>
            array (
                'id' => '2621',
                'estado_id' => '11',
                'descricao' => 'Itapecerica'
            ),
            121 =>
            array (
                'id' => '2622',
                'estado_id' => '11',
                'descricao' => 'Itapeva'
            ),
            122 =>
            array (
                'id' => '2623',
                'estado_id' => '11',
                'descricao' => 'Itatiaiuçu'
            ),
            123 =>
            array (
                'id' => '2624',
                'estado_id' => '11',
                'descricao' => 'Itaú de Minas'
            ),
            124 =>
            array (
                'id' => '2625',
                'estado_id' => '11',
                'descricao' => 'Itaúna'
            ),
            125 =>
            array (
                'id' => '2626',
                'estado_id' => '11',
                'descricao' => 'Itaverava'
            ),
            126 =>
            array (
                'id' => '2627',
                'estado_id' => '11',
                'descricao' => 'Itinga'
            ),
            127 =>
            array (
                'id' => '2628',
                'estado_id' => '11',
                'descricao' => 'Itueta'
            ),
            128 =>
            array (
                'id' => '2629',
                'estado_id' => '11',
                'descricao' => 'Ituiutaba'
            ),
            129 =>
            array (
                'id' => '2630',
                'estado_id' => '11',
                'descricao' => 'Itumirim'
            ),
            130 =>
            array (
                'id' => '2631',
                'estado_id' => '11',
                'descricao' => 'Iturama'
            ),
            131 =>
            array (
                'id' => '2632',
                'estado_id' => '11',
                'descricao' => 'Itutinga'
            ),
            132 =>
            array (
                'id' => '2633',
                'estado_id' => '11',
                'descricao' => 'Jaboticatubas'
            ),
            133 =>
            array (
                'id' => '2634',
                'estado_id' => '11',
                'descricao' => 'Jacinto'
            ),
            134 =>
            array (
                'id' => '2635',
                'estado_id' => '11',
                'descricao' => 'Jacuí'
            ),
            135 =>
            array (
                'id' => '2636',
                'estado_id' => '11',
                'descricao' => 'Jacutinga'
            ),
            136 =>
            array (
                'id' => '2637',
                'estado_id' => '11',
                'descricao' => 'Jaguaraçu'
            ),
            137 =>
            array (
                'id' => '2638',
                'estado_id' => '11',
                'descricao' => 'Jaíba'
            ),
            138 =>
            array (
                'id' => '2639',
                'estado_id' => '11',
                'descricao' => 'Jampruca'
            ),
            139 =>
            array (
                'id' => '2640',
                'estado_id' => '11',
                'descricao' => 'Janaúba'
            ),
            140 =>
            array (
                'id' => '2641',
                'estado_id' => '11',
                'descricao' => 'Januária'
            ),
            141 =>
            array (
                'id' => '2642',
                'estado_id' => '11',
                'descricao' => 'Japaraíba'
            ),
            142 =>
            array (
                'id' => '2643',
                'estado_id' => '11',
                'descricao' => 'Japonvar'
            ),
            143 =>
            array (
                'id' => '2644',
                'estado_id' => '11',
                'descricao' => 'Jeceaba'
            ),
            144 =>
            array (
                'id' => '2645',
                'estado_id' => '11',
                'descricao' => 'Jenipapo de Minas'
            ),
            145 =>
            array (
                'id' => '2646',
                'estado_id' => '11',
                'descricao' => 'Jequeri'
            ),
            146 =>
            array (
                'id' => '2647',
                'estado_id' => '11',
                'descricao' => 'Jequitaí'
            ),
            147 =>
            array (
                'id' => '2648',
                'estado_id' => '11',
                'descricao' => 'Jequitibá',
            ),
            148 =>
            array (
                'id' => '2649',
                'estado_id' => '11',
                'descricao' => 'Jequitinhonha'
            ),
            149 =>
            array (
                'id' => '2650',
                'estado_id' => '11',
                'descricao' => 'Jesuânia'
            ),
            150 =>
            array (
                'id' => '2651',
                'estado_id' => '11',
                'descricao' => 'Joaíma'
            ),
            151 =>
            array (
                'id' => '2652',
                'estado_id' => '11',
                'descricao' => 'Joanésia'
            ),
            152 =>
            array (
                'id' => '2653',
                'estado_id' => '11',
                'descricao' => 'João Monlevade'
            ),
            153 =>
            array (
                'id' => '2654',
                'estado_id' => '11',
                'descricao' => 'João Pinheiro'
            ),
            154 =>
            array (
                'id' => '2655',
                'estado_id' => '11',
                'descricao' => 'Joaquim Felício'
            ),
            155 =>
            array (
                'id' => '2656',
                'estado_id' => '11',
                'descricao' => 'Jordânia'
            ),
            156 =>
            array (
                'id' => '2657',
                'estado_id' => '11',
                'descricao' => 'José Gonçalves de Minas'
            ),
            157 =>
            array (
                'id' => '2658',
                'estado_id' => '11',
                'descricao' => 'José Raydan'
            ),
            158 =>
            array (
                'id' => '2659',
                'estado_id' => '11',
                'descricao' => 'Josenópolis'
            ),
            159 =>
            array (
                'id' => '2660',
                'estado_id' => '11',
                'descricao' => 'Nova União'
            ),
            160 =>
            array (
                'id' => '2661',
                'estado_id' => '11',
                'descricao' => 'Juatuba'
            ),
            161 =>
            array (
                'id' => '2662',
                'estado_id' => '11',
                'descricao' => 'Juiz de Fora',
            ),
            162 =>
            array (
                'id' => '2663',
                'estado_id' => '11',
                'descricao' => 'Juramento'
            ),
            163 =>
            array (
                'id' => '2664',
                'estado_id' => '11',
                'descricao' => 'Juruaia',
            ),
            164 =>
            array (
                'id' => '2665',
                'estado_id' => '11',
                'descricao' => 'Juvenília'
            ),
            165 =>
            array (
                'id' => '2666',
                'estado_id' => '11',
                'descricao' => 'Ladainha'
            ),
            166 =>
            array (
                'id' => '2667',
                'estado_id' => '11',
                'descricao' => 'Lagamar'
            ),
            167 =>
            array (
                'id' => '2668',
                'estado_id' => '11',
                'descricao' => 'Lagoa da Prata'
            ),
            168 =>
            array (
                'id' => '2669',
                'estado_id' => '11',
                'descricao' => 'Lagoa dos Patos'
            ),
            169 =>
            array (
                'id' => '2670',
                'estado_id' => '11',
                'descricao' => 'Lagoa Dourada'
            ),
            170 =>
            array (
                'id' => '2671',
                'estado_id' => '11',
                'descricao' => 'Lagoa Formosa'
            ),
            171 =>
            array (
                'id' => '2672',
                'estado_id' => '11',
                'descricao' => 'Lagoa Grande'
            ),
            172 =>
            array (
                'id' => '2673',
                'estado_id' => '11',
                'descricao' => 'Lagoa Santa',
            ),
            173 =>
            array (
                'id' => '2674',
                'estado_id' => '11',
                'descricao' => 'Lajinha'
            ),
            174 =>
            array (
                'id' => '2675',
                'estado_id' => '11',
                'descricao' => 'Lambari'
            ),
            175 =>
            array (
                'id' => '2676',
                'estado_id' => '11',
                'descricao' => 'Lamim'
            ),
            176 =>
            array (
                'id' => '2677',
                'estado_id' => '11',
                'descricao' => 'Laranjal'
            ),
            177 =>
            array (
                'id' => '2678',
                'estado_id' => '11',
                'descricao' => 'Lassance'
            ),
            178 =>
            array (
                'id' => '2679',
                'estado_id' => '11',
                'descricao' => 'Lavras',
            ),
            179 =>
            array (
                'id' => '2680',
                'estado_id' => '11',
                'descricao' => 'Leandro Ferreira'
            ),
            180 =>
            array (
                'id' => '2681',
                'estado_id' => '11',
                'descricao' => 'Leme do Prado'
            ),
            181 =>
            array (
                'id' => '2682',
                'estado_id' => '11',
                'descricao' => 'Leopoldina'
            ),
            182 =>
            array (
                'id' => '2683',
                'estado_id' => '11',
                'descricao' => 'Liberdade'
            ),
            183 =>
            array (
                'id' => '2684',
                'estado_id' => '11',
                'descricao' => 'Lima Duarte'
            ),
            184 =>
            array (
                'id' => '2685',
                'estado_id' => '11',
                'descricao' => 'Limeira do Oeste'
            ),
            185 =>
            array (
                'id' => '2686',
                'estado_id' => '11',
                'descricao' => 'Lontra'
            ),
            186 =>
            array (
                'id' => '2687',
                'estado_id' => '11',
                'descricao' => 'Luisburgo'
            ),
            187 =>
            array (
                'id' => '2688',
                'estado_id' => '11',
                'descricao' => 'Luislândia'
            ),
            188 =>
            array (
                'id' => '2689',
                'estado_id' => '11',
                'descricao' => 'Luminárias'
            ),
            189 =>
            array (
                'id' => '2690',
                'estado_id' => '11',
                'descricao' => 'Luz'
            ),
            190 =>
            array (
                'id' => '2691',
                'estado_id' => '11',
                'descricao' => 'Machacalis'
            ),
            191 =>
            array (
                'id' => '2692',
                'estado_id' => '11',
                'descricao' => 'Machado'
            ),
            192 =>
            array (
                'id' => '2693',
                'estado_id' => '11',
                'descricao' => 'Madre de Deus de Minas'
            ),
            193 =>
            array (
                'id' => '2694',
                'estado_id' => '11',
                'descricao' => 'Malacacheta'
            ),
            194 =>
            array (
                'id' => '2695',
                'estado_id' => '11',
                'descricao' => 'Mamonas'
            ),
            195 =>
            array (
                'id' => '2696',
                'estado_id' => '11',
                'descricao' => 'Manga'
            ),
            196 =>
            array (
                'id' => '2697',
                'estado_id' => '11',
                'descricao' => 'Manhuaçu'
            ),
            197 =>
            array (
                'id' => '2698',
                'estado_id' => '11',
                'descricao' => 'Manhumirim'
            ),
            198 =>
            array (
                'id' => '2699',
                'estado_id' => '11',
                'descricao' => 'Mantena'
            ),
            199 =>
            array (
                'id' => '2700',
                'estado_id' => '11',
                'descricao' => 'Maravilhas'
            ),
            200 =>
            array (
                'id' => '2701',
                'estado_id' => '11',
                'descricao' => 'Mar de Espanha'
            ),
            201 =>
            array (
                'id' => '2702',
                'estado_id' => '11',
                'descricao' => 'Maria da Fé'
            ),
            202 =>
            array (
                'id' => '2703',
                'estado_id' => '11',
                'descricao' => 'Mariana'
            ),
            203 =>
            array (
                'id' => '2704',
                'estado_id' => '11',
                'descricao' => 'Marilac'
            ),
            204 =>
            array (
                'id' => '2705',
                'estado_id' => '11',
                'descricao' => 'Mário Campos'
            ),
            205 =>
            array (
                'id' => '2706',
                'estado_id' => '11',
                'descricao' => 'Maripá de Minas'
            ),
            206 =>
            array (
                'id' => '2707',
                'estado_id' => '11',
                'descricao' => 'Marliéria'
            ),
            207 =>
            array (
                'id' => '2708',
                'estado_id' => '11',
                'descricao' => 'Marmelópolis'
            ),
            208 =>
            array (
                'id' => '2709',
                'estado_id' => '11',
                'descricao' => 'Martinho Campos'
            ),
            209 =>
            array (
                'id' => '2710',
                'estado_id' => '11',
                'descricao' => 'Martins Soares'
            ),
            210 =>
            array (
                'id' => '2711',
                'estado_id' => '11',
                'descricao' => 'Mata Verde'
            ),
            211 =>
            array (
                'id' => '2712',
                'estado_id' => '11',
                'descricao' => 'Materlândia'
            ),
            212 =>
            array (
                'id' => '2713',
                'estado_id' => '11',
                'descricao' => 'Mateus Leme'
            ),
            213 =>
            array (
                'id' => '2714',
                'estado_id' => '11',
                'descricao' => 'Matias Barbosa'
            ),
            214 =>
            array (
                'id' => '2715',
                'estado_id' => '11',
                'descricao' => 'Matias Cardoso'
            ),
            215 =>
            array (
                'id' => '2716',
                'estado_id' => '11',
                'descricao' => 'Matipó'
            ),
            216 =>
            array (
                'id' => '2717',
                'estado_id' => '11',
                'descricao' => 'Mato Verde'
            ),
            217 =>
            array (
                'id' => '2718',
                'estado_id' => '11',
                'descricao' => 'Matozinhos'
            ),
            218 =>
            array (
                'id' => '2719',
                'estado_id' => '11',
                'descricao' => 'Matutina',
            ),
            219 =>
            array (
                'id' => '2720',
                'estado_id' => '11',
                'descricao' => 'Medeiros'
            ),
            220 =>
            array (
                'id' => '2721',
                'estado_id' => '11',
                'descricao' => 'Medina'
            ),
            221 =>
            array (
                'id' => '2722',
                'estado_id' => '11',
                'descricao' => 'Mendes Pimentel'
            ),
            222 =>
            array (
                'id' => '2723',
                'estado_id' => '11',
                'descricao' => 'Mercês'
            ),
            223 =>
            array (
                'id' => '2724',
                'estado_id' => '11',
                'descricao' => 'Mesquita'
            ),
            224 =>
            array (
                'id' => '2725',
                'estado_id' => '11',
                'descricao' => 'Minas Novas'
            ),
            225 =>
            array (
                'id' => '2726',
                'estado_id' => '11',
                'descricao' => 'Minduri'
            ),
            226 =>
            array (
                'id' => '2727',
                'estado_id' => '11',
                'descricao' => 'Mirabela'
            ),
            227 =>
            array (
                'id' => '2728',
                'estado_id' => '11',
                'descricao' => 'Miradouro'
            ),
            228 =>
            array (
                'id' => '2729',
                'estado_id' => '11',
                'descricao' => 'Miraí'
            ),
            229 =>
            array (
                'id' => '2730',
                'estado_id' => '11',
                'descricao' => 'Miravânia'
            ),
            230 =>
            array (
                'id' => '2731',
                'estado_id' => '11',
                'descricao' => 'Moeda'
            ),
            231 =>
            array (
                'id' => '2732',
                'estado_id' => '11',
                'descricao' => 'Moema'
            ),
            232 =>
            array (
                'id' => '2733',
                'estado_id' => '11',
                'descricao' => 'Monjolos'
            ),
            233 =>
            array (
                'id' => '2734',
                'estado_id' => '11',
                'descricao' => 'Monsenhor Paulo'
            ),
            234 =>
            array (
                'id' => '2735',
                'estado_id' => '11',
                'descricao' => 'Montalvânia'
            ),
            235 =>
            array (
                'id' => '2736',
                'estado_id' => '11',
                'descricao' => 'Monte Alegre de Minas'
            ),
            236 =>
            array (
                'id' => '2737',
                'estado_id' => '11',
                'descricao' => 'Monte Azul'
            ),
            237 =>
            array (
                'id' => '2738',
                'estado_id' => '11',
                'descricao' => 'Monte Belo'
            ),
            238 =>
            array (
                'id' => '2739',
                'estado_id' => '11',
                'descricao' => 'Monte Carmelo'
            ),
            239 =>
            array (
                'id' => '2740',
                'estado_id' => '11',
                'descricao' => 'Monte Formoso'
            ),
            240 =>
            array (
                'id' => '2741',
                'estado_id' => '11',
                'descricao' => 'Monte Santo de Minas'
            ),
            241 =>
            array (
                'id' => '2742',
                'estado_id' => '11',
                'descricao' => 'Montes Claros'
            ),
            242 =>
            array (
                'id' => '2743',
                'estado_id' => '11',
                'descricao' => 'Monte Sião'
            ),
            243 =>
            array (
                'id' => '2744',
                'estado_id' => '11',
                'descricao' => 'Montezuma'
            ),
            244 =>
            array (
                'id' => '2745',
                'estado_id' => '11',
                'descricao' => 'Morada Nova de Minas'
            ),
            245 =>
            array (
                'id' => '2746',
                'estado_id' => '11',
                'descricao' => 'Morro da Garça'
            ),
            246 =>
            array (
                'id' => '2747',
                'estado_id' => '11',
                'descricao' => 'Morro do Pilar'
            ),
            247 =>
            array (
                'id' => '2748',
                'estado_id' => '11',
                'descricao' => 'Munhoz'
            ),
            248 =>
            array (
                'id' => '2749',
                'estado_id' => '11',
                'descricao' => 'Muriaé'
            ),
            249 =>
            array (
                'id' => '2750',
                'estado_id' => '11',
                'descricao' => 'Mutum'
            ),
            250 =>
            array (
                'id' => '2751',
                'estado_id' => '11',
                'descricao' => 'Muzambinho'
            ),
            251 =>
            array (
                'id' => '2752',
                'estado_id' => '11',
                'descricao' => 'Nacip Raydan'
            ),
            252 =>
            array (
                'id' => '2753',
                'estado_id' => '11',
                'descricao' => 'Nanuque'
            ),
            253 =>
            array (
                'id' => '2754',
                'estado_id' => '11',
                'descricao' => 'Naque'
            ),
            254 =>
            array (
                'id' => '2755',
                'estado_id' => '11',
                'descricao' => 'Natalândia'
            ),
            255 =>
            array (
                'id' => '2756',
                'estado_id' => '11',
                'descricao' => 'Natércia'
            ),
            256 =>
            array (
                'id' => '2757',
                'estado_id' => '11',
                'descricao' => 'Nazareno'
            ),
            257 =>
            array (
                'id' => '2758',
                'estado_id' => '11',
                'descricao' => 'Nepomuceno'
            ),
            258 =>
            array (
                'id' => '2759',
                'estado_id' => '11',
                'descricao' => 'Ninheira'
            ),
            259 =>
            array (
                'id' => '2760',
                'estado_id' => '11',
                'descricao' => 'Nova Belém'
            ),
            260 =>
            array (
                'id' => '2761',
                'estado_id' => '11',
                'descricao' => 'Nova Era'
            ),
            261 =>
            array (
                'id' => '2762',
                'estado_id' => '11',
                'descricao' => 'Nova Lima',
            ),
            262 =>
            array (
                'id' => '2763',
                'estado_id' => '11',
                'descricao' => 'Nova Módica'
            ),
            263 =>
            array (
                'id' => '2764',
                'estado_id' => '11',
                'descricao' => 'Nova Ponte'
            ),
            264 =>
            array (
                'id' => '2765',
                'estado_id' => '11',
                'descricao' => 'Nova Porteirinha'
            ),
            265 =>
            array (
                'id' => '2766',
                'estado_id' => '11',
                'descricao' => 'Nova Resende'
            ),
            266 =>
            array (
                'id' => '2767',
                'estado_id' => '11',
                'descricao' => 'Nova Serrana'
            ),
            267 =>
            array (
                'id' => '2768',
                'estado_id' => '11',
                'descricao' => 'Novo Cruzeiro'
            ),
            268 =>
            array (
                'id' => '2769',
                'estado_id' => '11',
                'descricao' => 'Novo Oriente de Minas'
            ),
            269 =>
            array (
                'id' => '2770',
                'estado_id' => '11',
                'descricao' => 'Novorizonte'
            ),
            270 =>
            array (
                'id' => '2771',
                'estado_id' => '11',
                'descricao' => 'Olaria'
            ),
            271 =>
            array (
                'id' => '2772',
                'estado_id' => '11',
                'descricao' => 'Olhos-D\'água'
            ),
            272 =>
            array (
                'id' => '2773',
                'estado_id' => '11',
                'descricao' => 'Olímpio Noronha'
            ),
            273 =>
            array (
                'id' => '2774',
                'estado_id' => '11',
                'descricao' => 'Oliveira'
            ),
            274 =>
            array (
                'id' => '2775',
                'estado_id' => '11',
                'descricao' => 'Oliveira Fortes'
            ),
            275 =>
            array (
                'id' => '2776',
                'estado_id' => '11',
                'descricao' => 'Onça de Pitangui'
            ),
            276 =>
            array (
                'id' => '2777',
                'estado_id' => '11',
                'descricao' => 'Oratórios'
            ),
            277 =>
            array (
                'id' => '2778',
                'estado_id' => '11',
                'descricao' => 'Orizânia'
            ),
            278 =>
            array (
                'id' => '2779',
                'estado_id' => '11',
                'descricao' => 'Ouro Branco'
            ),
            279 =>
            array (
                'id' => '2780',
                'estado_id' => '11',
                'descricao' => 'Ouro Fino'
            ),
            280 =>
            array (
                'id' => '2781',
                'estado_id' => '11',
                'descricao' => 'Ouro Preto'
            ),
            281 =>
            array (
                'id' => '2782',
                'estado_id' => '11',
                'descricao' => 'Ouro Verde de Minas'
            ),
            282 =>
            array (
                'id' => '2783',
                'estado_id' => '11',
                'descricao' => 'Padre Carvalho'
            ),
            283 =>
            array (
                'id' => '2784',
                'estado_id' => '11',
                'descricao' => 'Padre Paraíso'
            ),
            284 =>
            array (
                'id' => '2785',
                'estado_id' => '11',
                'descricao' => 'Paineiras'
            ),
            285 =>
            array (
                'id' => '2786',
                'estado_id' => '11',
                'descricao' => 'Pains'
            ),
            286 =>
            array (
                'id' => '2787',
                'estado_id' => '11',
                'descricao' => 'Pai Pedro'
            ),
            287 =>
            array (
                'id' => '2788',
                'estado_id' => '11',
                'descricao' => 'Paiva'
            ),
            288 =>
            array (
                'id' => '2789',
                'estado_id' => '11',
                'descricao' => 'Palma'
            ),
            289 =>
            array (
                'id' => '2790',
                'estado_id' => '11',
                'descricao' => 'Palmópolis'
            ),
            290 =>
            array (
                'id' => '2791',
                'estado_id' => '11',
                'descricao' => 'Papagaios'
            ),
            291 =>
            array (
                'id' => '2792',
                'estado_id' => '11',
                'descricao' => 'Paracatu'
            ),
            292 =>
            array (
                'id' => '2793',
                'estado_id' => '11',
                'descricao' => 'Pará de Minas'
            ),
            293 =>
            array (
                'id' => '2794',
                'estado_id' => '11',
                'descricao' => 'Paraguaçu'
            ),
            294 =>
            array (
                'id' => '2795',
                'estado_id' => '11',
                'descricao' => 'Paraisópolis'
            ),
            295 =>
            array (
                'id' => '2796',
                'estado_id' => '11',
                'descricao' => 'Paraopeba'
            ),
            296 =>
            array (
                'id' => '2797',
                'estado_id' => '11',
                'descricao' => 'Passabém'
            ),
            297 =>
            array (
                'id' => '2798',
                'estado_id' => '11',
                'descricao' => 'Passa Quatro'
            ),
            298 =>
            array (
                'id' => '2799',
                'estado_id' => '11',
                'descricao' => 'Passa Tempo'
            ),
            299 =>
            array (
                'id' => '2800',
                'estado_id' => '11',
                'descricao' => 'Passa-Vinte'
            ),
            300 =>
            array (
                'id' => '2801',
                'estado_id' => '11',
                'descricao' => 'Passos'
            ),
            301 =>
            array (
                'id' => '2802',
                'estado_id' => '11',
                'descricao' => 'Patis'
            ),
            302 =>
            array (
                'id' => '2803',
                'estado_id' => '11',
                'descricao' => 'Patos de Minas'
            ),
            303 =>
            array (
                'id' => '2804',
                'estado_id' => '11',
                'descricao' => 'Patrocínio'
            ),
            304 =>
            array (
                'id' => '2805',
                'estado_id' => '11',
                'descricao' => 'Patrocínio do Muriaé'
            ),
            305 =>
            array (
                'id' => '2806',
                'estado_id' => '11',
                'descricao' => 'Paula Cândido'
            ),
            306 =>
            array (
                'id' => '2807',
                'estado_id' => '11',
                'descricao' => 'Paulistas'
            ),
            307 =>
            array (
                'id' => '2808',
                'estado_id' => '11',
                'descricao' => 'Pavão'
            ),
            308 =>
            array (
                'id' => '2809',
                'estado_id' => '11',
                'descricao' => 'Peçanha'
            ),
            309 =>
            array (
                'id' => '2810',
                'estado_id' => '11',
                'descricao' => 'Pedra Azul'
            ),
            310 =>
            array (
                'id' => '2811',
                'estado_id' => '11',
                'descricao' => 'Pedra Bonita'
            ),
            311 =>
            array (
                'id' => '2812',
                'estado_id' => '11',
                'descricao' => 'Pedra do Anta'
            ),
            312 =>
            array (
                'id' => '2813',
                'estado_id' => '11',
                'descricao' => 'Pedra do Indaiá'
            ),
            313 =>
            array (
                'id' => '2814',
                'estado_id' => '11',
                'descricao' => 'Pedra Dourada'
            ),
            314 =>
            array (
                'id' => '2815',
                'estado_id' => '11',
                'descricao' => 'Pedralva'
            ),
            315 =>
            array (
                'id' => '2816',
                'estado_id' => '11',
                'descricao' => 'Pedras de Maria da Cruz'
            ),
            316 =>
            array (
                'id' => '2817',
                'estado_id' => '11',
                'descricao' => 'Pedrinópolis'
            ),
            317 =>
            array (
                'id' => '2818',
                'estado_id' => '11',
                'descricao' => 'Pedro Leopoldo'
            ),
            318 =>
            array (
                'id' => '2819',
                'estado_id' => '11',
                'descricao' => 'Pedro Teixeira'
            ),
            319 =>
            array (
                'id' => '2820',
                'estado_id' => '11',
                'descricao' => 'Pequeri'
            ),
            320 =>
            array (
                'id' => '2821',
                'estado_id' => '11',
                'descricao' => 'Pequi'
            ),
            321 =>
            array (
                'id' => '2822',
                'estado_id' => '11',
                'descricao' => 'Perdigão'
            ),
            322 =>
            array (
                'id' => '2823',
                'estado_id' => '11',
                'descricao' => 'Perdizes'
            ),
            323 =>
            array (
                'id' => '2824',
                'estado_id' => '11',
                'descricao' => 'Perdões'
            ),
            324 =>
            array (
                'id' => '2825',
                'estado_id' => '11',
                'descricao' => 'Periquito'
            ),
            325 =>
            array (
                'id' => '2826',
                'estado_id' => '11',
                'descricao' => 'Pescador'
            ),
            326 =>
            array (
                'id' => '2827',
                'estado_id' => '11',
                'descricao' => 'Piau'
            ),
            327 =>
            array (
                'id' => '2828',
                'estado_id' => '11',
                'descricao' => 'Piedade de Caratinga'
            ),
            328 =>
            array (
                'id' => '2829',
                'estado_id' => '11',
                'descricao' => 'Piedade de Ponte Nova'
            ),
            329 =>
            array (
                'id' => '2830',
                'estado_id' => '11',
                'descricao' => 'Piedade do Rio Grande'
            ),
            330 =>
            array (
                'id' => '2831',
                'estado_id' => '11',
                'descricao' => 'Piedade dos Gerais'
            ),
            331 =>
            array (
                'id' => '2832',
                'estado_id' => '11',
                'descricao' => 'Pimenta'
            ),
            332 =>
            array (
                'id' => '2833',
                'estado_id' => '11',
                'descricao' => 'Pingo-D\'água'
            ),
            333 =>
            array (
                'id' => '2834',
                'estado_id' => '11',
                'descricao' => 'Pintópolis'
            ),
            334 =>
            array (
                'id' => '2835',
                'estado_id' => '11',
                'descricao' => 'Piracema'
            ),
            335 =>
            array (
                'id' => '2836',
                'estado_id' => '11',
                'descricao' => 'Pirajuba'
            ),
            336 =>
            array (
                'id' => '2837',
                'estado_id' => '11',
                'descricao' => 'Piranga'
            ),
            337 =>
            array (
                'id' => '2838',
                'estado_id' => '11',
                'descricao' => 'Piranguçu'
            ),
            338 =>
            array (
                'id' => '2839',
                'estado_id' => '11',
                'descricao' => 'Piranguinho'
            ),
            339 =>
            array (
                'id' => '2840',
                'estado_id' => '11',
                'descricao' => 'Pirapetinga'
            ),
            340 =>
            array (
                'id' => '2841',
                'estado_id' => '11',
                'descricao' => 'Pirapora'
            ),
            341 =>
            array (
                'id' => '2842',
                'estado_id' => '11',
                'descricao' => 'Piraúba'
            ),
            342 =>
            array (
                'id' => '2843',
                'estado_id' => '11',
                'descricao' => 'Pitangui'
            ),
            343 =>
            array (
                'id' => '2844',
                'estado_id' => '11',
                'descricao' => 'Piumhi'
            ),
            344 =>
            array (
                'id' => '2845',
                'estado_id' => '11',
                'descricao' => 'Planura'
            ),
            345 =>
            array (
                'id' => '2846',
                'estado_id' => '11',
                'descricao' => 'Poço Fundo'
            ),
            346 =>
            array (
                'id' => '2847',
                'estado_id' => '11',
                'descricao' => 'Poços de Caldas',
            ),
            347 =>
            array (
                'id' => '2848',
                'estado_id' => '11',
                'descricao' => 'Pocrane'
            ),
            348 =>
            array (
                'id' => '2849',
                'estado_id' => '11',
                'descricao' => 'Pompéu'
            ),
            349 =>
            array (
                'id' => '2850',
                'estado_id' => '11',
                'descricao' => 'Ponte Nova'
            ),
            350 =>
            array (
                'id' => '2851',
                'estado_id' => '11',
                'descricao' => 'Ponto Chique'
            ),
            351 =>
            array (
                'id' => '2852',
                'estado_id' => '11',
                'descricao' => 'Ponto dos Volantes'
            ),
            352 =>
            array (
                'id' => '2853',
                'estado_id' => '11',
                'descricao' => 'Porteirinha'
            ),
            353 =>
            array (
                'id' => '2854',
                'estado_id' => '11',
                'descricao' => 'Porto Firme'
            ),
            354 =>
            array (
                'id' => '2855',
                'estado_id' => '11',
                'descricao' => 'Poté'
            ),
            355 =>
            array (
                'id' => '2856',
                'estado_id' => '11',
                'descricao' => 'Pouso Alegre',
            ),
            356 =>
            array (
                'id' => '2857',
                'estado_id' => '11',
                'descricao' => 'Pouso Alto'
            ),
            357 =>
            array (
                'id' => '2858',
                'estado_id' => '11',
                'descricao' => 'Prados'
            ),
            358 =>
            array (
                'id' => '2859',
                'estado_id' => '11',
                'descricao' => 'Prata'
            ),
            359 =>
            array (
                'id' => '2860',
                'estado_id' => '11',
                'descricao' => 'Pratápolis'
            ),
            360 =>
            array (
                'id' => '2861',
                'estado_id' => '11',
                'descricao' => 'Pratinha'
            ),
            361 =>
            array (
                'id' => '2862',
                'estado_id' => '11',
                'descricao' => 'Presidente Bernardes'
            ),
            362 =>
            array (
                'id' => '2863',
                'estado_id' => '11',
                'descricao' => 'Presidente Juscelino'
            ),
            363 =>
            array (
                'id' => '2864',
                'estado_id' => '11',
                'descricao' => 'Presidente Kubitschek'
            ),
            364 =>
            array (
                'id' => '2865',
                'estado_id' => '11',
                'descricao' => 'Presidente Olegário'
            ),
            365 =>
            array (
                'id' => '2866',
                'estado_id' => '11',
                'descricao' => 'Alto Jequitibá'
            ),
            366 =>
            array (
                'id' => '2867',
                'estado_id' => '11',
                'descricao' => 'Prudente de Morais'
            ),
            367 =>
            array (
                'id' => '2868',
                'estado_id' => '11',
                'descricao' => 'Quartel Geral'
            ),
            368 =>
            array (
                'id' => '2869',
                'estado_id' => '11',
                'descricao' => 'Queluzito'
            ),
            369 =>
            array (
                'id' => '2870',
                'estado_id' => '11',
                'descricao' => 'Raposos'
            ),
            370 =>
            array (
                'id' => '2871',
                'estado_id' => '11',
                'descricao' => 'Raul Soares'
            ),
            371 =>
            array (
                'id' => '2872',
                'estado_id' => '11',
                'descricao' => 'Recreio'
            ),
            372 =>
            array (
                'id' => '2873',
                'estado_id' => '11',
                'descricao' => 'Reduto'
            ),
            373 =>
            array (
                'id' => '2874',
                'estado_id' => '11',
                'descricao' => 'Resende Costa'
            ),
            374 =>
            array (
                'id' => '2875',
                'estado_id' => '11',
                'descricao' => 'Resplendor'
            ),
            375 =>
            array (
                'id' => '2876',
                'estado_id' => '11',
                'descricao' => 'Ressaquinha'
            ),
            376 =>
            array (
                'id' => '2877',
                'estado_id' => '11',
                'descricao' => 'Riachinho'
            ),
            377 =>
            array (
                'id' => '2878',
                'estado_id' => '11',
                'descricao' => 'Riacho dos Machados'
            ),
            378 =>
            array (
                'id' => '2879',
                'estado_id' => '11',
                'descricao' => 'Ribeirão das Neves'
            ),
            379 =>
            array (
                'id' => '2880',
                'estado_id' => '11',
                'descricao' => 'Ribeirão Vermelho'
            ),
            380 =>
            array (
                'id' => '2881',
                'estado_id' => '11',
                'descricao' => 'Rio Acima'
            ),
            381 =>
            array (
                'id' => '2882',
                'estado_id' => '11',
                'descricao' => 'Rio Casca'
            ),
            382 =>
            array (
                'id' => '2883',
                'estado_id' => '11',
                'descricao' => 'Rio Doce'
            ),
            383 =>
            array (
                'id' => '2884',
                'estado_id' => '11',
                'descricao' => 'Rio do Prado'
            ),
            384 =>
            array (
                'id' => '2885',
                'estado_id' => '11',
                'descricao' => 'Rio Espera'
            ),
            385 =>
            array (
                'id' => '2886',
                'estado_id' => '11',
                'descricao' => 'Rio Manso'
            ),
            386 =>
            array (
                'id' => '2887',
                'estado_id' => '11',
                'descricao' => 'Rio Novo'
            ),
            387 =>
            array (
                'id' => '2888',
                'estado_id' => '11',
                'descricao' => 'Rio Paranaíba'
            ),
            388 =>
            array (
                'id' => '2889',
                'estado_id' => '11',
                'descricao' => 'Rio Pardo de Minas'
            ),
            389 =>
            array (
                'id' => '2890',
                'estado_id' => '11',
                'descricao' => 'Rio Piracicaba'
            ),
            390 =>
            array (
                'id' => '2891',
                'estado_id' => '11',
                'descricao' => 'Rio Pomba'
            ),
            391 =>
            array (
                'id' => '2892',
                'estado_id' => '11',
                'descricao' => 'Rio Preto'
            ),
            392 =>
            array (
                'id' => '2893',
                'estado_id' => '11',
                'descricao' => 'Rio Vermelho'
            ),
            393 =>
            array (
                'id' => '2894',
                'estado_id' => '11',
                'descricao' => 'Ritápolis'
            ),
            394 =>
            array (
                'id' => '2895',
                'estado_id' => '11',
                'descricao' => 'Rochedo de Minas'
            ),
            395 =>
            array (
                'id' => '2896',
                'estado_id' => '11',
                'descricao' => 'Rodeiro'
            ),
            396 =>
            array (
                'id' => '2897',
                'estado_id' => '11',
                'descricao' => 'Romaria'
            ),
            397 =>
            array (
                'id' => '2898',
                'estado_id' => '11',
                'descricao' => 'Rosário da Limeira'
            ),
            398 =>
            array (
                'id' => '2899',
                'estado_id' => '11',
                'descricao' => 'Rubelita'
            ),
            399 =>
            array (
                'id' => '2900',
                'estado_id' => '11',
                'descricao' => 'Rubim'
            ),
            400 =>
            array (
                'id' => '2901',
                'estado_id' => '11',
                'descricao' => 'Sabará'
            ),
            401 =>
            array (
                'id' => '2902',
                'estado_id' => '11',
                'descricao' => 'Sabinópolis'
            ),
            402 =>
            array (
                'id' => '2903',
                'estado_id' => '11',
                'descricao' => 'Sacramento'
            ),
            403 =>
            array (
                'id' => '2904',
                'estado_id' => '11',
                'descricao' => 'Salinas'
            ),
            404 =>
            array (
                'id' => '2905',
                'estado_id' => '11',
                'descricao' => 'Salto da Divisa'
            ),
            405 =>
            array (
                'id' => '2906',
                'estado_id' => '11',
                'descricao' => 'Santa Bárbara'
            ),
            406 =>
            array (
                'id' => '2907',
                'estado_id' => '11',
                'descricao' => 'Santa Bárbara do Leste'
            ),
            407 =>
            array (
                'id' => '2908',
                'estado_id' => '11',
                'descricao' => 'Santa Bárbara do Monte Verde'
            ),
            408 =>
            array (
                'id' => '2909',
                'estado_id' => '11',
                'descricao' => 'Santa Bárbara do Tugúrio'
            ),
            409 =>
            array (
                'id' => '2910',
                'estado_id' => '11',
                'descricao' => 'Santa Cruz de Minas'
            ),
            410 =>
            array (
                'id' => '2911',
                'estado_id' => '11',
                'descricao' => 'Santa Cruz de Salinas'
            ),
            411 =>
            array (
                'id' => '2912',
                'estado_id' => '11',
                'descricao' => 'Santa Cruz do Escalvado'
            ),
            412 =>
            array (
                'id' => '2913',
                'estado_id' => '11',
                'descricao' => 'Santa Efigênia de Minas'
            ),
            413 =>
            array (
                'id' => '2914',
                'estado_id' => '11',
                'descricao' => 'Santa Fé de Minas'
            ),
            414 =>
            array (
                'id' => '2915',
                'estado_id' => '11',
                'descricao' => 'Santa Helena de Minas'
            ),
            415 =>
            array (
                'id' => '2916',
                'estado_id' => '11',
                'descricao' => 'Santa Juliana'
            ),
            416 =>
            array (
                'id' => '2917',
                'estado_id' => '11',
                'descricao' => 'Santa Luzia'
            ),
            417 =>
            array (
                'id' => '2918',
                'estado_id' => '11',
                'descricao' => 'Santa Margarida'
            ),
            418 =>
            array (
                'id' => '2919',
                'estado_id' => '11',
                'descricao' => 'Santa Maria de Itabira'
            ),
            419 =>
            array (
                'id' => '2920',
                'estado_id' => '11',
                'descricao' => 'Santa Maria do Salto'
            ),
            420 =>
            array (
                'id' => '2921',
                'estado_id' => '11',
                'descricao' => 'Santa Maria do Suaçuí'
            ),
            421 =>
            array (
                'id' => '2922',
                'estado_id' => '11',
                'descricao' => 'Santana da Vargem'
            ),
            422 =>
            array (
                'id' => '2923',
                'estado_id' => '11',
                'descricao' => 'Santana de Cataguases'
            ),
            423 =>
            array (
                'id' => '2924',
                'estado_id' => '11',
                'descricao' => 'Santana de Pirapama'
            ),
            424 =>
            array (
                'id' => '2925',
                'estado_id' => '11',
                'descricao' => 'Santana do Deserto'
            ),
            425 =>
            array (
                'id' => '2926',
                'estado_id' => '11',
                'descricao' => 'Santana do Garambéu'
            ),
            426 =>
            array (
                'id' => '2927',
                'estado_id' => '11',
                'descricao' => 'Santana do Jacaré'
            ),
            427 =>
            array (
                'id' => '2928',
                'estado_id' => '11',
                'descricao' => 'Santana do Manhuaçu'
            ),
            428 =>
            array (
                'id' => '2929',
                'estado_id' => '11',
                'descricao' => 'Santana do Paraíso'
            ),
            429 =>
            array (
                'id' => '2930',
                'estado_id' => '11',
                'descricao' => 'Santana do Riacho'
            ),
            430 =>
            array (
                'id' => '2931',
                'estado_id' => '11',
                'descricao' => 'Santana dos Montes'
            ),
            431 =>
            array (
                'id' => '2932',
                'estado_id' => '11',
                'descricao' => 'Santa Rita de Caldas'
            ),
            432 =>
            array (
                'id' => '2933',
                'estado_id' => '11',
                'descricao' => 'Santa Rita de Jacutinga'
            ),
            433 =>
            array (
                'id' => '2934',
                'estado_id' => '11',
                'descricao' => 'Santa Rita de Minas'
            ),
            434 =>
            array (
                'id' => '2935',
                'estado_id' => '11',
                'descricao' => 'Santa Rita de Ibitipoca'
            ),
            435 =>
            array (
                'id' => '2936',
                'estado_id' => '11',
                'descricao' => 'Santa Rita do Itueto'
            ),
            436 =>
            array (
                'id' => '2937',
                'estado_id' => '11',
                'descricao' => 'Santa Rita do Sapucaí'
            ),
            437 =>
            array (
                'id' => '2938',
                'estado_id' => '11',
                'descricao' => 'Santa Rosa da Serra'
            ),
            438 =>
            array (
                'id' => '2939',
                'estado_id' => '11',
                'descricao' => 'Santa Vitória'
            ),
            439 =>
            array (
                'id' => '2940',
                'estado_id' => '11',
                'descricao' => 'Santo Antônio do Amparo'
            ),
            440 =>
            array (
                'id' => '2941',
                'estado_id' => '11',
                'descricao' => 'Santo Antônio do Aventureiro'
            ),
            441 =>
            array (
                'id' => '2942',
                'estado_id' => '11',
                'descricao' => 'Santo Antônio do Grama'
            ),
            442 =>
            array (
                'id' => '2943',
                'estado_id' => '11',
                'descricao' => 'Santo Antônio do Itambé'
            ),
            443 =>
            array (
                'id' => '2944',
                'estado_id' => '11',
                'descricao' => 'Santo Antônio do Jacinto'
            ),
            444 =>
            array (
                'id' => '2945',
                'estado_id' => '11',
                'descricao' => 'Santo Antônio do Monte'
            ),
            445 =>
            array (
                'id' => '2946',
                'estado_id' => '11',
                'descricao' => 'Santo Antônio do Retiro'
            ),
            446 =>
            array (
                'id' => '2947',
                'estado_id' => '11',
                'descricao' => 'Santo Antônio do Rio Abaixo'
            ),
            447 =>
            array (
                'id' => '2948',
                'estado_id' => '11',
                'descricao' => 'Santo Hipólito'
            ),
            448 =>
            array (
                'id' => '2949',
                'estado_id' => '11',
                'descricao' => 'Santos Dumont'
            ),
            449 =>
            array (
                'id' => '2950',
                'estado_id' => '11',
                'descricao' => 'São Bento Abade'
            ),
            450 =>
            array (
                'id' => '2951',
                'estado_id' => '11',
                'descricao' => 'São Brás do Suaçuí'
            ),
            451 =>
            array (
                'id' => '2952',
                'estado_id' => '11',
                'descricao' => 'São Domingos das Dores'
            ),
            452 =>
            array (
                'id' => '2953',
                'estado_id' => '11',
                'descricao' => 'São Domingos do Prata'
            ),
            453 =>
            array (
                'id' => '2954',
                'estado_id' => '11',
                'descricao' => 'São Félix de Minas'
            ),
            454 =>
            array (
                'id' => '2955',
                'estado_id' => '11',
                'descricao' => 'São Francisco'
            ),
            455 =>
            array (
                'id' => '2956',
                'estado_id' => '11',
                'descricao' => 'São Francisco de Paula'
            ),
            456 =>
            array (
                'id' => '2957',
                'estado_id' => '11',
                'descricao' => 'São Francisco de Sales'
            ),
            457 =>
            array (
                'id' => '2958',
                'estado_id' => '11',
                'descricao' => 'São Francisco do Glória'
            ),
            458 =>
            array (
                'id' => '2959',
                'estado_id' => '11',
                'descricao' => 'São Geraldo'
            ),
            459 =>
            array (
                'id' => '2960',
                'estado_id' => '11',
                'descricao' => 'São Geraldo da Piedade'
            ),
            460 =>
            array (
                'id' => '2961',
                'estado_id' => '11',
                'descricao' => 'São Geraldo do Baixio'
            ),
            461 =>
            array (
                'id' => '2962',
                'estado_id' => '11',
                'descricao' => 'São Gonçalo do Abaeté'
            ),
            462 =>
            array (
                'id' => '2963',
                'estado_id' => '11',
                'descricao' => 'São Gonçalo do Pará'
            ),
            463 =>
            array (
                'id' => '2964',
                'estado_id' => '11',
                'descricao' => 'São Gonçalo do Rio Abaixo'
            ),
            464 =>
            array (
                'id' => '2965',
                'estado_id' => '11',
                'descricao' => 'São Gonçalo do Sapucaí'
            ),
            465 =>
            array (
                'id' => '2966',
                'estado_id' => '11',
                'descricao' => 'São Gotardo'
            ),
            466 =>
            array (
                'id' => '2967',
                'estado_id' => '11',
                'descricao' => 'São João Batista do Glória'
            ),
            467 =>
            array (
                'id' => '2968',
                'estado_id' => '11',
                'descricao' => 'São João da Lagoa'
            ),
            468 =>
            array (
                'id' => '2969',
                'estado_id' => '11',
                'descricao' => 'São João da Mata'
            ),
            469 =>
            array (
                'id' => '2970',
                'estado_id' => '11',
                'descricao' => 'São João da Ponte'
            ),
            470 =>
            array (
                'id' => '2971',
                'estado_id' => '11',
                'descricao' => 'São João das Missões'
            ),
            471 =>
            array (
                'id' => '2972',
                'estado_id' => '11',
                'descricao' => 'São João Del Rei'
            ),
            472 =>
            array (
                'id' => '2973',
                'estado_id' => '11',
                'descricao' => 'São João do Manhuaçu'
            ),
            473 =>
            array (
                'id' => '2974',
                'estado_id' => '11',
                'descricao' => 'São João do Manteninha'
            ),
            474 =>
            array (
                'id' => '2975',
                'estado_id' => '11',
                'descricao' => 'São João do Oriente'
            ),
            475 =>
            array (
                'id' => '2976',
                'estado_id' => '11',
                'descricao' => 'São João do Pacuí'
            ),
            476 =>
            array (
                'id' => '2977',
                'estado_id' => '11',
                'descricao' => 'São João do Paraíso'
            ),
            477 =>
            array (
                'id' => '2978',
                'estado_id' => '11',
                'descricao' => 'São João Evangelista'
            ),
            478 =>
            array (
                'id' => '2979',
                'estado_id' => '11',
                'descricao' => 'São João Nepomuceno'
            ),
            479 =>
            array (
                'id' => '2980',
                'estado_id' => '11',
                'descricao' => 'São Joaquim de Bicas'
            ),
            480 =>
            array (
                'id' => '2981',
                'estado_id' => '11',
                'descricao' => 'São José da Barra'
            ),
            481 =>
            array (
                'id' => '2982',
                'estado_id' => '11',
                'descricao' => 'São José da Lapa'
            ),
            482 =>
            array (
                'id' => '2983',
                'estado_id' => '11',
                'descricao' => 'São José da Safira'
            ),
            483 =>
            array (
                'id' => '2984',
                'estado_id' => '11',
                'descricao' => 'São José da Varginha'
            ),
            484 =>
            array (
                'id' => '2985',
                'estado_id' => '11',
                'descricao' => 'São José do Alegre'
            ),
            485 =>
            array (
                'id' => '2986',
                'estado_id' => '11',
                'descricao' => 'São José do Divino'
            ),
            486 =>
            array (
                'id' => '2987',
                'estado_id' => '11',
                'descricao' => 'São José do Goiabal'
            ),
            487 =>
            array (
                'id' => '2988',
                'estado_id' => '11',
                'descricao' => 'São José do Jacuri'
            ),
            488 =>
            array (
                'id' => '2989',
                'estado_id' => '11',
                'descricao' => 'São José do Mantimento'
            ),
            489 =>
            array (
                'id' => '2990',
                'estado_id' => '11',
                'descricao' => 'São Lourenço'
            ),
            490 =>
            array (
                'id' => '2991',
                'estado_id' => '11',
                'descricao' => 'São Miguel do Anta'
            ),
            491 =>
            array (
                'id' => '2992',
                'estado_id' => '11',
                'descricao' => 'São Pedro da União'
            ),
            492 =>
            array (
                'id' => '2993',
                'estado_id' => '11',
                'descricao' => 'São Pedro dos Ferros'
            ),
            493 =>
            array (
                'id' => '2994',
                'estado_id' => '11',
                'descricao' => 'São Pedro do Suaçuí'
            ),
            494 =>
            array (
                'id' => '2995',
                'estado_id' => '11',
                'descricao' => 'São Romão'
            ),
            495 =>
            array (
                'id' => '2996',
                'estado_id' => '11',
                'descricao' => 'São Roque de Minas'
            ),
            496 =>
            array (
                'id' => '2997',
                'estado_id' => '11',
                'descricao' => 'São Sebastião da Bela Vista'
            ),
            497 =>
            array (
                'id' => '2998',
                'estado_id' => '11',
                'descricao' => 'São Sebastião da Vargem Alegre'
            ),
            498 =>
            array (
                'id' => '2999',
                'estado_id' => '11',
                'descricao' => 'São Sebastião do Anta'
            ),
            499 =>
            array (
                'id' => '3000',
                'estado_id' => '11',
                'descricao' => 'São Sebastião do Maranhão'
            ),
        ));
        \DB::table('municipios')->insert(array (
            0 =>
            array (
                'id' => '3001',
                'estado_id' => '11',
                'descricao' => 'São Sebastião do Oeste'
            ),
            1 =>
            array (
                'id' => '3002',
                'estado_id' => '11',
                'descricao' => 'São Sebastião do Paraíso'
            ),
            2 =>
            array (
                'id' => '3003',
                'estado_id' => '11',
                'descricao' => 'São Sebastião do Rio Preto'
            ),
            3 =>
            array (
                'id' => '3004',
                'estado_id' => '11',
                'descricao' => 'São Sebastião do Rio Verde'
            ),
            4 =>
            array (
                'id' => '3005',
                'estado_id' => '11',
                'descricao' => 'São Tiago'
            ),
            5 =>
            array (
                'id' => '3006',
                'estado_id' => '11',
                'descricao' => 'São Tomás de Aquino'
            ),
            6 =>
            array (
                'id' => '3007',
                'estado_id' => '11',
                'descricao' => 'São Thomé das Letras'
            ),
            7 =>
            array (
                'id' => '3008',
                'estado_id' => '11',
                'descricao' => 'São Vicente de Minas'
            ),
            8 =>
            array (
                'id' => '3009',
                'estado_id' => '11',
                'descricao' => 'Sapucaí-Mirim'
            ),
            9 =>
            array (
                'id' => '3010',
                'estado_id' => '11',
                'descricao' => 'Sardoá'
            ),
            10 =>
            array (
                'id' => '3011',
                'estado_id' => '11',
                'descricao' => 'Sarzedo'
            ),
            11 =>
            array (
                'id' => '3012',
                'estado_id' => '11',
                'descricao' => 'Setubinha'
            ),
            12 =>
            array (
                'id' => '3013',
                'estado_id' => '11',
                'descricao' => 'Sem-Peixe'
            ),
            13 =>
            array (
                'id' => '3014',
                'estado_id' => '11',
                'descricao' => 'Senador Amaral'
            ),
            14 =>
            array (
                'id' => '3015',
                'estado_id' => '11',
                'descricao' => 'Senador Cortes'
            ),
            15 =>
            array (
                'id' => '3016',
                'estado_id' => '11',
                'descricao' => 'Senador Firmino'
            ),
            16 =>
            array (
                'id' => '3017',
                'estado_id' => '11',
                'descricao' => 'Senador José Bento'
            ),
            17 =>
            array (
                'id' => '3018',
                'estado_id' => '11',
                'descricao' => 'Senador Modestino Gonçalves'
            ),
            18 =>
            array (
                'id' => '3019',
                'estado_id' => '11',
                'descricao' => 'Senhora de Oliveira'
            ),
            19 =>
            array (
                'id' => '3020',
                'estado_id' => '11',
                'descricao' => 'Senhora do Porto'
            ),
            20 =>
            array (
                'id' => '3021',
                'estado_id' => '11',
                'descricao' => 'Senhora dos Remédios'
            ),
            21 =>
            array (
                'id' => '3022',
                'estado_id' => '11',
                'descricao' => 'Sericita'
            ),
            22 =>
            array (
                'id' => '3023',
                'estado_id' => '11',
                'descricao' => 'Seritinga'
            ),
            23 =>
            array (
                'id' => '3024',
                'estado_id' => '11',
                'descricao' => 'Serra Azul de Minas'
            ),
            24 =>
            array (
                'id' => '3025',
                'estado_id' => '11',
                'descricao' => 'Serra da Saudade'
            ),
            25 =>
            array (
                'id' => '3026',
                'estado_id' => '11',
                'descricao' => 'Serra dos Aimorés'
            ),
            26 =>
            array (
                'id' => '3027',
                'estado_id' => '11',
                'descricao' => 'Serra do Salitre'
            ),
            27 =>
            array (
                'id' => '3028',
                'estado_id' => '11',
                'descricao' => 'Serrania'
            ),
            28 =>
            array (
                'id' => '3029',
                'estado_id' => '11',
                'descricao' => 'Serranópolis de Minas'
            ),
            29 =>
            array (
                'id' => '3030',
                'estado_id' => '11',
                'descricao' => 'Serranos'
            ),
            30 =>
            array (
                'id' => '3031',
                'estado_id' => '11',
                'descricao' => 'Serro'
            ),
            31 =>
            array (
                'id' => '3032',
                'estado_id' => '11',
                'descricao' => 'Sete Lagoas'
            ),
            32 =>
            array (
                'id' => '3033',
                'estado_id' => '11',
                'descricao' => 'Silveirânia'
            ),
            33 =>
            array (
                'id' => '3034',
                'estado_id' => '11',
                'descricao' => 'Silvianópolis'
            ),
            34 =>
            array (
                'id' => '3035',
                'estado_id' => '11',
                'descricao' => 'Simão Pereira'
            ),
            35 =>
            array (
                'id' => '3036',
                'estado_id' => '11',
                'descricao' => 'Simonésia'
            ),
            36 =>
            array (
                'id' => '3037',
                'estado_id' => '11',
                'descricao' => 'Sobrália'
            ),
            37 =>
            array (
                'id' => '3038',
                'estado_id' => '11',
                'descricao' => 'Soledade de Minas'
            ),
            38 =>
            array (
                'id' => '3039',
                'estado_id' => '11',
                'descricao' => 'Tabuleiro'
            ),
            39 =>
            array (
                'id' => '3040',
                'estado_id' => '11',
                'descricao' => 'Taiobeiras'
            ),
            40 =>
            array (
                'id' => '3041',
                'estado_id' => '11',
                'descricao' => 'Taparuba'
            ),
            41 =>
            array (
                'id' => '3042',
                'estado_id' => '11',
                'descricao' => 'Tapira'
            ),
            42 =>
            array (
                'id' => '3043',
                'estado_id' => '11',
                'descricao' => 'Tapiraí'
            ),
            43 =>
            array (
                'id' => '3044',
                'estado_id' => '11',
                'descricao' => 'Taquaraçu de Minas'
            ),
            44 =>
            array (
                'id' => '3045',
                'estado_id' => '11',
                'descricao' => 'Tarumirim'
            ),
            45 =>
            array (
                'id' => '3046',
                'estado_id' => '11',
                'descricao' => 'Teixeiras'
            ),
            46 =>
            array (
                'id' => '3047',
                'estado_id' => '11',
                'descricao' => 'Teófilo Otoni'
            ),
            47 =>
            array (
                'id' => '3048',
                'estado_id' => '11',
                'descricao' => 'Timóteo'
            ),
            48 =>
            array (
                'id' => '3049',
                'estado_id' => '11',
                'descricao' => 'Tiradentes',
            ),
            49 =>
            array (
                'id' => '3050',
                'estado_id' => '11',
                'descricao' => 'Tiros'
            ),
            50 =>
            array (
                'id' => '3051',
                'estado_id' => '11',
                'descricao' => 'Tocantins'
            ),
            51 =>
            array (
                'id' => '3052',
                'estado_id' => '11',
                'descricao' => 'Tocos do Moji'
            ),
            52 =>
            array (
                'id' => '3053',
                'estado_id' => '11',
                'descricao' => 'Toledo'
            ),
            53 =>
            array (
                'id' => '3054',
                'estado_id' => '11',
                'descricao' => 'Tombos'
            ),
            54 =>
            array (
                'id' => '3055',
                'estado_id' => '11',
                'descricao' => 'Três Corações'
            ),
            55 =>
            array (
                'id' => '3056',
                'estado_id' => '11',
                'descricao' => 'Três Marias'
            ),
            56 =>
            array (
                'id' => '3057',
                'estado_id' => '11',
                'descricao' => 'Três Pontas'
            ),
            57 =>
            array (
                'id' => '3058',
                'estado_id' => '11',
                'descricao' => 'Tumiritinga'
            ),
            58 =>
            array (
                'id' => '3059',
                'estado_id' => '11',
                'descricao' => 'Tupaciguara'
            ),
            59 =>
            array (
                'id' => '3060',
                'estado_id' => '11',
                'descricao' => 'Turmalina'
            ),
            60 =>
            array (
                'id' => '3061',
                'estado_id' => '11',
                'descricao' => 'Turvolândia'
            ),
            61 =>
            array (
                'id' => '3062',
                'estado_id' => '11',
                'descricao' => 'Ubá'
            ),
            62 =>
            array (
                'id' => '3063',
                'estado_id' => '11',
                'descricao' => 'Ubaí'
            ),
            63 =>
            array (
                'id' => '3064',
                'estado_id' => '11',
                'descricao' => 'Ubaporanga'
            ),
            64 =>
            array (
                'id' => '3065',
                'estado_id' => '11',
                'descricao' => 'Uberaba',
            ),
            65 =>
            array (
                'id' => '3066',
                'estado_id' => '11',
                'descricao' => 'Uberlândia',
            ),
            66 =>
            array (
                'id' => '3067',
                'estado_id' => '11',
                'descricao' => 'Umburatiba'
            ),
            67 =>
            array (
                'id' => '3068',
                'estado_id' => '11',
                'descricao' => 'Unaí'
            ),
            68 =>
            array (
                'id' => '3069',
                'estado_id' => '11',
                'descricao' => 'União de Minas'
            ),
            69 =>
            array (
                'id' => '3070',
                'estado_id' => '11',
                'descricao' => 'Uruana de Minas'
            ),
            70 =>
            array (
                'id' => '3071',
                'estado_id' => '11',
                'descricao' => 'Urucânia'
            ),
            71 =>
            array (
                'id' => '3072',
                'estado_id' => '11',
                'descricao' => 'Urucuia'
            ),
            72 =>
            array (
                'id' => '3073',
                'estado_id' => '11',
                'descricao' => 'Vargem Alegre'
            ),
            73 =>
            array (
                'id' => '3074',
                'estado_id' => '11',
                'descricao' => 'Vargem Bonita'
            ),
            74 =>
            array (
                'id' => '3075',
                'estado_id' => '11',
                'descricao' => 'Vargem Grande do Rio Pardo'
            ),
            75 =>
            array (
                'id' => '3076',
                'estado_id' => '11',
                'descricao' => 'Varginha',
            ),
            76 =>
            array (
                'id' => '3077',
                'estado_id' => '11',
                'descricao' => 'Varjão de Minas'
            ),
            77 =>
            array (
                'id' => '3078',
                'estado_id' => '11',
                'descricao' => 'Várzea da Palma'
            ),
            78 =>
            array (
                'id' => '3079',
                'estado_id' => '11',
                'descricao' => 'Varzelândia'
            ),
            79 =>
            array (
                'id' => '3080',
                'estado_id' => '11',
                'descricao' => 'Vazante'
            ),
            80 =>
            array (
                'id' => '3081',
                'estado_id' => '11',
                'descricao' => 'Verdelândia'
            ),
            81 =>
            array (
                'id' => '3082',
                'estado_id' => '11',
                'descricao' => 'Veredinha'
            ),
            82 =>
            array (
                'id' => '3083',
                'estado_id' => '11',
                'descricao' => 'Veríssimo'
            ),
            83 =>
            array (
                'id' => '3084',
                'estado_id' => '11',
                'descricao' => 'Vermelho Novo'
            ),
            84 =>
            array (
                'id' => '3085',
                'estado_id' => '11',
                'descricao' => 'Vespasiano'
            ),
            85 =>
            array (
                'id' => '3086',
                'estado_id' => '11',
                'descricao' => 'Viçosa',
            ),
            86 =>
            array (
                'id' => '3087',
                'estado_id' => '11',
                'descricao' => 'Vieiras'
            ),
            87 =>
            array (
                'id' => '3088',
                'estado_id' => '11',
                'descricao' => 'Mathias Lobato'
            ),
            88 =>
            array (
                'id' => '3089',
                'estado_id' => '11',
                'descricao' => 'Virgem da Lapa'
            ),
            89 =>
            array (
                'id' => '3090',
                'estado_id' => '11',
                'descricao' => 'Virgínia'
            ),
            90 =>
            array (
                'id' => '3091',
                'estado_id' => '11',
                'descricao' => 'Virginópolis'
            ),
            91 =>
            array (
                'id' => '3092',
                'estado_id' => '11',
                'descricao' => 'Virgolândia'
            ),
            92 =>
            array (
                'id' => '3093',
                'estado_id' => '11',
                'descricao' => 'Visconde do Rio Branco'
            ),
            93 =>
            array (
                'id' => '3094',
                'estado_id' => '11',
                'descricao' => 'Volta Grande'
            ),
            94 =>
            array (
                'id' => '3095',
                'estado_id' => '11',
                'descricao' => 'Wenceslau Braz'
            ),
            95 =>
            array (
                'id' => '3096',
                'estado_id' => '8',
                'descricao' => 'Afonso Cláudio'
            ),
            96 =>
            array (
                'id' => '3097',
                'estado_id' => '8',
                'descricao' => 'Águia Branca'
            ),
            97 =>
            array (
                'id' => '3098',
                'estado_id' => '8',
                'descricao' => 'Água Doce do Norte'
            ),
            98 =>
            array (
                'id' => '3099',
                'estado_id' => '8',
                'descricao' => 'Alegre'
            ),
            99 =>
            array (
                'id' => '3100',
                'estado_id' => '8',
                'descricao' => 'Alfredo Chaves'
            ),
            100 =>
            array (
                'id' => '3101',
                'estado_id' => '8',
                'descricao' => 'Alto Rio Novo'
            ),
            101 =>
            array (
                'id' => '3102',
                'estado_id' => '8',
                'descricao' => 'Anchieta'
            ),
            102 =>
            array (
                'id' => '3103',
                'estado_id' => '8',
                'descricao' => 'Apiacá'
            ),
            103 =>
            array (
                'id' => '3104',
                'estado_id' => '8',
                'descricao' => 'Aracruz'
            ),
            104 =>
            array (
                'id' => '3105',
                'estado_id' => '8',
                'descricao' => 'Atilio Vivacqua'
            ),
            105 =>
            array (
                'id' => '3106',
                'estado_id' => '8',
                'descricao' => 'Baixo Guandu'
            ),
            106 =>
            array (
                'id' => '3107',
                'estado_id' => '8',
                'descricao' => 'Barra de São Francisco'
            ),
            107 =>
            array (
                'id' => '3108',
                'estado_id' => '8',
                'descricao' => 'Boa Esperança'
            ),
            108 =>
            array (
                'id' => '3109',
                'estado_id' => '8',
                'descricao' => 'Bom Jesus do Norte'
            ),
            109 =>
            array (
                'id' => '3110',
                'estado_id' => '8',
                'descricao' => 'Brejetuba'
            ),
            110 =>
            array (
                'id' => '3111',
                'estado_id' => '8',
                'descricao' => 'Cachoeiro de Itapemirim'
            ),
            111 =>
            array (
                'id' => '3112',
                'estado_id' => '8',
                'descricao' => 'Cariacica'
            ),
            112 =>
            array (
                'id' => '3113',
                'estado_id' => '8',
                'descricao' => 'Castelo'
            ),
            113 =>
            array (
                'id' => '3114',
                'estado_id' => '8',
                'descricao' => 'Colatina'
            ),
            114 =>
            array (
                'id' => '3115',
                'estado_id' => '8',
                'descricao' => 'Conceição da Barra'
            ),
            115 =>
            array (
                'id' => '3116',
                'estado_id' => '8',
                'descricao' => 'Conceição do Castelo'
            ),
            116 =>
            array (
                'id' => '3117',
                'estado_id' => '8',
                'descricao' => 'Divino de São Lourenço'
            ),
            117 =>
            array (
                'id' => '3118',
                'estado_id' => '8',
                'descricao' => 'Domingos Martins'
            ),
            118 =>
            array (
                'id' => '3119',
                'estado_id' => '8',
                'descricao' => 'Dores do Rio Preto'
            ),
            119 =>
            array (
                'id' => '3120',
                'estado_id' => '8',
                'descricao' => 'Ecoporanga'
            ),
            120 =>
            array (
                'id' => '3121',
                'estado_id' => '8',
                'descricao' => 'Fundão'
            ),
            121 =>
            array (
                'id' => '3122',
                'estado_id' => '8',
                'descricao' => 'Governador Lindenberg'
            ),
            122 =>
            array (
                'id' => '3123',
                'estado_id' => '8',
                'descricao' => 'Guaçuí'
            ),
            123 =>
            array (
                'id' => '3124',
                'estado_id' => '8',
                'descricao' => 'Guarapari'
            ),
            124 =>
            array (
                'id' => '3125',
                'estado_id' => '8',
                'descricao' => 'Ibatiba'
            ),
            125 =>
            array (
                'id' => '3126',
                'estado_id' => '8',
                'descricao' => 'Ibiraçu'
            ),
            126 =>
            array (
                'id' => '3127',
                'estado_id' => '8',
                'descricao' => 'Ibitirama'
            ),
            127 =>
            array (
                'id' => '3128',
                'estado_id' => '8',
                'descricao' => 'Iconha'
            ),
            128 =>
            array (
                'id' => '3129',
                'estado_id' => '8',
                'descricao' => 'Irupi'
            ),
            129 =>
            array (
                'id' => '3130',
                'estado_id' => '8',
                'descricao' => 'Itaguaçu'
            ),
            130 =>
            array (
                'id' => '3131',
                'estado_id' => '8',
                'descricao' => 'Itapemirim'
            ),
            131 =>
            array (
                'id' => '3132',
                'estado_id' => '8',
                'descricao' => 'Itarana'
            ),
            132 =>
            array (
                'id' => '3133',
                'estado_id' => '8',
                'descricao' => 'Iúna'
            ),
            133 =>
            array (
                'id' => '3134',
                'estado_id' => '8',
                'descricao' => 'Jaguaré'
            ),
            134 =>
            array (
                'id' => '3135',
                'estado_id' => '8',
                'descricao' => 'Jerônimo Monteiro'
            ),
            135 =>
            array (
                'id' => '3136',
                'estado_id' => '8',
                'descricao' => 'João Neiva'
            ),
            136 =>
            array (
                'id' => '3137',
                'estado_id' => '8',
                'descricao' => 'Laranja da Terra'
            ),
            137 =>
            array (
                'id' => '3138',
                'estado_id' => '8',
                'descricao' => 'Linhares'
            ),
            138 =>
            array (
                'id' => '3139',
                'estado_id' => '8',
                'descricao' => 'Mantenópolis'
            ),
            139 =>
            array (
                'id' => '3140',
                'estado_id' => '8',
                'descricao' => 'Marataízes'
            ),
            140 =>
            array (
                'id' => '3141',
                'estado_id' => '8',
                'descricao' => 'Marechal Floriano'
            ),
            141 =>
            array (
                'id' => '3142',
                'estado_id' => '8',
                'descricao' => 'Marilândia'
            ),
            142 =>
            array (
                'id' => '3143',
                'estado_id' => '8',
                'descricao' => 'Mimoso do Sul'
            ),
            143 =>
            array (
                'id' => '3144',
                'estado_id' => '8',
                'descricao' => 'Montanha'
            ),
            144 =>
            array (
                'id' => '3145',
                'estado_id' => '8',
                'descricao' => 'Mucurici'
            ),
            145 =>
            array (
                'id' => '3146',
                'estado_id' => '8',
                'descricao' => 'Muniz Freire'
            ),
            146 =>
            array (
                'id' => '3147',
                'estado_id' => '8',
                'descricao' => 'Muqui'
            ),
            147 =>
            array (
                'id' => '3148',
                'estado_id' => '8',
                'descricao' => 'Nova Venécia'
            ),
            148 =>
            array (
                'id' => '3149',
                'estado_id' => '8',
                'descricao' => 'Pancas'
            ),
            149 =>
            array (
                'id' => '3150',
                'estado_id' => '8',
                'descricao' => 'Pedro Canário'
            ),
            150 =>
            array (
                'id' => '3151',
                'estado_id' => '8',
                'descricao' => 'Pinheiros'
            ),
            151 =>
            array (
                'id' => '3152',
                'estado_id' => '8',
                'descricao' => 'Piúma'
            ),
            152 =>
            array (
                'id' => '3153',
                'estado_id' => '8',
                'descricao' => 'Ponto Belo'
            ),
            153 =>
            array (
                'id' => '3154',
                'estado_id' => '8',
                'descricao' => 'Presidente Kennedy'
            ),
            154 =>
            array (
                'id' => '3155',
                'estado_id' => '8',
                'descricao' => 'Rio Bananal'
            ),
            155 =>
            array (
                'id' => '3156',
                'estado_id' => '8',
                'descricao' => 'Rio Novo do Sul'
            ),
            156 =>
            array (
                'id' => '3157',
                'estado_id' => '8',
                'descricao' => 'Santa Leopoldina'
            ),
            157 =>
            array (
                'id' => '3158',
                'estado_id' => '8',
                'descricao' => 'Santa Maria de Jetibá'
            ),
            158 =>
            array (
                'id' => '3159',
                'estado_id' => '8',
                'descricao' => 'Santa Teresa'
            ),
            159 =>
            array (
                'id' => '3160',
                'estado_id' => '8',
                'descricao' => 'São Domingos do Norte'
            ),
            160 =>
            array (
                'id' => '3161',
                'estado_id' => '8',
                'descricao' => 'São Gabriel da Palha'
            ),
            161 =>
            array (
                'id' => '3162',
                'estado_id' => '8',
                'descricao' => 'São José do Calçado'
            ),
            162 =>
            array (
                'id' => '3163',
                'estado_id' => '8',
                'descricao' => 'São Mateus'
            ),
            163 =>
            array (
                'id' => '3164',
                'estado_id' => '8',
                'descricao' => 'São Roque do Canaã'
            ),
            164 =>
            array (
                'id' => '3165',
                'estado_id' => '8',
                'descricao' => 'Serra'
            ),
            165 =>
            array (
                'id' => '3166',
                'estado_id' => '8',
                'descricao' => 'Sooretama'
            ),
            166 =>
            array (
                'id' => '3167',
                'estado_id' => '8',
                'descricao' => 'Vargem Alta'
            ),
            167 =>
            array (
                'id' => '3168',
                'estado_id' => '8',
                'descricao' => 'Venda Nova do Imigrante'
            ),
            168 =>
            array (
                'id' => '3169',
                'estado_id' => '8',
                'descricao' => 'Viana'
            ),
            169 =>
            array (
                'id' => '3170',
                'estado_id' => '8',
                'descricao' => 'Vila Pavão'
            ),
            170 =>
            array (
                'id' => '3171',
                'estado_id' => '8',
                'descricao' => 'Vila Valério'
            ),
            171 =>
            array (
                'id' => '3172',
                'estado_id' => '8',
                'descricao' => 'Vila Velha',
            ),
            172 =>
            array (
                'id' => '3173',
                'estado_id' => '8',
                'descricao' => 'Vitória',
            ),
            173 =>
            array (
                'id' => '3174',
                'estado_id' => '19',
                'descricao' => 'Angra dos Reis'
            ),
            174 =>
            array (
                'id' => '3175',
                'estado_id' => '19',
                'descricao' => 'Aperibé'
            ),
            175 =>
            array (
                'id' => '3176',
                'estado_id' => '19',
                'descricao' => 'Araruama'
            ),
            176 =>
            array (
                'id' => '3177',
                'estado_id' => '19',
                'descricao' => 'Areal'
            ),
            177 =>
            array (
                'id' => '3178',
                'estado_id' => '19',
                'descricao' => 'Armação dos Búzios',
            ),
            178 =>
            array (
                'id' => '3179',
                'estado_id' => '19',
                'descricao' => 'Arraial do Cabo'
            ),
            179 =>
            array (
                'id' => '3180',
                'estado_id' => '19',
                'descricao' => 'Barra do Piraí'
            ),
            180 =>
            array (
                'id' => '3181',
                'estado_id' => '19',
                'descricao' => 'Barra Mansa'
            ),
            181 =>
            array (
                'id' => '3182',
                'estado_id' => '19',
                'descricao' => 'Belford Roxo'
            ),
            182 =>
            array (
                'id' => '3183',
                'estado_id' => '19',
                'descricao' => 'Bom Jardim'
            ),
            183 =>
            array (
                'id' => '3184',
                'estado_id' => '19',
                'descricao' => 'Bom Jesus do Itabapoana'
            ),
            184 =>
            array (
                'id' => '3185',
                'estado_id' => '19',
                'descricao' => 'Cabo Frio',
            ),
            185 =>
            array (
                'id' => '3186',
                'estado_id' => '19',
                'descricao' => 'Cachoeiras de Macacu'
            ),
            186 =>
            array (
                'id' => '3187',
                'estado_id' => '19',
                'descricao' => 'Cambuci'
            ),
            187 =>
            array (
                'id' => '3188',
                'estado_id' => '19',
                'descricao' => 'Carapebus'
            ),
            188 =>
            array (
                'id' => '3189',
                'estado_id' => '19',
                'descricao' => 'Comendador Levy Gasparian'
            ),
            189 =>
            array (
                'id' => '3190',
                'estado_id' => '19',
                'descricao' => 'Campos dos Goytacazes'
            ),
            190 =>
            array (
                'id' => '3191',
                'estado_id' => '19',
                'descricao' => 'Cantagalo'
            ),
            191 =>
            array (
                'id' => '3192',
                'estado_id' => '19',
                'descricao' => 'Cardoso Moreira'
            ),
            192 =>
            array (
                'id' => '3193',
                'estado_id' => '19',
                'descricao' => 'Carmo'
            ),
            193 =>
            array (
                'id' => '3194',
                'estado_id' => '19',
                'descricao' => 'Casimiro de Abreu'
            ),
            194 =>
            array (
                'id' => '3195',
                'estado_id' => '19',
                'descricao' => 'Conceição de Macabu'
            ),
            195 =>
            array (
                'id' => '3196',
                'estado_id' => '19',
                'descricao' => 'Cordeiro'
            ),
            196 =>
            array (
                'id' => '3197',
                'estado_id' => '19',
                'descricao' => 'Duas Barras'
            ),
            197 =>
            array (
                'id' => '3198',
                'estado_id' => '19',
                'descricao' => 'Duque de Caxias'
            ),
            198 =>
            array (
                'id' => '3199',
                'estado_id' => '19',
                'descricao' => 'Engenheiro Paulo de Frontin'
            ),
            199 =>
            array (
                'id' => '3200',
                'estado_id' => '19',
                'descricao' => 'Guapimirim'
            ),
            200 =>
            array (
                'id' => '3201',
                'estado_id' => '19',
                'descricao' => 'Iguaba Grande',
            ),
            201 =>
            array (
                'id' => '3202',
                'estado_id' => '19',
                'descricao' => 'Itaboraí'
            ),
            202 =>
            array (
                'id' => '3203',
                'estado_id' => '19',
                'descricao' => 'Itaguaí'
            ),
            203 =>
            array (
                'id' => '3204',
                'estado_id' => '19',
                'descricao' => 'Italva'
            ),
            204 =>
            array (
                'id' => '3205',
                'estado_id' => '19',
                'descricao' => 'Itaocara'
            ),
            205 =>
            array (
                'id' => '3206',
                'estado_id' => '19',
                'descricao' => 'Itaperuna'
            ),
            206 =>
            array (
                'id' => '3207',
                'estado_id' => '19',
                'descricao' => 'Itatiaia'
            ),
            207 =>
            array (
                'id' => '3208',
                'estado_id' => '19',
                'descricao' => 'Japeri'
            ),
            208 =>
            array (
                'id' => '3209',
                'estado_id' => '19',
                'descricao' => 'Laje do Muriaé'
            ),
            209 =>
            array (
                'id' => '3210',
                'estado_id' => '19',
                'descricao' => 'Macaé',
            ),
            210 =>
            array (
                'id' => '3211',
                'estado_id' => '19',
                'descricao' => 'Macuco'
            ),
            211 =>
            array (
                'id' => '3212',
                'estado_id' => '19',
                'descricao' => 'Magé'
            ),
            212 =>
            array (
                'id' => '3213',
                'estado_id' => '19',
                'descricao' => 'Mangaratiba'
            ),
            213 =>
            array (
                'id' => '3214',
                'estado_id' => '19',
                'descricao' => 'Maricá',
            ),
            214 =>
            array (
                'id' => '3215',
                'estado_id' => '19',
                'descricao' => 'Mendes'
            ),
            215 =>
            array (
                'id' => '3216',
                'estado_id' => '19',
                'descricao' => 'Mesquita'
            ),
            216 =>
            array (
                'id' => '3217',
                'estado_id' => '19',
                'descricao' => 'Miguel Pereira',
            ),
            217 =>
            array (
                'id' => '3218',
                'estado_id' => '19',
                'descricao' => 'Miracema'
            ),
            218 =>
            array (
                'id' => '3219',
                'estado_id' => '19',
                'descricao' => 'Natividade'
            ),
            219 =>
            array (
                'id' => '3220',
                'estado_id' => '19',
                'descricao' => 'Nilópolis'
            ),
            220 =>
            array (
                'id' => '3221',
                'estado_id' => '19',
                'descricao' => 'Niterói',
            ),
            221 =>
            array (
                'id' => '3222',
                'estado_id' => '19',
                'descricao' => 'Nova Friburgo',
            ),
            222 =>
            array (
                'id' => '3223',
                'estado_id' => '19',
                'descricao' => 'Nova Iguaçu'
            ),
            223 =>
            array (
                'id' => '3224',
                'estado_id' => '19',
                'descricao' => 'Paracambi'
            ),
            224 =>
            array (
                'id' => '3225',
                'estado_id' => '19',
                'descricao' => 'Paraíba do Sul'
            ),
            225 =>
            array (
                'id' => '3226',
                'estado_id' => '19',
                'descricao' => 'Paraty'
            ),
            226 =>
            array (
                'id' => '3227',
                'estado_id' => '19',
                'descricao' => 'Paty do Alferes'
            ),
            227 =>
            array (
                'id' => '3228',
                'estado_id' => '19',
                'descricao' => 'Petrópolis',
            ),
            228 =>
            array (
                'id' => '3229',
                'estado_id' => '19',
                'descricao' => 'Pinheiral'
            ),
            229 =>
            array (
                'id' => '3230',
                'estado_id' => '19',
                'descricao' => 'Piraí'
            ),
            230 =>
            array (
                'id' => '3231',
                'estado_id' => '19',
                'descricao' => 'Porciúncula'
            ),
            231 =>
            array (
                'id' => '3232',
                'estado_id' => '19',
                'descricao' => 'Porto Real'
            ),
            232 =>
            array (
                'id' => '3233',
                'estado_id' => '19',
                'descricao' => 'Quatis'
            ),
            233 =>
            array (
                'id' => '3234',
                'estado_id' => '19',
                'descricao' => 'Queimados'
            ),
            234 =>
            array (
                'id' => '3235',
                'estado_id' => '19',
                'descricao' => 'Quissamã'
            ),
            235 =>
            array (
                'id' => '3236',
                'estado_id' => '19',
                'descricao' => 'Resende',
            ),
            236 =>
            array (
                'id' => '3237',
                'estado_id' => '19',
                'descricao' => 'Rio Bonito'
            ),
            237 =>
            array (
                'id' => '3238',
                'estado_id' => '19',
                'descricao' => 'Rio Claro'
            ),
            238 =>
            array (
                'id' => '3239',
                'estado_id' => '19',
                'descricao' => 'Rio das Flores'
            ),
            239 =>
            array (
                'id' => '3240',
                'estado_id' => '19',
                'descricao' => 'Rio das Ostras',
            ),
            240 =>
            array (
                'id' => '3241',
                'estado_id' => '19',
                'descricao' => 'Rio de Janeiro',
            ),
            241 =>
            array (
                'id' => '3242',
                'estado_id' => '19',
                'descricao' => 'Santa Maria Madalena'
            ),
            242 =>
            array (
                'id' => '3243',
                'estado_id' => '19',
                'descricao' => 'Santo Antônio de Pádua'
            ),
            243 =>
            array (
                'id' => '3244',
                'estado_id' => '19',
                'descricao' => 'São Francisco de Itabapoana'
            ),
            244 =>
            array (
                'id' => '3245',
                'estado_id' => '19',
                'descricao' => 'São Fidélis'
            ),
            245 =>
            array (
                'id' => '3246',
                'estado_id' => '19',
                'descricao' => 'São Gonçalo'
            ),
            246 =>
            array (
                'id' => '3247',
                'estado_id' => '19',
                'descricao' => 'São João da Barra'
            ),
            247 =>
            array (
                'id' => '3248',
                'estado_id' => '19',
                'descricao' => 'São João de Meriti'
            ),
            248 =>
            array (
                'id' => '3249',
                'estado_id' => '19',
                'descricao' => 'São José de Ubá'
            ),
            249 =>
            array (
                'id' => '3250',
                'estado_id' => '19',
                'descricao' => 'São José do Vale do Rio Preto'
            ),
            250 =>
            array (
                'id' => '3251',
                'estado_id' => '19',
                'descricao' => 'São Pedro da Aldeia'
            ),
            251 =>
            array (
                'id' => '3252',
                'estado_id' => '19',
                'descricao' => 'São Sebastião do Alto'
            ),
            252 =>
            array (
                'id' => '3253',
                'estado_id' => '19',
                'descricao' => 'Sapucaia'
            ),
            253 =>
            array (
                'id' => '3254',
                'estado_id' => '19',
                'descricao' => 'Saquarema'
            ),
            254 =>
            array (
                'id' => '3255',
                'estado_id' => '19',
                'descricao' => 'Seropédica'
            ),
            255 =>
            array (
                'id' => '3256',
                'estado_id' => '19',
                'descricao' => 'Silva Jardim'
            ),
            256 =>
            array (
                'id' => '3257',
                'estado_id' => '19',
                'descricao' => 'Sumidouro'
            ),
            257 =>
            array (
                'id' => '3258',
                'estado_id' => '19',
                'descricao' => 'Tanguá'
            ),
            258 =>
            array (
                'id' => '3259',
                'estado_id' => '19',
                'descricao' => 'Teresópolis',
            ),
            259 =>
            array (
                'id' => '3260',
                'estado_id' => '19',
                'descricao' => 'Trajano de Morais'
            ),
            260 =>
            array (
                'id' => '3261',
                'estado_id' => '19',
                'descricao' => 'Três Rios'
            ),
            261 =>
            array (
                'id' => '3262',
                'estado_id' => '19',
                'descricao' => 'Valença'
            ),
            262 =>
            array (
                'id' => '3263',
                'estado_id' => '19',
                'descricao' => 'Varre-Sai'
            ),
            263 =>
            array (
                'id' => '3264',
                'estado_id' => '19',
                'descricao' => 'Vassouras'
            ),
            264 =>
            array (
                'id' => '3265',
                'estado_id' => '19',
                'descricao' => 'Volta Redonda',
            ),
            265 =>
            array (
                'id' => '3266',
                'estado_id' => '26',
                'descricao' => 'Adamantina',
            ),
            266 =>
            array (
                'id' => '3267',
                'estado_id' => '26',
                'descricao' => 'Adolfo'
            ),
            267 =>
            array (
                'id' => '3268',
                'estado_id' => '26',
                'descricao' => 'Aguaí'
            ),
            268 =>
            array (
                'id' => '3269',
                'estado_id' => '26',
                'descricao' => 'Águas da Prata',
            ),
            269 =>
            array (
                'id' => '3270',
                'estado_id' => '26',
                'descricao' => 'Águas de Lindóia'
            ),
            270 =>
            array (
                'id' => '3271',
                'estado_id' => '26',
                'descricao' => 'Águas de Santa Bárbara'
            ),
            271 =>
            array (
                'id' => '3272',
                'estado_id' => '26',
                'descricao' => 'Águas de São Pedro',
            ),
            272 =>
            array (
                'id' => '3273',
                'estado_id' => '26',
                'descricao' => 'Agudos'
            ),
            273 =>
            array (
                'id' => '3274',
                'estado_id' => '26',
                'descricao' => 'Alambari'
            ),
            274 =>
            array (
                'id' => '3275',
                'estado_id' => '26',
                'descricao' => 'Alfredo Marcondes'
            ),
            275 =>
            array (
                'id' => '3276',
                'estado_id' => '26',
                'descricao' => 'Altair'
            ),
            276 =>
            array (
                'id' => '3277',
                'estado_id' => '26',
                'descricao' => 'Altinópolis'
            ),
            277 =>
            array (
                'id' => '3278',
                'estado_id' => '26',
                'descricao' => 'Alto Alegre'
            ),
            278 =>
            array (
                'id' => '3279',
                'estado_id' => '26',
                'descricao' => 'Alumínio'
            ),
            279 =>
            array (
                'id' => '3280',
                'estado_id' => '26',
                'descricao' => 'Álvares Florence'
            ),
            280 =>
            array (
                'id' => '3281',
                'estado_id' => '26',
                'descricao' => 'Álvares Machado'
            ),
            281 =>
            array (
                'id' => '3282',
                'estado_id' => '26',
                'descricao' => 'Álvaro de Carvalho'
            ),
            282 =>
            array (
                'id' => '3283',
                'estado_id' => '26',
                'descricao' => 'Alvinlândia'
            ),
            283 =>
            array (
                'id' => '3284',
                'estado_id' => '26',
                'descricao' => 'Americana',
            ),
            284 =>
            array (
                'id' => '3285',
                'estado_id' => '26',
                'descricao' => 'Américo Brasiliense'
            ),
            285 =>
            array (
                'id' => '3286',
                'estado_id' => '26',
                'descricao' => 'Américo de Campos'
            ),
            286 =>
            array (
                'id' => '3287',
                'estado_id' => '26',
                'descricao' => 'Amparo',
            ),
            287 =>
            array (
                'id' => '3288',
                'estado_id' => '26',
                'descricao' => 'Analândia'
            ),
            288 =>
            array (
                'id' => '3289',
                'estado_id' => '26',
                'descricao' => 'Andradina'
            ),
            289 =>
            array (
                'id' => '3290',
                'estado_id' => '26',
                'descricao' => 'Angatuba'
            ),
            290 =>
            array (
                'id' => '3291',
                'estado_id' => '26',
                'descricao' => 'Anhembi'
            ),
            291 =>
            array (
                'id' => '3292',
                'estado_id' => '26',
                'descricao' => 'Anhumas'
            ),
            292 =>
            array (
                'id' => '3293',
                'estado_id' => '26',
                'descricao' => 'Aparecida'
            ),
            293 =>
            array (
                'id' => '3294',
                'estado_id' => '26',
                'descricao' => 'Aparecida D\'oeste'
            ),
            294 =>
            array (
                'id' => '3295',
                'estado_id' => '26',
                'descricao' => 'Apiaí'
            ),
            295 =>
            array (
                'id' => '3296',
                'estado_id' => '26',
                'descricao' => 'Araçariguama'
            ),
            296 =>
            array (
                'id' => '3297',
                'estado_id' => '26',
                'descricao' => 'Araçatuba',
            ),
            297 =>
            array (
                'id' => '3298',
                'estado_id' => '26',
                'descricao' => 'Araçoiaba da Serra'
            ),
            298 =>
            array (
                'id' => '3299',
                'estado_id' => '26',
                'descricao' => 'Aramina'
            ),
            299 =>
            array (
                'id' => '3300',
                'estado_id' => '26',
                'descricao' => 'Arandu'
            ),
            300 =>
            array (
                'id' => '3301',
                'estado_id' => '26',
                'descricao' => 'Arapeí'
            ),
            301 =>
            array (
                'id' => '3302',
                'estado_id' => '26',
                'descricao' => 'Araraquara',
            ),
            302 =>
            array (
                'id' => '3303',
                'estado_id' => '26',
                'descricao' => 'Araras',
            ),
            303 =>
            array (
                'id' => '3304',
                'estado_id' => '26',
                'descricao' => 'Arco-Íris'
            ),
            304 =>
            array (
                'id' => '3305',
                'estado_id' => '26',
                'descricao' => 'Arealva'
            ),
            305 =>
            array (
                'id' => '3306',
                'estado_id' => '26',
                'descricao' => 'Areias'
            ),
            306 =>
            array (
                'id' => '3307',
                'estado_id' => '26',
                'descricao' => 'Areiópolis'
            ),
            307 =>
            array (
                'id' => '3308',
                'estado_id' => '26',
                'descricao' => 'Ariranha'
            ),
            308 =>
            array (
                'id' => '3309',
                'estado_id' => '26',
                'descricao' => 'Artur Nogueira'
            ),
            309 =>
            array (
                'id' => '3310',
                'estado_id' => '26',
                'descricao' => 'Arujá',
            ),
            310 =>
            array (
                'id' => '3311',
                'estado_id' => '26',
                'descricao' => 'Aspásia'
            ),
            311 =>
            array (
                'id' => '3312',
                'estado_id' => '26',
                'descricao' => 'Assis',
            ),
            312 =>
            array (
                'id' => '3313',
                'estado_id' => '26',
                'descricao' => 'Atibaia',
            ),
            313 =>
            array (
                'id' => '3314',
                'estado_id' => '26',
                'descricao' => 'Auriflama'
            ),
            314 =>
            array (
                'id' => '3315',
                'estado_id' => '26',
                'descricao' => 'Avaí'
            ),
            315 =>
            array (
                'id' => '3316',
                'estado_id' => '26',
                'descricao' => 'Avanhandava'
            ),
            316 =>
            array (
                'id' => '3317',
                'estado_id' => '26',
                'descricao' => 'Avaré',
            ),
            317 =>
            array (
                'id' => '3318',
                'estado_id' => '26',
                'descricao' => 'Bady Bassitt'
            ),
            318 =>
            array (
                'id' => '3319',
                'estado_id' => '26',
                'descricao' => 'Balbinos'
            ),
            319 =>
            array (
                'id' => '3320',
                'estado_id' => '26',
                'descricao' => 'Bálsamo'
            ),
            320 =>
            array (
                'id' => '3321',
                'estado_id' => '26',
                'descricao' => 'Bananal'
            ),
            321 =>
            array (
                'id' => '3322',
                'estado_id' => '26',
                'descricao' => 'Barão de Antonina'
            ),
            322 =>
            array (
                'id' => '3323',
                'estado_id' => '26',
                'descricao' => 'Barbosa'
            ),
            323 =>
            array (
                'id' => '3324',
                'estado_id' => '26',
                'descricao' => 'Bariri'
            ),
            324 =>
            array (
                'id' => '3325',
                'estado_id' => '26',
                'descricao' => 'Barra Bonita',
            ),
            325 =>
            array (
                'id' => '3326',
                'estado_id' => '26',
                'descricao' => 'Barra do Chapéu'
            ),
            326 =>
            array (
                'id' => '3327',
                'estado_id' => '26',
                'descricao' => 'Barra do Turvo'
            ),
            327 =>
            array (
                'id' => '3328',
                'estado_id' => '26',
                'descricao' => 'Barretos',
            ),
            328 =>
            array (
                'id' => '3329',
                'estado_id' => '26',
                'descricao' => 'Barrinha'
            ),
            329 =>
            array (
                'id' => '3330',
                'estado_id' => '26',
                'descricao' => 'Barueri',
            ),
            330 =>
            array (
                'id' => '3331',
                'estado_id' => '26',
                'descricao' => 'Bastos'
            ),
            331 =>
            array (
                'id' => '3332',
                'estado_id' => '26',
                'descricao' => 'Batatais',
            ),
            332 =>
            array (
                'id' => '3333',
                'estado_id' => '26',
                'descricao' => 'Bauru',
            ),
            333 =>
            array (
                'id' => '3334',
                'estado_id' => '26',
                'descricao' => 'Bebedouro',
            ),
            334 =>
            array (
                'id' => '3335',
                'estado_id' => '26',
                'descricao' => 'Bento de Abreu'
            ),
            335 =>
            array (
                'id' => '3336',
                'estado_id' => '26',
                'descricao' => 'Bernardino de Campos'
            ),
            336 =>
            array (
                'id' => '3337',
                'estado_id' => '26',
                'descricao' => 'Bertioga'
            ),
            337 =>
            array (
                'id' => '3338',
                'estado_id' => '26',
                'descricao' => 'Bilac'
            ),
            338 =>
            array (
                'id' => '3339',
                'estado_id' => '26',
                'descricao' => 'Birigui'
            ),
            339 =>
            array (
                'id' => '3340',
                'estado_id' => '26',
                'descricao' => 'Biritiba-Mirim'
            ),
            340 =>
            array (
                'id' => '3341',
                'estado_id' => '26',
                'descricao' => 'Boa Esperança do Sul'
            ),
            341 =>
            array (
                'id' => '3342',
                'estado_id' => '26',
                'descricao' => 'Bocaina'
            ),
            342 =>
            array (
                'id' => '3343',
                'estado_id' => '26',
                'descricao' => 'Bofete'
            ),
            343 =>
            array (
                'id' => '3344',
                'estado_id' => '26',
                'descricao' => 'Boituva',
            ),
            344 =>
            array (
                'id' => '3345',
                'estado_id' => '26',
                'descricao' => 'Bom Jesus dos Perdões'
            ),
            345 =>
            array (
                'id' => '3346',
                'estado_id' => '26',
                'descricao' => 'Bom Sucesso de Itararé'
            ),
            346 =>
            array (
                'id' => '3347',
                'estado_id' => '26',
                'descricao' => 'Borá'
            ),
            347 =>
            array (
                'id' => '3348',
                'estado_id' => '26',
                'descricao' => 'Boracéia'
            ),
            348 =>
            array (
                'id' => '3349',
                'estado_id' => '26',
                'descricao' => 'Borborema'
            ),
            349 =>
            array (
                'id' => '3350',
                'estado_id' => '26',
                'descricao' => 'Borebi'
            ),
            350 =>
            array (
                'id' => '3351',
                'estado_id' => '26',
                'descricao' => 'Botucatu',
            ),
            351 =>
            array (
                'id' => '3352',
                'estado_id' => '26',
                'descricao' => 'Bragança Paulista',
            ),
            352 =>
            array (
                'id' => '3353',
                'estado_id' => '26',
                'descricao' => 'Braúna'
            ),
            353 =>
            array (
                'id' => '3354',
                'estado_id' => '26',
                'descricao' => 'Brejo Alegre'
            ),
            354 =>
            array (
                'id' => '3355',
                'estado_id' => '26',
                'descricao' => 'Brodowski'
            ),
            355 =>
            array (
                'id' => '3356',
                'estado_id' => '26',
                'descricao' => 'Brotas'
            ),
            356 =>
            array (
                'id' => '3357',
                'estado_id' => '26',
                'descricao' => 'Buri'
            ),
            357 =>
            array (
                'id' => '3358',
                'estado_id' => '26',
                'descricao' => 'Buritama'
            ),
            358 =>
            array (
                'id' => '3359',
                'estado_id' => '26',
                'descricao' => 'Buritizal'
            ),
            359 =>
            array (
                'id' => '3360',
                'estado_id' => '26',
                'descricao' => 'Cabrália Paulista'
            ),
            360 =>
            array (
                'id' => '3361',
                'estado_id' => '26',
                'descricao' => 'Cabreúva'
            ),
            361 =>
            array (
                'id' => '3362',
                'estado_id' => '26',
                'descricao' => 'Caçapava'
            ),
            362 =>
            array (
                'id' => '3363',
                'estado_id' => '26',
                'descricao' => 'Cachoeira Paulista',
            ),
            363 =>
            array (
                'id' => '3364',
                'estado_id' => '26',
                'descricao' => 'Caconde'
            ),
            364 =>
            array (
                'id' => '3365',
                'estado_id' => '26',
                'descricao' => 'Cafelândia'
            ),
            365 =>
            array (
                'id' => '3366',
                'estado_id' => '26',
                'descricao' => 'Caiabu'
            ),
            366 =>
            array (
                'id' => '3367',
                'estado_id' => '26',
                'descricao' => 'Caieiras'
            ),
            367 =>
            array (
                'id' => '3368',
                'estado_id' => '26',
                'descricao' => 'Caiuá'
            ),
            368 =>
            array (
                'id' => '3369',
                'estado_id' => '26',
                'descricao' => 'Cajamar'
            ),
            369 =>
            array (
                'id' => '3370',
                'estado_id' => '26',
                'descricao' => 'Cajati'
            ),
            370 =>
            array (
                'id' => '3371',
                'estado_id' => '26',
                'descricao' => 'Cajobi'
            ),
            371 =>
            array (
                'id' => '3372',
                'estado_id' => '26',
                'descricao' => 'Cajuru'
            ),
            372 =>
            array (
                'id' => '3373',
                'estado_id' => '26',
                'descricao' => 'Campina do Monte Alegre'
            ),
            373 =>
            array (
                'id' => '3374',
                'estado_id' => '26',
                'descricao' => 'Campinas',
            ),
            374 =>
            array (
                'id' => '3375',
                'estado_id' => '26',
                'descricao' => 'Campo Limpo Paulista'
            ),
            375 =>
            array (
                'id' => '3376',
                'estado_id' => '26',
                'descricao' => 'Campos do Jordão',
            ),
            376 =>
            array (
                'id' => '3377',
                'estado_id' => '26',
                'descricao' => 'Campos Novos Paulista'
            ),
            377 =>
            array (
                'id' => '3378',
                'estado_id' => '26',
                'descricao' => 'Cananéia'
            ),
            378 =>
            array (
                'id' => '3379',
                'estado_id' => '26',
                'descricao' => 'Canas'
            ),
            379 =>
            array (
                'id' => '3380',
                'estado_id' => '26',
                'descricao' => 'Cândido Mota'
            ),
            380 =>
            array (
                'id' => '3381',
                'estado_id' => '26',
                'descricao' => 'Cândido Rodrigues'
            ),
            381 =>
            array (
                'id' => '3382',
                'estado_id' => '26',
                'descricao' => 'Canitar'
            ),
            382 =>
            array (
                'id' => '3383',
                'estado_id' => '26',
                'descricao' => 'Capão Bonito'
            ),
            383 =>
            array (
                'id' => '3384',
                'estado_id' => '26',
                'descricao' => 'Capela do Alto'
            ),
            384 =>
            array (
                'id' => '3385',
                'estado_id' => '26',
                'descricao' => 'Capivari'
            ),
            385 =>
            array (
                'id' => '3386',
                'estado_id' => '26',
                'descricao' => 'Caraguatatuba'
            ),
            386 =>
            array (
                'id' => '3387',
                'estado_id' => '26',
                'descricao' => 'Carapicuíba'
            ),
            387 =>
            array (
                'id' => '3388',
                'estado_id' => '26',
                'descricao' => 'Cardoso'
            ),
            388 =>
            array (
                'id' => '3389',
                'estado_id' => '26',
                'descricao' => 'Casa Branca'
            ),
            389 =>
            array (
                'id' => '3390',
                'estado_id' => '26',
                'descricao' => 'Cássia dos Coqueiros'
            ),
            390 =>
            array (
                'id' => '3391',
                'estado_id' => '26',
                'descricao' => 'Castilho'
            ),
            391 =>
            array (
                'id' => '3392',
                'estado_id' => '26',
                'descricao' => 'Catanduva',
            ),
            392 =>
            array (
                'id' => '3393',
                'estado_id' => '26',
                'descricao' => 'Catiguá'
            ),
            393 =>
            array (
                'id' => '3394',
                'estado_id' => '26',
                'descricao' => 'Cedral'
            ),
            394 =>
            array (
                'id' => '3395',
                'estado_id' => '26',
                'descricao' => 'Cerqueira César'
            ),
            395 =>
            array (
                'id' => '3396',
                'estado_id' => '26',
                'descricao' => 'Cerquilho',
            ),
            396 =>
            array (
                'id' => '3397',
                'estado_id' => '26',
                'descricao' => 'Cesário Lange'
            ),
            397 =>
            array (
                'id' => '3398',
                'estado_id' => '26',
                'descricao' => 'Charqueada'
            ),
            398 =>
            array (
                'id' => '3399',
                'estado_id' => '26',
                'descricao' => 'Clementina'
            ),
            399 =>
            array (
                'id' => '3400',
                'estado_id' => '26',
                'descricao' => 'Colina'
            ),
            400 =>
            array (
                'id' => '3401',
                'estado_id' => '26',
                'descricao' => 'Colômbia'
            ),
            401 =>
            array (
                'id' => '3402',
                'estado_id' => '26',
                'descricao' => 'Conchal'
            ),
            402 =>
            array (
                'id' => '3403',
                'estado_id' => '26',
                'descricao' => 'Conchas'
            ),
            403 =>
            array (
                'id' => '3404',
                'estado_id' => '26',
                'descricao' => 'Cordeirópolis'
            ),
            404 =>
            array (
                'id' => '3405',
                'estado_id' => '26',
                'descricao' => 'Coroados'
            ),
            405 =>
            array (
                'id' => '3406',
                'estado_id' => '26',
                'descricao' => 'Coronel Macedo'
            ),
            406 =>
            array (
                'id' => '3407',
                'estado_id' => '26',
                'descricao' => 'Corumbataí'
            ),
            407 =>
            array (
                'id' => '3408',
                'estado_id' => '26',
                'descricao' => 'Cosmópolis'
            ),
            408 =>
            array (
                'id' => '3409',
                'estado_id' => '26',
                'descricao' => 'Cosmorama'
            ),
            409 =>
            array (
                'id' => '3410',
                'estado_id' => '26',
                'descricao' => 'Cotia',
            ),
            410 =>
            array (
                'id' => '3411',
                'estado_id' => '26',
                'descricao' => 'Cravinhos'
            ),
            411 =>
            array (
                'id' => '3412',
                'estado_id' => '26',
                'descricao' => 'Cristais Paulista'
            ),
            412 =>
            array (
                'id' => '3413',
                'estado_id' => '26',
                'descricao' => 'Cruzália'
            ),
            413 =>
            array (
                'id' => '3414',
                'estado_id' => '26',
                'descricao' => 'Cruzeiro'
            ),
            414 =>
            array (
                'id' => '3415',
                'estado_id' => '26',
                'descricao' => 'Cubatão'
            ),
            415 =>
            array (
                'id' => '3416',
                'estado_id' => '26',
                'descricao' => 'Cunha'
            ),
            416 =>
            array (
                'id' => '3417',
                'estado_id' => '26',
                'descricao' => 'Descalvado'
            ),
            417 =>
            array (
                'id' => '3418',
                'estado_id' => '26',
                'descricao' => 'Diadema'
            ),
            418 =>
            array (
                'id' => '3419',
                'estado_id' => '26',
                'descricao' => 'Dirce Reis'
            ),
            419 =>
            array (
                'id' => '3420',
                'estado_id' => '26',
                'descricao' => 'Divinolândia'
            ),
            420 =>
            array (
                'id' => '3421',
                'estado_id' => '26',
                'descricao' => 'Dobrada'
            ),
            421 =>
            array (
                'id' => '3422',
                'estado_id' => '26',
                'descricao' => 'Dois Córregos'
            ),
            422 =>
            array (
                'id' => '3423',
                'estado_id' => '26',
                'descricao' => 'Dolcinópolis'
            ),
            423 =>
            array (
                'id' => '3424',
                'estado_id' => '26',
                'descricao' => 'Dourado'
            ),
            424 =>
            array (
                'id' => '3425',
                'estado_id' => '26',
                'descricao' => 'Dracena'
            ),
            425 =>
            array (
                'id' => '3426',
                'estado_id' => '26',
                'descricao' => 'Duartina'
            ),
            426 =>
            array (
                'id' => '3427',
                'estado_id' => '26',
                'descricao' => 'Dumont'
            ),
            427 =>
            array (
                'id' => '3428',
                'estado_id' => '26',
                'descricao' => 'Echaporã'
            ),
            428 =>
            array (
                'id' => '3429',
                'estado_id' => '26',
                'descricao' => 'Eldorado'
            ),
            429 =>
            array (
                'id' => '3430',
                'estado_id' => '26',
                'descricao' => 'Elias Fausto'
            ),
            430 =>
            array (
                'id' => '3431',
                'estado_id' => '26',
                'descricao' => 'Elisiário'
            ),
            431 =>
            array (
                'id' => '3432',
                'estado_id' => '26',
                'descricao' => 'Embaúba'
            ),
            432 =>
            array (
                'id' => '3433',
                'estado_id' => '26',
                'descricao' => 'Embu'
            ),
            433 =>
            array (
                'id' => '3434',
                'estado_id' => '26',
                'descricao' => 'Embu-Guaçu'
            ),
            434 =>
            array (
                'id' => '3435',
                'estado_id' => '26',
                'descricao' => 'Emilianópolis'
            ),
            435 =>
            array (
                'id' => '3436',
                'estado_id' => '26',
                'descricao' => 'Engenheiro Coelho'
            ),
            436 =>
            array (
                'id' => '3437',
                'estado_id' => '26',
                'descricao' => 'Espírito Santo do Pinhal',
            ),
            437 =>
            array (
                'id' => '3438',
                'estado_id' => '26',
                'descricao' => 'Espírito Santo do Turvo'
            ),
            438 =>
            array (
                'id' => '3439',
                'estado_id' => '26',
                'descricao' => 'Estrela D\'oeste'
            ),
            439 =>
            array (
                'id' => '3440',
                'estado_id' => '26',
                'descricao' => 'Estrela do Norte'
            ),
            440 =>
            array (
                'id' => '3441',
                'estado_id' => '26',
                'descricao' => 'Euclides da Cunha Paulista'
            ),
            441 =>
            array (
                'id' => '3442',
                'estado_id' => '26',
                'descricao' => 'Fartura'
            ),
            442 =>
            array (
                'id' => '3443',
                'estado_id' => '26',
                'descricao' => 'Fernandópolis',
            ),
            443 =>
            array (
                'id' => '3444',
                'estado_id' => '26',
                'descricao' => 'Fernando Prestes'
            ),
            444 =>
            array (
                'id' => '3445',
                'estado_id' => '26',
                'descricao' => 'Fernão'
            ),
            445 =>
            array (
                'id' => '3446',
                'estado_id' => '26',
                'descricao' => 'Ferraz de Vasconcelos'
            ),
            446 =>
            array (
                'id' => '3447',
                'estado_id' => '26',
                'descricao' => 'Flora Rica'
            ),
            447 =>
            array (
                'id' => '3448',
                'estado_id' => '26',
                'descricao' => 'Floreal'
            ),
            448 =>
            array (
                'id' => '3449',
                'estado_id' => '26',
                'descricao' => 'Flórida Paulista'
            ),
            449 =>
            array (
                'id' => '3450',
                'estado_id' => '26',
                'descricao' => 'Florínia'
            ),
            450 =>
            array (
                'id' => '3451',
                'estado_id' => '26',
                'descricao' => 'Franca'
            ),
            451 =>
            array (
                'id' => '3452',
                'estado_id' => '26',
                'descricao' => 'Francisco Morato'
            ),
            452 =>
            array (
                'id' => '3453',
                'estado_id' => '26',
                'descricao' => 'Franco da Rocha'
            ),
            453 =>
            array (
                'id' => '3454',
                'estado_id' => '26',
                'descricao' => 'Gabriel Monteiro'
            ),
            454 =>
            array (
                'id' => '3455',
                'estado_id' => '26',
                'descricao' => 'Gália'
            ),
            455 =>
            array (
                'id' => '3456',
                'estado_id' => '26',
                'descricao' => 'Garça'
            ),
            456 =>
            array (
                'id' => '3457',
                'estado_id' => '26',
                'descricao' => 'Gastão Vidigal'
            ),
            457 =>
            array (
                'id' => '3458',
                'estado_id' => '26',
                'descricao' => 'Gavião Peixoto'
            ),
            458 =>
            array (
                'id' => '3459',
                'estado_id' => '26',
                'descricao' => 'General Salgado'
            ),
            459 =>
            array (
                'id' => '3460',
                'estado_id' => '26',
                'descricao' => 'Getulina'
            ),
            460 =>
            array (
                'id' => '3461',
                'estado_id' => '26',
                'descricao' => 'Glicério'
            ),
            461 =>
            array (
                'id' => '3462',
                'estado_id' => '26',
                'descricao' => 'Guaiçara'
            ),
            462 =>
            array (
                'id' => '3463',
                'estado_id' => '26',
                'descricao' => 'Guaimbê'
            ),
            463 =>
            array (
                'id' => '3464',
                'estado_id' => '26',
                'descricao' => 'Guaíra'
            ),
            464 =>
            array (
                'id' => '3465',
                'estado_id' => '26',
                'descricao' => 'Guapiaçu'
            ),
            465 =>
            array (
                'id' => '3466',
                'estado_id' => '26',
                'descricao' => 'Guapiara'
            ),
            466 =>
            array (
                'id' => '3467',
                'estado_id' => '26',
                'descricao' => 'Guará'
            ),
            467 =>
            array (
                'id' => '3468',
                'estado_id' => '26',
                'descricao' => 'Guaraçaí'
            ),
            468 =>
            array (
                'id' => '3469',
                'estado_id' => '26',
                'descricao' => 'Guaraci'
            ),
            469 =>
            array (
                'id' => '3470',
                'estado_id' => '26',
                'descricao' => 'Guarani D\'oeste'
            ),
            470 =>
            array (
                'id' => '3471',
                'estado_id' => '26',
                'descricao' => 'Guarantã'
            ),
            471 =>
            array (
                'id' => '3472',
                'estado_id' => '26',
                'descricao' => 'Guararapes'
            ),
            472 =>
            array (
                'id' => '3473',
                'estado_id' => '26',
                'descricao' => 'Guararema'
            ),
            473 =>
            array (
                'id' => '3474',
                'estado_id' => '26',
                'descricao' => 'Guaratinguetá',
            ),
            474 =>
            array (
                'id' => '3475',
                'estado_id' => '26',
                'descricao' => 'Guareí'
            ),
            475 =>
            array (
                'id' => '3476',
                'estado_id' => '26',
                'descricao' => 'Guariba'
            ),
            476 =>
            array (
                'id' => '3477',
                'estado_id' => '26',
                'descricao' => 'Guarujá'
            ),
            477 =>
            array (
                'id' => '3478',
                'estado_id' => '26',
                'descricao' => 'Guarulhos'
            ),
            478 =>
            array (
                'id' => '3479',
                'estado_id' => '26',
                'descricao' => 'Guatapará'
            ),
            479 =>
            array (
                'id' => '3480',
                'estado_id' => '26',
                'descricao' => 'Guzolândia'
            ),
            480 =>
            array (
                'id' => '3481',
                'estado_id' => '26',
                'descricao' => 'Herculândia'
            ),
            481 =>
            array (
                'id' => '3482',
                'estado_id' => '26',
                'descricao' => 'Holambra',
            ),
            482 =>
            array (
                'id' => '3483',
                'estado_id' => '26',
                'descricao' => 'Hortolândia'
            ),
            483 =>
            array (
                'id' => '3484',
                'estado_id' => '26',
                'descricao' => 'Iacanga'
            ),
            484 =>
            array (
                'id' => '3485',
                'estado_id' => '26',
                'descricao' => 'Iacri'
            ),
            485 =>
            array (
                'id' => '3486',
                'estado_id' => '26',
                'descricao' => 'Iaras'
            ),
            486 =>
            array (
                'id' => '3487',
                'estado_id' => '26',
                'descricao' => 'Ibaté'
            ),
            487 =>
            array (
                'id' => '3488',
                'estado_id' => '26',
                'descricao' => 'Ibirá'
            ),
            488 =>
            array (
                'id' => '3489',
                'estado_id' => '26',
                'descricao' => 'Ibirarema'
            ),
            489 =>
            array (
                'id' => '3490',
                'estado_id' => '26',
                'descricao' => 'Ibitinga'
            ),
            490 =>
            array (
                'id' => '3491',
                'estado_id' => '26',
                'descricao' => 'Ibiúna'
            ),
            491 =>
            array (
                'id' => '3492',
                'estado_id' => '26',
                'descricao' => 'Icém'
            ),
            492 =>
            array (
                'id' => '3493',
                'estado_id' => '26',
                'descricao' => 'Iepê'
            ),
            493 =>
            array (
                'id' => '3494',
                'estado_id' => '26',
                'descricao' => 'Igaraçu do Tietê'
            ),
            494 =>
            array (
                'id' => '3495',
                'estado_id' => '26',
                'descricao' => 'Igarapava',
            ),
            495 =>
            array (
                'id' => '3496',
                'estado_id' => '26',
                'descricao' => 'Igaratá'
            ),
            496 =>
            array (
                'id' => '3497',
                'estado_id' => '26',
                'descricao' => 'Iguape'
            ),
            497 =>
            array (
                'id' => '3498',
                'estado_id' => '26',
                'descricao' => 'Ilhabela'
            ),
            498 =>
            array (
                'id' => '3499',
                'estado_id' => '26',
                'descricao' => 'Ilha Comprida'
            ),
            499 =>
            array (
                'id' => '3500',
                'estado_id' => '26',
                'descricao' => 'Ilha Solteira',
            ),
        ));
        \DB::table('municipios')->insert(array (
            0 =>
            array (
                'id' => '3501',
                'estado_id' => '26',
                'descricao' => 'Indaiatuba',
            ),
            1 =>
            array (
                'id' => '3502',
                'estado_id' => '26',
                'descricao' => 'Indiana'
            ),
            2 =>
            array (
                'id' => '3503',
                'estado_id' => '26',
                'descricao' => 'Indiaporã'
            ),
            3 =>
            array (
                'id' => '3504',
                'estado_id' => '26',
                'descricao' => 'Inúbia Paulista'
            ),
            4 =>
            array (
                'id' => '3505',
                'estado_id' => '26',
                'descricao' => 'Ipaussu'
            ),
            5 =>
            array (
                'id' => '3506',
                'estado_id' => '26',
                'descricao' => 'Iperó'
            ),
            6 =>
            array (
                'id' => '3507',
                'estado_id' => '26',
                'descricao' => 'Ipeúna'
            ),
            7 =>
            array (
                'id' => '3508',
                'estado_id' => '26',
                'descricao' => 'Ipiguá'
            ),
            8 =>
            array (
                'id' => '3509',
                'estado_id' => '26',
                'descricao' => 'Iporanga'
            ),
            9 =>
            array (
                'id' => '3510',
                'estado_id' => '26',
                'descricao' => 'Ipuã',
            ),
            10 =>
            array (
                'id' => '3511',
                'estado_id' => '26',
                'descricao' => 'Iracemápolis'
            ),
            11 =>
            array (
                'id' => '3512',
                'estado_id' => '26',
                'descricao' => 'Irapuã'
            ),
            12 =>
            array (
                'id' => '3513',
                'estado_id' => '26',
                'descricao' => 'Irapuru'
            ),
            13 =>
            array (
                'id' => '3514',
                'estado_id' => '26',
                'descricao' => 'Itaberá'
            ),
            14 =>
            array (
                'id' => '3515',
                'estado_id' => '26',
                'descricao' => 'Itaí'
            ),
            15 =>
            array (
                'id' => '3516',
                'estado_id' => '26',
                'descricao' => 'Itajobi'
            ),
            16 =>
            array (
                'id' => '3517',
                'estado_id' => '26',
                'descricao' => 'Itaju'
            ),
            17 =>
            array (
                'id' => '3518',
                'estado_id' => '26',
                'descricao' => 'Itanhaém'
            ),
            18 =>
            array (
                'id' => '3519',
                'estado_id' => '26',
                'descricao' => 'Itaóca'
            ),
            19 =>
            array (
                'id' => '3520',
                'estado_id' => '26',
                'descricao' => 'Itapecerica da Serra'
            ),
            20 =>
            array (
                'id' => '3521',
                'estado_id' => '26',
                'descricao' => 'Itapetininga'
            ),
            21 =>
            array (
                'id' => '3522',
                'estado_id' => '26',
                'descricao' => 'Itapeva'
            ),
            22 =>
            array (
                'id' => '3523',
                'estado_id' => '26',
                'descricao' => 'Itapevi'
            ),
            23 =>
            array (
                'id' => '3524',
                'estado_id' => '26',
                'descricao' => 'Itapira'
            ),
            24 =>
            array (
                'id' => '3525',
                'estado_id' => '26',
                'descricao' => 'Itapirapuã Paulista'
            ),
            25 =>
            array (
                'id' => '3526',
                'estado_id' => '26',
                'descricao' => 'Itápolis'
            ),
            26 =>
            array (
                'id' => '3527',
                'estado_id' => '26',
                'descricao' => 'Itaporanga'
            ),
            27 =>
            array (
                'id' => '3528',
                'estado_id' => '26',
                'descricao' => 'Itapuí'
            ),
            28 =>
            array (
                'id' => '3529',
                'estado_id' => '26',
                'descricao' => 'Itapura'
            ),
            29 =>
            array (
                'id' => '3530',
                'estado_id' => '26',
                'descricao' => 'Itaquaquecetuba'
            ),
            30 =>
            array (
                'id' => '3531',
                'estado_id' => '26',
                'descricao' => 'Itararé'
            ),
            31 =>
            array (
                'id' => '3532',
                'estado_id' => '26',
                'descricao' => 'Itariri'
            ),
            32 =>
            array (
                'id' => '3533',
                'estado_id' => '26',
                'descricao' => 'Itatiba',
            ),
            33 =>
            array (
                'id' => '3534',
                'estado_id' => '26',
                'descricao' => 'Itatinga'
            ),
            34 =>
            array (
                'id' => '3535',
                'estado_id' => '26',
                'descricao' => 'Itirapina'
            ),
            35 =>
            array (
                'id' => '3536',
                'estado_id' => '26',
                'descricao' => 'Itirapuã'
            ),
            36 =>
            array (
                'id' => '3537',
                'estado_id' => '26',
                'descricao' => 'Itobi'
            ),
            37 =>
            array (
                'id' => '3538',
                'estado_id' => '26',
                'descricao' => 'Itu',
            ),
            38 =>
            array (
                'id' => '3539',
                'estado_id' => '26',
                'descricao' => 'Itupeva'
            ),
            39 =>
            array (
                'id' => '3540',
                'estado_id' => '26',
                'descricao' => 'Ituverava',
            ),
            40 =>
            array (
                'id' => '3541',
                'estado_id' => '26',
                'descricao' => 'Jaborandi'
            ),
            41 =>
            array (
                'id' => '3542',
                'estado_id' => '26',
                'descricao' => 'Jaboticabal',
            ),
            42 =>
            array (
                'id' => '3543',
                'estado_id' => '26',
                'descricao' => 'Jacareí'
            ),
            43 =>
            array (
                'id' => '3544',
                'estado_id' => '26',
                'descricao' => 'Jaci'
            ),
            44 =>
            array (
                'id' => '3545',
                'estado_id' => '26',
                'descricao' => 'Jacupiranga'
            ),
            45 =>
            array (
                'id' => '3546',
                'estado_id' => '26',
                'descricao' => 'Jaguariúna',
            ),
            46 =>
            array (
                'id' => '3547',
                'estado_id' => '26',
                'descricao' => 'Jales'
            ),
            47 =>
            array (
                'id' => '3548',
                'estado_id' => '26',
                'descricao' => 'Jambeiro'
            ),
            48 =>
            array (
                'id' => '3549',
                'estado_id' => '26',
                'descricao' => 'Jandira'
            ),
            49 =>
            array (
                'id' => '3550',
                'estado_id' => '26',
                'descricao' => 'Jardinópolis'
            ),
            50 =>
            array (
                'id' => '3551',
                'estado_id' => '26',
                'descricao' => 'Jarinu'
            ),
            51 =>
            array (
                'id' => '3552',
                'estado_id' => '26',
                'descricao' => 'Jaú',
            ),
            52 =>
            array (
                'id' => '3553',
                'estado_id' => '26',
                'descricao' => 'Jeriquara'
            ),
            53 =>
            array (
                'id' => '3554',
                'estado_id' => '26',
                'descricao' => 'Joanópolis'
            ),
            54 =>
            array (
                'id' => '3555',
                'estado_id' => '26',
                'descricao' => 'João Ramalho'
            ),
            55 =>
            array (
                'id' => '3556',
                'estado_id' => '26',
                'descricao' => 'José Bonifácio'
            ),
            56 =>
            array (
                'id' => '3557',
                'estado_id' => '26',
                'descricao' => 'Júlio Mesquita'
            ),
            57 =>
            array (
                'id' => '3558',
                'estado_id' => '26',
                'descricao' => 'Jumirim'
            ),
            58 =>
            array (
                'id' => '3559',
                'estado_id' => '26',
                'descricao' => 'Jundiaí',
            ),
            59 =>
            array (
                'id' => '3560',
                'estado_id' => '26',
                'descricao' => 'Junqueirópolis'
            ),
            60 =>
            array (
                'id' => '3561',
                'estado_id' => '26',
                'descricao' => 'Juquiá'
            ),
            61 =>
            array (
                'id' => '3562',
                'estado_id' => '26',
                'descricao' => 'Juquitiba'
            ),
            62 =>
            array (
                'id' => '3563',
                'estado_id' => '26',
                'descricao' => 'Lagoinha'
            ),
            63 =>
            array (
                'id' => '3564',
                'estado_id' => '26',
                'descricao' => 'Laranjal Paulista'
            ),
            64 =>
            array (
                'id' => '3565',
                'estado_id' => '26',
                'descricao' => 'Lavínia'
            ),
            65 =>
            array (
                'id' => '3566',
                'estado_id' => '26',
                'descricao' => 'Lavrinhas'
            ),
            66 =>
            array (
                'id' => '3567',
                'estado_id' => '26',
                'descricao' => 'Leme'
            ),
            67 =>
            array (
                'id' => '3568',
                'estado_id' => '26',
                'descricao' => 'Lençóis Paulista'
            ),
            68 =>
            array (
                'id' => '3569',
                'estado_id' => '26',
                'descricao' => 'Limeira',
            ),
            69 =>
            array (
                'id' => '3570',
                'estado_id' => '26',
                'descricao' => 'Lindóia'
            ),
            70 =>
            array (
                'id' => '3571',
                'estado_id' => '26',
                'descricao' => 'Lins',
            ),
            71 =>
            array (
                'id' => '3572',
                'estado_id' => '26',
                'descricao' => 'Lorena'
            ),
            72 =>
            array (
                'id' => '3573',
                'estado_id' => '26',
                'descricao' => 'Lourdes'
            ),
            73 =>
            array (
                'id' => '3574',
                'estado_id' => '26',
                'descricao' => 'Louveira',
            ),
            74 =>
            array (
                'id' => '3575',
                'estado_id' => '26',
                'descricao' => 'Lucélia'
            ),
            75 =>
            array (
                'id' => '3576',
                'estado_id' => '26',
                'descricao' => 'Lucianópolis'
            ),
            76 =>
            array (
                'id' => '3577',
                'estado_id' => '26',
                'descricao' => 'Luís Antônio'
            ),
            77 =>
            array (
                'id' => '3578',
                'estado_id' => '26',
                'descricao' => 'Luiziânia'
            ),
            78 =>
            array (
                'id' => '3579',
                'estado_id' => '26',
                'descricao' => 'Lupércio'
            ),
            79 =>
            array (
                'id' => '3580',
                'estado_id' => '26',
                'descricao' => 'Lutécia'
            ),
            80 =>
            array (
                'id' => '3581',
                'estado_id' => '26',
                'descricao' => 'Macatuba',
            ),
            81 =>
            array (
                'id' => '3582',
                'estado_id' => '26',
                'descricao' => 'Macaubal'
            ),
            82 =>
            array (
                'id' => '3583',
                'estado_id' => '26',
                'descricao' => 'Macedônia'
            ),
            83 =>
            array (
                'id' => '3584',
                'estado_id' => '26',
                'descricao' => 'Magda'
            ),
            84 =>
            array (
                'id' => '3585',
                'estado_id' => '26',
                'descricao' => 'Mairinque'
            ),
            85 =>
            array (
                'id' => '3586',
                'estado_id' => '26',
                'descricao' => 'Mairiporã',
            ),
            86 =>
            array (
                'id' => '3587',
                'estado_id' => '26',
                'descricao' => 'Manduri'
            ),
            87 =>
            array (
                'id' => '3588',
                'estado_id' => '26',
                'descricao' => 'Marabá Paulista'
            ),
            88 =>
            array (
                'id' => '3589',
                'estado_id' => '26',
                'descricao' => 'Maracaí'
            ),
            89 =>
            array (
                'id' => '3590',
                'estado_id' => '26',
                'descricao' => 'Marapoama'
            ),
            90 =>
            array (
                'id' => '3591',
                'estado_id' => '26',
                'descricao' => 'Mariápolis'
            ),
            91 =>
            array (
                'id' => '3592',
                'estado_id' => '26',
                'descricao' => 'Marília',
            ),
            92 =>
            array (
                'id' => '3593',
                'estado_id' => '26',
                'descricao' => 'Marinópolis'
            ),
            93 =>
            array (
                'id' => '3594',
                'estado_id' => '26',
                'descricao' => 'Martinópolis'
            ),
            94 =>
            array (
                'id' => '3595',
                'estado_id' => '26',
                'descricao' => 'Matão',
            ),
            95 =>
            array (
                'id' => '3596',
                'estado_id' => '26',
                'descricao' => 'Mauá'
            ),
            96 =>
            array (
                'id' => '3597',
                'estado_id' => '26',
                'descricao' => 'Mendonça'
            ),
            97 =>
            array (
                'id' => '3598',
                'estado_id' => '26',
                'descricao' => 'Meridiano'
            ),
            98 =>
            array (
                'id' => '3599',
                'estado_id' => '26',
                'descricao' => 'Mesópolis'
            ),
            99 =>
            array (
                'id' => '3600',
                'estado_id' => '26',
                'descricao' => 'Miguelópolis'
            ),
            100 =>
            array (
                'id' => '3601',
                'estado_id' => '26',
                'descricao' => 'Mineiros do Tietê'
            ),
            101 =>
            array (
                'id' => '3602',
                'estado_id' => '26',
                'descricao' => 'Miracatu'
            ),
            102 =>
            array (
                'id' => '3603',
                'estado_id' => '26',
                'descricao' => 'Mira Estrela'
            ),
            103 =>
            array (
                'id' => '3604',
                'estado_id' => '26',
                'descricao' => 'Mirandópolis'
            ),
            104 =>
            array (
                'id' => '3605',
                'estado_id' => '26',
                'descricao' => 'Mirante do Paranapanema'
            ),
            105 =>
            array (
                'id' => '3606',
                'estado_id' => '26',
                'descricao' => 'Mirassol'
            ),
            106 =>
            array (
                'id' => '3607',
                'estado_id' => '26',
                'descricao' => 'Mirassolândia'
            ),
            107 =>
            array (
                'id' => '3608',
                'estado_id' => '26',
                'descricao' => 'Mococa',
            ),
            108 =>
            array (
                'id' => '3609',
                'estado_id' => '26',
                'descricao' => 'Mogi das Cruzes',
            ),
            109 =>
            array (
                'id' => '3610',
                'estado_id' => '26',
                'descricao' => 'Mogi Guaçu'
            ),
            110 =>
            array (
                'id' => '3611',
                'estado_id' => '26',
                'descricao' => 'Mogi Mirim',
            ),
            111 =>
            array (
                'id' => '3612',
                'estado_id' => '26',
                'descricao' => 'Mombuca'
            ),
            112 =>
            array (
                'id' => '3613',
                'estado_id' => '26',
                'descricao' => 'Monções'
            ),
            113 =>
            array (
                'id' => '3614',
                'estado_id' => '26',
                'descricao' => 'Mongaguá'
            ),
            114 =>
            array (
                'id' => '3615',
                'estado_id' => '26',
                'descricao' => 'Monte Alegre do Sul',
            ),
            115 =>
            array (
                'id' => '3616',
                'estado_id' => '26',
                'descricao' => 'Monte Alto'
            ),
            116 =>
            array (
                'id' => '3617',
                'estado_id' => '26',
                'descricao' => 'Monte Aprazível',
            ),
            117 =>
            array (
                'id' => '3618',
                'estado_id' => '26',
                'descricao' => 'Monte Azul Paulista'
            ),
            118 =>
            array (
                'id' => '3619',
                'estado_id' => '26',
                'descricao' => 'Monte Castelo'
            ),
            119 =>
            array (
                'id' => '3620',
                'estado_id' => '26',
                'descricao' => 'Monteiro Lobato'
            ),
            120 =>
            array (
                'id' => '3621',
                'estado_id' => '26',
                'descricao' => 'Monte Mor'
            ),
            121 =>
            array (
                'id' => '3622',
                'estado_id' => '26',
                'descricao' => 'Morro Agudo'
            ),
            122 =>
            array (
                'id' => '3623',
                'estado_id' => '26',
                'descricao' => 'Morungaba'
            ),
            123 =>
            array (
                'id' => '3624',
                'estado_id' => '26',
                'descricao' => 'Motuca'
            ),
            124 =>
            array (
                'id' => '3625',
                'estado_id' => '26',
                'descricao' => 'Murutinga do Sul'
            ),
            125 =>
            array (
                'id' => '3626',
                'estado_id' => '26',
                'descricao' => 'Nantes'
            ),
            126 =>
            array (
                'id' => '3627',
                'estado_id' => '26',
                'descricao' => 'Narandiba'
            ),
            127 =>
            array (
                'id' => '3628',
                'estado_id' => '26',
                'descricao' => 'Natividade da Serra'
            ),
            128 =>
            array (
                'id' => '3629',
                'estado_id' => '26',
                'descricao' => 'Nazaré Paulista'
            ),
            129 =>
            array (
                'id' => '3630',
                'estado_id' => '26',
                'descricao' => 'Neves Paulista'
            ),
            130 =>
            array (
                'id' => '3631',
                'estado_id' => '26',
                'descricao' => 'Nhandeara',
            ),
            131 =>
            array (
                'id' => '3632',
                'estado_id' => '26',
                'descricao' => 'Nipoã'
            ),
            132 =>
            array (
                'id' => '3633',
                'estado_id' => '26',
                'descricao' => 'Nova Aliança'
            ),
            133 =>
            array (
                'id' => '3634',
                'estado_id' => '26',
                'descricao' => 'Nova Campina'
            ),
            134 =>
            array (
                'id' => '3635',
                'estado_id' => '26',
                'descricao' => 'Nova Canaã Paulista'
            ),
            135 =>
            array (
                'id' => '3636',
                'estado_id' => '26',
                'descricao' => 'Nova Castilho'
            ),
            136 =>
            array (
                'id' => '3637',
                'estado_id' => '26',
                'descricao' => 'Nova Europa'
            ),
            137 =>
            array (
                'id' => '3638',
                'estado_id' => '26',
                'descricao' => 'Nova Granada'
            ),
            138 =>
            array (
                'id' => '3639',
                'estado_id' => '26',
                'descricao' => 'Nova Guataporanga'
            ),
            139 =>
            array (
                'id' => '3640',
                'estado_id' => '26',
                'descricao' => 'Nova Independência'
            ),
            140 =>
            array (
                'id' => '3641',
                'estado_id' => '26',
                'descricao' => 'Novais'
            ),
            141 =>
            array (
                'id' => '3642',
                'estado_id' => '26',
                'descricao' => 'Nova Luzitânia'
            ),
            142 =>
            array (
                'id' => '3643',
                'estado_id' => '26',
                'descricao' => 'Nova Odessa'
            ),
            143 =>
            array (
                'id' => '3644',
                'estado_id' => '26',
                'descricao' => 'Novo Horizonte'
            ),
            144 =>
            array (
                'id' => '3645',
                'estado_id' => '26',
                'descricao' => 'Nuporanga'
            ),
            145 =>
            array (
                'id' => '3646',
                'estado_id' => '26',
                'descricao' => 'Ocauçu'
            ),
            146 =>
            array (
                'id' => '3647',
                'estado_id' => '26',
                'descricao' => 'Óleo'
            ),
            147 =>
            array (
                'id' => '3648',
                'estado_id' => '26',
                'descricao' => 'Olímpia'
            ),
            148 =>
            array (
                'id' => '3649',
                'estado_id' => '26',
                'descricao' => 'Onda Verde'
            ),
            149 =>
            array (
                'id' => '3650',
                'estado_id' => '26',
                'descricao' => 'Oriente'
            ),
            150 =>
            array (
                'id' => '3651',
                'estado_id' => '26',
                'descricao' => 'Orindiúva'
            ),
            151 =>
            array (
                'id' => '3652',
                'estado_id' => '26',
                'descricao' => 'Orlândia',
            ),
            152 =>
            array (
                'id' => '3653',
                'estado_id' => '26',
                'descricao' => 'Osasco',
            ),
            153 =>
            array (
                'id' => '3654',
                'estado_id' => '26',
                'descricao' => 'Oscar Bressane'
            ),
            154 =>
            array (
                'id' => '3655',
                'estado_id' => '26',
                'descricao' => 'Osvaldo Cruz'
            ),
            155 =>
            array (
                'id' => '3656',
                'estado_id' => '26',
                'descricao' => 'Ourinhos',
            ),
            156 =>
            array (
                'id' => '3657',
                'estado_id' => '26',
                'descricao' => 'Ouroeste'
            ),
            157 =>
            array (
                'id' => '3658',
                'estado_id' => '26',
                'descricao' => 'Ouro Verde'
            ),
            158 =>
            array (
                'id' => '3659',
                'estado_id' => '26',
                'descricao' => 'Pacaembu'
            ),
            159 =>
            array (
                'id' => '3660',
                'estado_id' => '26',
                'descricao' => 'Palestina'
            ),
            160 =>
            array (
                'id' => '3661',
                'estado_id' => '26',
                'descricao' => 'Palmares Paulista'
            ),
            161 =>
            array (
                'id' => '3662',
                'estado_id' => '26',
                'descricao' => 'Palmeira D\'oeste'
            ),
            162 =>
            array (
                'id' => '3663',
                'estado_id' => '26',
                'descricao' => 'Palmital'
            ),
            163 =>
            array (
                'id' => '3664',
                'estado_id' => '26',
                'descricao' => 'Panorama'
            ),
            164 =>
            array (
                'id' => '3665',
                'estado_id' => '26',
                'descricao' => 'Paraguaçu Paulista'
            ),
            165 =>
            array (
                'id' => '3666',
                'estado_id' => '26',
                'descricao' => 'Paraibuna'
            ),
            166 =>
            array (
                'id' => '3667',
                'estado_id' => '26',
                'descricao' => 'Paraíso'
            ),
            167 =>
            array (
                'id' => '3668',
                'estado_id' => '26',
                'descricao' => 'Paranapanema'
            ),
            168 =>
            array (
                'id' => '3669',
                'estado_id' => '26',
                'descricao' => 'Paranapuã'
            ),
            169 =>
            array (
                'id' => '3670',
                'estado_id' => '26',
                'descricao' => 'Parapuã'
            ),
            170 =>
            array (
                'id' => '3671',
                'estado_id' => '26',
                'descricao' => 'Pardinho'
            ),
            171 =>
            array (
                'id' => '3672',
                'estado_id' => '26',
                'descricao' => 'Pariquera-Açu'
            ),
            172 =>
            array (
                'id' => '3673',
                'estado_id' => '26',
                'descricao' => 'Parisi'
            ),
            173 =>
            array (
                'id' => '3674',
                'estado_id' => '26',
                'descricao' => 'Patrocínio Paulista'
            ),
            174 =>
            array (
                'id' => '3675',
                'estado_id' => '26',
                'descricao' => 'Paulicéia'
            ),
            175 =>
            array (
                'id' => '3676',
                'estado_id' => '26',
                'descricao' => 'Paulínia',
            ),
            176 =>
            array (
                'id' => '3677',
                'estado_id' => '26',
                'descricao' => 'Paulistânia'
            ),
            177 =>
            array (
                'id' => '3678',
                'estado_id' => '26',
                'descricao' => 'Paulo de Faria'
            ),
            178 =>
            array (
                'id' => '3679',
                'estado_id' => '26',
                'descricao' => 'Pederneiras'
            ),
            179 =>
            array (
                'id' => '3680',
                'estado_id' => '26',
                'descricao' => 'Pedra Bela'
            ),
            180 =>
            array (
                'id' => '3681',
                'estado_id' => '26',
                'descricao' => 'Pedranópolis'
            ),
            181 =>
            array (
                'id' => '3682',
                'estado_id' => '26',
                'descricao' => 'Pedregulho'
            ),
            182 =>
            array (
                'id' => '3683',
                'estado_id' => '26',
                'descricao' => 'Pedreira'
            ),
            183 =>
            array (
                'id' => '3684',
                'estado_id' => '26',
                'descricao' => 'Pedrinhas Paulista',
            ),
            184 =>
            array (
                'id' => '3685',
                'estado_id' => '26',
                'descricao' => 'Pedro de Toledo'
            ),
            185 =>
            array (
                'id' => '3686',
                'estado_id' => '26',
                'descricao' => 'Penápolis'
            ),
            186 =>
            array (
                'id' => '3687',
                'estado_id' => '26',
                'descricao' => 'Pereira Barreto'
            ),
            187 =>
            array (
                'id' => '3688',
                'estado_id' => '26',
                'descricao' => 'Pereiras'
            ),
            188 =>
            array (
                'id' => '3689',
                'estado_id' => '26',
                'descricao' => 'Peruíbe'
            ),
            189 =>
            array (
                'id' => '3690',
                'estado_id' => '26',
                'descricao' => 'Piacatu'
            ),
            190 =>
            array (
                'id' => '3691',
                'estado_id' => '26',
                'descricao' => 'Piedade'
            ),
            191 =>
            array (
                'id' => '3692',
                'estado_id' => '26',
                'descricao' => 'Pilar do Sul'
            ),
            192 =>
            array (
                'id' => '3693',
                'estado_id' => '26',
                'descricao' => 'Pindamonhangaba'
            ),
            193 =>
            array (
                'id' => '3694',
                'estado_id' => '26',
                'descricao' => 'Pindorama'
            ),
            194 =>
            array (
                'id' => '3695',
                'estado_id' => '26',
                'descricao' => 'Pinhalzinho'
            ),
            195 =>
            array (
                'id' => '3696',
                'estado_id' => '26',
                'descricao' => 'Piquerobi'
            ),
            196 =>
            array (
                'id' => '3697',
                'estado_id' => '26',
                'descricao' => 'Piquete'
            ),
            197 =>
            array (
                'id' => '3698',
                'estado_id' => '26',
                'descricao' => 'Piracaia',
            ),
            198 =>
            array (
                'id' => '3699',
                'estado_id' => '26',
                'descricao' => 'Piracicaba',
            ),
            199 =>
            array (
                'id' => '3700',
                'estado_id' => '26',
                'descricao' => 'Piraju'
            ),
            200 =>
            array (
                'id' => '3701',
                'estado_id' => '26',
                'descricao' => 'Pirajuí'
            ),
            201 =>
            array (
                'id' => '3702',
                'estado_id' => '26',
                'descricao' => 'Pirangi'
            ),
            202 =>
            array (
                'id' => '3703',
                'estado_id' => '26',
                'descricao' => 'Pirapora do Bom Jesus'
            ),
            203 =>
            array (
                'id' => '3704',
                'estado_id' => '26',
                'descricao' => 'Pirapozinho'
            ),
            204 =>
            array (
                'id' => '3705',
                'estado_id' => '26',
                'descricao' => 'Pirassununga',
            ),
            205 =>
            array (
                'id' => '3706',
                'estado_id' => '26',
                'descricao' => 'Piratininga',
            ),
            206 =>
            array (
                'id' => '3707',
                'estado_id' => '26',
                'descricao' => 'Pitangueiras'
            ),
            207 =>
            array (
                'id' => '3708',
                'estado_id' => '26',
                'descricao' => 'Planalto'
            ),
            208 =>
            array (
                'id' => '3709',
                'estado_id' => '26',
                'descricao' => 'Platina'
            ),
            209 =>
            array (
                'id' => '3710',
                'estado_id' => '26',
                'descricao' => 'Poá'
            ),
            210 =>
            array (
                'id' => '3711',
                'estado_id' => '26',
                'descricao' => 'Poloni'
            ),
            211 =>
            array (
                'id' => '3712',
                'estado_id' => '26',
                'descricao' => 'Pompéia'
            ),
            212 =>
            array (
                'id' => '3713',
                'estado_id' => '26',
                'descricao' => 'Pongaí'
            ),
            213 =>
            array (
                'id' => '3714',
                'estado_id' => '26',
                'descricao' => 'Pontal'
            ),
            214 =>
            array (
                'id' => '3715',
                'estado_id' => '26',
                'descricao' => 'Pontalinda'
            ),
            215 =>
            array (
                'id' => '3716',
                'estado_id' => '26',
                'descricao' => 'Pontes Gestal'
            ),
            216 =>
            array (
                'id' => '3717',
                'estado_id' => '26',
                'descricao' => 'Populina'
            ),
            217 =>
            array (
                'id' => '3718',
                'estado_id' => '26',
                'descricao' => 'Porangaba'
            ),
            218 =>
            array (
                'id' => '3719',
                'estado_id' => '26',
                'descricao' => 'Porto Feliz'
            ),
            219 =>
            array (
                'id' => '3720',
                'estado_id' => '26',
                'descricao' => 'Porto Ferreira'
            ),
            220 =>
            array (
                'id' => '3721',
                'estado_id' => '26',
                'descricao' => 'Potim'
            ),
            221 =>
            array (
                'id' => '3722',
                'estado_id' => '26',
                'descricao' => 'Potirendaba'
            ),
            222 =>
            array (
                'id' => '3723',
                'estado_id' => '26',
                'descricao' => 'Pracinha'
            ),
            223 =>
            array (
                'id' => '3724',
                'estado_id' => '26',
                'descricao' => 'Pradópolis'
            ),
            224 =>
            array (
                'id' => '3725',
                'estado_id' => '26',
                'descricao' => 'Praia Grande'
            ),
            225 =>
            array (
                'id' => '3726',
                'estado_id' => '26',
                'descricao' => 'Pratânia'
            ),
            226 =>
            array (
                'id' => '3727',
                'estado_id' => '26',
                'descricao' => 'Presidente Alves'
            ),
            227 =>
            array (
                'id' => '3728',
                'estado_id' => '26',
                'descricao' => 'Presidente Bernardes'
            ),
            228 =>
            array (
                'id' => '3729',
                'estado_id' => '26',
                'descricao' => 'Presidente Epitácio'
            ),
            229 =>
            array (
                'id' => '3730',
                'estado_id' => '26',
                'descricao' => 'Presidente Prudente',
            ),
            230 =>
            array (
                'id' => '3731',
                'estado_id' => '26',
                'descricao' => 'Presidente Venceslau'
            ),
            231 =>
            array (
                'id' => '3732',
                'estado_id' => '26',
                'descricao' => 'Promissão'
            ),
            232 =>
            array (
                'id' => '3733',
                'estado_id' => '26',
                'descricao' => 'Quadra'
            ),
            233 =>
            array (
                'id' => '3734',
                'estado_id' => '26',
                'descricao' => 'Quatá'
            ),
            234 =>
            array (
                'id' => '3735',
                'estado_id' => '26',
                'descricao' => 'Queiroz'
            ),
            235 =>
            array (
                'id' => '3736',
                'estado_id' => '26',
                'descricao' => 'Queluz'
            ),
            236 =>
            array (
                'id' => '3737',
                'estado_id' => '26',
                'descricao' => 'Quintana'
            ),
            237 =>
            array (
                'id' => '3738',
                'estado_id' => '26',
                'descricao' => 'Rafard'
            ),
            238 =>
            array (
                'id' => '3739',
                'estado_id' => '26',
                'descricao' => 'Rancharia'
            ),
            239 =>
            array (
                'id' => '3740',
                'estado_id' => '26',
                'descricao' => 'Redenção da Serra'
            ),
            240 =>
            array (
                'id' => '3741',
                'estado_id' => '26',
                'descricao' => 'Regente Feijó'
            ),
            241 =>
            array (
                'id' => '3742',
                'estado_id' => '26',
                'descricao' => 'Reginópolis'
            ),
            242 =>
            array (
                'id' => '3743',
                'estado_id' => '26',
                'descricao' => 'Registro'
            ),
            243 =>
            array (
                'id' => '3744',
                'estado_id' => '26',
                'descricao' => 'Restinga'
            ),
            244 =>
            array (
                'id' => '3745',
                'estado_id' => '26',
                'descricao' => 'Ribeira'
            ),
            245 =>
            array (
                'id' => '3746',
                'estado_id' => '26',
                'descricao' => 'Ribeirão Bonito'
            ),
            246 =>
            array (
                'id' => '3747',
                'estado_id' => '26',
                'descricao' => 'Ribeirão Branco'
            ),
            247 =>
            array (
                'id' => '3748',
                'estado_id' => '26',
                'descricao' => 'Ribeirão Corrente'
            ),
            248 =>
            array (
                'id' => '3749',
                'estado_id' => '26',
                'descricao' => 'Ribeirão do Sul',
            ),
            249 =>
            array (
                'id' => '3750',
                'estado_id' => '26',
                'descricao' => 'Ribeirão dos Índios'
            ),
            250 =>
            array (
                'id' => '3751',
                'estado_id' => '26',
                'descricao' => 'Ribeirão Grande'
            ),
            251 =>
            array (
                'id' => '3752',
                'estado_id' => '26',
                'descricao' => 'Ribeirão Pires'
            ),
            252 =>
            array (
                'id' => '3753',
                'estado_id' => '26',
                'descricao' => 'Ribeirão Preto',
            ),
            253 =>
            array (
                'id' => '3754',
                'estado_id' => '26',
                'descricao' => 'Riversul'
            ),
            254 =>
            array (
                'id' => '3755',
                'estado_id' => '26',
                'descricao' => 'Rifaina'
            ),
            255 =>
            array (
                'id' => '3756',
                'estado_id' => '26',
                'descricao' => 'Rincão'
            ),
            256 =>
            array (
                'id' => '3757',
                'estado_id' => '26',
                'descricao' => 'Rinópolis'
            ),
            257 =>
            array (
                'id' => '3758',
                'estado_id' => '26',
                'descricao' => 'Rio Claro',
            ),
            258 =>
            array (
                'id' => '3759',
                'estado_id' => '26',
                'descricao' => 'Rio das Pedras'
            ),
            259 =>
            array (
                'id' => '3760',
                'estado_id' => '26',
                'descricao' => 'Rio Grande da Serra'
            ),
            260 =>
            array (
                'id' => '3761',
                'estado_id' => '26',
                'descricao' => 'Riolândia'
            ),
            261 =>
            array (
                'id' => '3762',
                'estado_id' => '26',
                'descricao' => 'Rosana',
            ),
            262 =>
            array (
                'id' => '3763',
                'estado_id' => '26',
                'descricao' => 'Roseira'
            ),
            263 =>
            array (
                'id' => '3764',
                'estado_id' => '26',
                'descricao' => 'Rubiácea'
            ),
            264 =>
            array (
                'id' => '3765',
                'estado_id' => '26',
                'descricao' => 'Rubinéia'
            ),
            265 =>
            array (
                'id' => '3766',
                'estado_id' => '26',
                'descricao' => 'Sabino'
            ),
            266 =>
            array (
                'id' => '3767',
                'estado_id' => '26',
                'descricao' => 'Sagres'
            ),
            267 =>
            array (
                'id' => '3768',
                'estado_id' => '26',
                'descricao' => 'Sales'
            ),
            268 =>
            array (
                'id' => '3769',
                'estado_id' => '26',
                'descricao' => 'Sales Oliveira'
            ),
            269 =>
            array (
                'id' => '3770',
                'estado_id' => '26',
                'descricao' => 'Salesópolis'
            ),
            270 =>
            array (
                'id' => '3771',
                'estado_id' => '26',
                'descricao' => 'Salmourão'
            ),
            271 =>
            array (
                'id' => '3772',
                'estado_id' => '26',
                'descricao' => 'Saltinho',
            ),
            272 =>
            array (
                'id' => '3773',
                'estado_id' => '26',
                'descricao' => 'Salto'
            ),
            273 =>
            array (
                'id' => '3774',
                'estado_id' => '26',
                'descricao' => 'Salto de Pirapora'
            ),
            274 =>
            array (
                'id' => '3775',
                'estado_id' => '26',
                'descricao' => 'Salto Grande'
            ),
            275 =>
            array (
                'id' => '3776',
                'estado_id' => '26',
                'descricao' => 'Sandovalina'
            ),
            276 =>
            array (
                'id' => '3777',
                'estado_id' => '26',
                'descricao' => 'Santa Adélia'
            ),
            277 =>
            array (
                'id' => '3778',
                'estado_id' => '26',
                'descricao' => 'Santa Albertina'
            ),
            278 =>
            array (
                'id' => '3779',
                'estado_id' => '26',
                'descricao' => 'Santa Bárbara D\'oeste'
            ),
            279 =>
            array (
                'id' => '3780',
                'estado_id' => '26',
                'descricao' => 'Santa Branca'
            ),
            280 =>
            array (
                'id' => '3781',
                'estado_id' => '26',
                'descricao' => 'Santa Clara D\'oeste'
            ),
            281 =>
            array (
                'id' => '3782',
                'estado_id' => '26',
                'descricao' => 'Santa Cruz da Conceição',
            ),
            282 =>
            array (
                'id' => '3783',
                'estado_id' => '26',
                'descricao' => 'Santa Cruz da Esperança'
            ),
            283 =>
            array (
                'id' => '3784',
                'estado_id' => '26',
                'descricao' => 'Santa Cruz das Palmeiras'
            ),
            284 =>
            array (
                'id' => '3785',
                'estado_id' => '26',
                'descricao' => 'Santa Cruz do Rio Pardo'
            ),
            285 =>
            array (
                'id' => '3786',
                'estado_id' => '26',
                'descricao' => 'Santa Ernestina'
            ),
            286 =>
            array (
                'id' => '3787',
                'estado_id' => '26',
                'descricao' => 'Santa Fé do Sul'
            ),
            287 =>
            array (
                'id' => '3788',
                'estado_id' => '26',
                'descricao' => 'Santa Gertrudes'
            ),
            288 =>
            array (
                'id' => '3789',
                'estado_id' => '26',
                'descricao' => 'Santa Isabel'
            ),
            289 =>
            array (
                'id' => '3790',
                'estado_id' => '26',
                'descricao' => 'Santa Lúcia'
            ),
            290 =>
            array (
                'id' => '3791',
                'estado_id' => '26',
                'descricao' => 'Santa Maria da Serra'
            ),
            291 =>
            array (
                'id' => '3792',
                'estado_id' => '26',
                'descricao' => 'Santa Mercedes'
            ),
            292 =>
            array (
                'id' => '3793',
                'estado_id' => '26',
                'descricao' => 'Santana da Ponte Pensa'
            ),
            293 =>
            array (
                'id' => '3794',
                'estado_id' => '26',
                'descricao' => 'Santana de Parnaíba',
            ),
            294 =>
            array (
                'id' => '3795',
                'estado_id' => '26',
                'descricao' => 'Santa Rita D\'oeste'
            ),
            295 =>
            array (
                'id' => '3796',
                'estado_id' => '26',
                'descricao' => 'Santa Rita do Passa Quatro',
            ),
            296 =>
            array (
                'id' => '3797',
                'estado_id' => '26',
                'descricao' => 'Santa Rosa de Viterbo'
            ),
            297 =>
            array (
                'id' => '3798',
                'estado_id' => '26',
                'descricao' => 'Santa Salete'
            ),
            298 =>
            array (
                'id' => '3799',
                'estado_id' => '26',
                'descricao' => 'Santo Anastácio'
            ),
            299 =>
            array (
                'id' => '3800',
                'estado_id' => '26',
                'descricao' => 'Santo André',
            ),
            300 =>
            array (
                'id' => '3801',
                'estado_id' => '26',
                'descricao' => 'Santo Antônio da Alegria'
            ),
            301 =>
            array (
                'id' => '3802',
                'estado_id' => '26',
                'descricao' => 'Santo Antônio de Posse'
            ),
            302 =>
            array (
                'id' => '3803',
                'estado_id' => '26',
                'descricao' => 'Santo Antônio do Aracanguá'
            ),
            303 =>
            array (
                'id' => '3804',
                'estado_id' => '26',
                'descricao' => 'Santo Antônio do Jardim'
            ),
            304 =>
            array (
                'id' => '3805',
                'estado_id' => '26',
                'descricao' => 'Santo Antônio do Pinhal'
            ),
            305 =>
            array (
                'id' => '3806',
                'estado_id' => '26',
                'descricao' => 'Santo Expedito'
            ),
            306 =>
            array (
                'id' => '3807',
                'estado_id' => '26',
                'descricao' => 'Santópolis do Aguapeí'
            ),
            307 =>
            array (
                'id' => '3808',
                'estado_id' => '26',
                'descricao' => 'Santos',
            ),
            308 =>
            array (
                'id' => '3809',
                'estado_id' => '26',
                'descricao' => 'São Bento do Sapucaí'
            ),
            309 =>
            array (
                'id' => '3810',
                'estado_id' => '26',
                'descricao' => 'São Bernardo do Campo',
            ),
            310 =>
            array (
                'id' => '3811',
                'estado_id' => '26',
                'descricao' => 'São Caetano do Sul',
            ),
            311 =>
            array (
                'id' => '3812',
                'estado_id' => '26',
                'descricao' => 'São Carlos',
            ),
            312 =>
            array (
                'id' => '3813',
                'estado_id' => '26',
                'descricao' => 'São Francisco'
            ),
            313 =>
            array (
                'id' => '3814',
                'estado_id' => '26',
                'descricao' => 'São João da Boa Vista',
            ),
            314 =>
            array (
                'id' => '3815',
                'estado_id' => '26',
                'descricao' => 'São João das Duas Pontes'
            ),
            315 =>
            array (
                'id' => '3816',
                'estado_id' => '26',
                'descricao' => 'São João de Iracema'
            ),
            316 =>
            array (
                'id' => '3817',
                'estado_id' => '26',
                'descricao' => 'São João do Pau D\'alho'
            ),
            317 =>
            array (
                'id' => '3818',
                'estado_id' => '26',
                'descricao' => 'São Joaquim da Barra'
            ),
            318 =>
            array (
                'id' => '3819',
                'estado_id' => '26',
                'descricao' => 'São José da Bela Vista'
            ),
            319 =>
            array (
                'id' => '3820',
                'estado_id' => '26',
                'descricao' => 'São José do Barreiro'
            ),
            320 =>
            array (
                'id' => '3821',
                'estado_id' => '26',
                'descricao' => 'São José do Rio Pardo'
            ),
            321 =>
            array (
                'id' => '3822',
                'estado_id' => '26',
                'descricao' => 'São José do Rio Preto',
            ),
            322 =>
            array (
                'id' => '3823',
                'estado_id' => '26',
                'descricao' => 'São José dos Campos',
            ),
            323 =>
            array (
                'id' => '3824',
                'estado_id' => '26',
                'descricao' => 'São Lourenço da Serra'
            ),
            324 =>
            array (
                'id' => '3825',
                'estado_id' => '26',
                'descricao' => 'São Luís do Paraitinga'
            ),
            325 =>
            array (
                'id' => '3826',
                'estado_id' => '26',
                'descricao' => 'São Manuel'
            ),
            326 =>
            array (
                'id' => '3827',
                'estado_id' => '26',
                'descricao' => 'São Miguel Arcanjo'
            ),
            327 =>
            array (
                'id' => '3828',
                'estado_id' => '26',
                'descricao' => 'São Paulo',
            ),
            328 =>
            array (
                'id' => '3829',
                'estado_id' => '26',
                'descricao' => 'São Pedro'
            ),
            329 =>
            array (
                'id' => '3830',
                'estado_id' => '26',
                'descricao' => 'São Pedro do Turvo'
            ),
            330 =>
            array (
                'id' => '3831',
                'estado_id' => '26',
                'descricao' => 'São Roque',
            ),
            331 =>
            array (
                'id' => '3832',
                'estado_id' => '26',
                'descricao' => 'São Sebastião',
            ),
            332 =>
            array (
                'id' => '3833',
                'estado_id' => '26',
                'descricao' => 'São Sebastião da Grama'
            ),
            333 =>
            array (
                'id' => '3834',
                'estado_id' => '26',
                'descricao' => 'São Simão'
            ),
            334 =>
            array (
                'id' => '3835',
                'estado_id' => '26',
                'descricao' => 'São Vicente'
            ),
            335 =>
            array (
                'id' => '3836',
                'estado_id' => '26',
                'descricao' => 'Sarapuí'
            ),
            336 =>
            array (
                'id' => '3837',
                'estado_id' => '26',
                'descricao' => 'Sarutaiá'
            ),
            337 =>
            array (
                'id' => '3838',
                'estado_id' => '26',
                'descricao' => 'Sebastianópolis do Sul'
            ),
            338 =>
            array (
                'id' => '3839',
                'estado_id' => '26',
                'descricao' => 'Serra Azul'
            ),
            339 =>
            array (
                'id' => '3840',
                'estado_id' => '26',
                'descricao' => 'Serrana'
            ),
            340 =>
            array (
                'id' => '3841',
                'estado_id' => '26',
                'descricao' => 'Serra Negra',
            ),
            341 =>
            array (
                'id' => '3842',
                'estado_id' => '26',
                'descricao' => 'Sertãozinho',
            ),
            342 =>
            array (
                'id' => '3843',
                'estado_id' => '26',
                'descricao' => 'Sete Barras'
            ),
            343 =>
            array (
                'id' => '3844',
                'estado_id' => '26',
                'descricao' => 'Severínia'
            ),
            344 =>
            array (
                'id' => '3845',
                'estado_id' => '26',
                'descricao' => 'Silveiras'
            ),
            345 =>
            array (
                'id' => '3846',
                'estado_id' => '26',
                'descricao' => 'Socorro'
            ),
            346 =>
            array (
                'id' => '3847',
                'estado_id' => '26',
                'descricao' => 'Sorocaba',
            ),
            347 =>
            array (
                'id' => '3848',
                'estado_id' => '26',
                'descricao' => 'Sud Mennucci'
            ),
            348 =>
            array (
                'id' => '3849',
                'estado_id' => '26',
                'descricao' => 'Sumaré'
            ),
            349 =>
            array (
                'id' => '3850',
                'estado_id' => '26',
                'descricao' => 'Suzano'
            ),
            350 =>
            array (
                'id' => '3851',
                'estado_id' => '26',
                'descricao' => 'Suzanápolis'
            ),
            351 =>
            array (
                'id' => '3852',
                'estado_id' => '26',
                'descricao' => 'Tabapuã'
            ),
            352 =>
            array (
                'id' => '3853',
                'estado_id' => '26',
                'descricao' => 'Tabatinga'
            ),
            353 =>
            array (
                'id' => '3854',
                'estado_id' => '26',
                'descricao' => 'Taboão da Serra'
            ),
            354 =>
            array (
                'id' => '3855',
                'estado_id' => '26',
                'descricao' => 'Taciba'
            ),
            355 =>
            array (
                'id' => '3856',
                'estado_id' => '26',
                'descricao' => 'Taguaí'
            ),
            356 =>
            array (
                'id' => '3857',
                'estado_id' => '26',
                'descricao' => 'Taiaçu'
            ),
            357 =>
            array (
                'id' => '3858',
                'estado_id' => '26',
                'descricao' => 'Taiúva'
            ),
            358 =>
            array (
                'id' => '3859',
                'estado_id' => '26',
                'descricao' => 'Tambaú'
            ),
            359 =>
            array (
                'id' => '3860',
                'estado_id' => '26',
                'descricao' => 'Tanabi'
            ),
            360 =>
            array (
                'id' => '3861',
                'estado_id' => '26',
                'descricao' => 'Tapiraí'
            ),
            361 =>
            array (
                'id' => '3862',
                'estado_id' => '26',
                'descricao' => 'Tapiratiba'
            ),
            362 =>
            array (
                'id' => '3863',
                'estado_id' => '26',
                'descricao' => 'Taquaral'
            ),
            363 =>
            array (
                'id' => '3864',
                'estado_id' => '26',
                'descricao' => 'Taquaritinga'
            ),
            364 =>
            array (
                'id' => '3865',
                'estado_id' => '26',
                'descricao' => 'Taquarituba'
            ),
            365 =>
            array (
                'id' => '3866',
                'estado_id' => '26',
                'descricao' => 'Taquarivaí'
            ),
            366 =>
            array (
                'id' => '3867',
                'estado_id' => '26',
                'descricao' => 'Tarabai'
            ),
            367 =>
            array (
                'id' => '3868',
                'estado_id' => '26',
                'descricao' => 'Tarumã'
            ),
            368 =>
            array (
                'id' => '3869',
                'estado_id' => '26',
                'descricao' => 'Tatuí'
            ),
            369 =>
            array (
                'id' => '3870',
                'estado_id' => '26',
                'descricao' => 'Taubaté',
            ),
            370 =>
            array (
                'id' => '3871',
                'estado_id' => '26',
                'descricao' => 'Tejupá'
            ),
            371 =>
            array (
                'id' => '3872',
                'estado_id' => '26',
                'descricao' => 'Teodoro Sampaio'
            ),
            372 =>
            array (
                'id' => '3873',
                'estado_id' => '26',
                'descricao' => 'Terra Roxa'
            ),
            373 =>
            array (
                'id' => '3874',
                'estado_id' => '26',
                'descricao' => 'Tietê',
            ),
            374 =>
            array (
                'id' => '3875',
                'estado_id' => '26',
                'descricao' => 'Timburi'
            ),
            375 =>
            array (
                'id' => '3876',
                'estado_id' => '26',
                'descricao' => 'Torre de Pedra'
            ),
            376 =>
            array (
                'id' => '3877',
                'estado_id' => '26',
                'descricao' => 'Torrinha'
            ),
            377 =>
            array (
                'id' => '3878',
                'estado_id' => '26',
                'descricao' => 'Trabiju'
            ),
            378 =>
            array (
                'id' => '3879',
                'estado_id' => '26',
                'descricao' => 'Tremembé',
            ),
            379 =>
            array (
                'id' => '3880',
                'estado_id' => '26',
                'descricao' => 'Três Fronteiras'
            ),
            380 =>
            array (
                'id' => '3881',
                'estado_id' => '26',
                'descricao' => 'Tuiuti'
            ),
            381 =>
            array (
                'id' => '3882',
                'estado_id' => '26',
                'descricao' => 'Tupã',
            ),
            382 =>
            array (
                'id' => '3883',
                'estado_id' => '26',
                'descricao' => 'Tupi Paulista',
            ),
            383 =>
            array (
                'id' => '3884',
                'estado_id' => '26',
                'descricao' => 'Turiúba'
            ),
            384 =>
            array (
                'id' => '3885',
                'estado_id' => '26',
                'descricao' => 'Turmalina'
            ),
            385 =>
            array (
                'id' => '3886',
                'estado_id' => '26',
                'descricao' => 'Ubarana'
            ),
            386 =>
            array (
                'id' => '3887',
                'estado_id' => '26',
                'descricao' => 'Ubatuba'
            ),
            387 =>
            array (
                'id' => '3888',
                'estado_id' => '26',
                'descricao' => 'Ubirajara'
            ),
            388 =>
            array (
                'id' => '3889',
                'estado_id' => '26',
                'descricao' => 'Uchoa'
            ),
            389 =>
            array (
                'id' => '3890',
                'estado_id' => '26',
                'descricao' => 'União Paulista'
            ),
            390 =>
            array (
                'id' => '3891',
                'estado_id' => '26',
                'descricao' => 'Urânia'
            ),
            391 =>
            array (
                'id' => '3892',
                'estado_id' => '26',
                'descricao' => 'Uru'
            ),
            392 =>
            array (
                'id' => '3893',
                'estado_id' => '26',
                'descricao' => 'Urupês'
            ),
            393 =>
            array (
                'id' => '3894',
                'estado_id' => '26',
                'descricao' => 'Valentim Gentil'
            ),
            394 =>
            array (
                'id' => '3895',
                'estado_id' => '26',
                'descricao' => 'Valinhos',
            ),
            395 =>
            array (
                'id' => '3896',
                'estado_id' => '26',
                'descricao' => 'Valparaíso'
            ),
            396 =>
            array (
                'id' => '3897',
                'estado_id' => '26',
                'descricao' => 'Vargem'
            ),
            397 =>
            array (
                'id' => '3898',
                'estado_id' => '26',
                'descricao' => 'Vargem Grande do Sul'
            ),
            398 =>
            array (
                'id' => '3899',
                'estado_id' => '26',
                'descricao' => 'Vargem Grande Paulista'
            ),
            399 =>
            array (
                'id' => '3900',
                'estado_id' => '26',
                'descricao' => 'Várzea Paulista'
            ),
            400 =>
            array (
                'id' => '3901',
                'estado_id' => '26',
                'descricao' => 'Vera Cruz'
            ),
            401 =>
            array (
                'id' => '3902',
                'estado_id' => '26',
                'descricao' => 'Vinhedo',
            ),
            402 =>
            array (
                'id' => '3903',
                'estado_id' => '26',
                'descricao' => 'Viradouro'
            ),
            403 =>
            array (
                'id' => '3904',
                'estado_id' => '26',
                'descricao' => 'Vista Alegre do Alto'
            ),
            404 =>
            array (
                'id' => '3905',
                'estado_id' => '26',
                'descricao' => 'Vitória Brasil'
            ),
            405 =>
            array (
                'id' => '3906',
                'estado_id' => '26',
                'descricao' => 'Votorantim'
            ),
            406 =>
            array (
                'id' => '3907',
                'estado_id' => '26',
                'descricao' => 'Votuporanga',
            ),
            407 =>
            array (
                'id' => '3908',
                'estado_id' => '26',
                'descricao' => 'Zacarias'
            ),
            408 =>
            array (
                'id' => '3909',
                'estado_id' => '26',
                'descricao' => 'Chavantes'
            ),
            409 =>
            array (
                'id' => '3910',
                'estado_id' => '26',
                'descricao' => 'Estiva Gerbi'
            ),
            410 =>
            array (
                'id' => '3911',
                'estado_id' => '18',
                'descricao' => 'Abatiá'
            ),
            411 =>
            array (
                'id' => '3912',
                'estado_id' => '18',
                'descricao' => 'Adrianópolis'
            ),
            412 =>
            array (
                'id' => '3913',
                'estado_id' => '18',
                'descricao' => 'Agudos do Sul'
            ),
            413 =>
            array (
                'id' => '3914',
                'estado_id' => '18',
                'descricao' => 'Almirante Tamandaré'
            ),
            414 =>
            array (
                'id' => '3915',
                'estado_id' => '18',
                'descricao' => 'Altamira do Paraná'
            ),
            415 =>
            array (
                'id' => '3916',
                'estado_id' => '18',
                'descricao' => 'Altônia'
            ),
            416 =>
            array (
                'id' => '3917',
                'estado_id' => '18',
                'descricao' => 'Alto Paraná'
            ),
            417 =>
            array (
                'id' => '3918',
                'estado_id' => '18',
                'descricao' => 'Alto Piquiri'
            ),
            418 =>
            array (
                'id' => '3919',
                'estado_id' => '18',
                'descricao' => 'Alvorada do Sul'
            ),
            419 =>
            array (
                'id' => '3920',
                'estado_id' => '18',
                'descricao' => 'Amaporã'
            ),
            420 =>
            array (
                'id' => '3921',
                'estado_id' => '18',
                'descricao' => 'Ampére'
            ),
            421 =>
            array (
                'id' => '3922',
                'estado_id' => '18',
                'descricao' => 'Anahy'
            ),
            422 =>
            array (
                'id' => '3923',
                'estado_id' => '18',
                'descricao' => 'Andirá'
            ),
            423 =>
            array (
                'id' => '3924',
                'estado_id' => '18',
                'descricao' => 'Ângulo'
            ),
            424 =>
            array (
                'id' => '3925',
                'estado_id' => '18',
                'descricao' => 'Antonina'
            ),
            425 =>
            array (
                'id' => '3926',
                'estado_id' => '18',
                'descricao' => 'Antônio Olinto'
            ),
            426 =>
            array (
                'id' => '3927',
                'estado_id' => '18',
                'descricao' => 'Apucarana'
            ),
            427 =>
            array (
                'id' => '3928',
                'estado_id' => '18',
                'descricao' => 'Arapongas'
            ),
            428 =>
            array (
                'id' => '3929',
                'estado_id' => '18',
                'descricao' => 'Arapoti'
            ),
            429 =>
            array (
                'id' => '3930',
                'estado_id' => '18',
                'descricao' => 'Arapuã'
            ),
            430 =>
            array (
                'id' => '3931',
                'estado_id' => '18',
                'descricao' => 'Araruna'
            ),
            431 =>
            array (
                'id' => '3932',
                'estado_id' => '18',
                'descricao' => 'Araucária'
            ),
            432 =>
            array (
                'id' => '3933',
                'estado_id' => '18',
                'descricao' => 'Ariranha do Ivaí'
            ),
            433 =>
            array (
                'id' => '3934',
                'estado_id' => '18',
                'descricao' => 'Assaí'
            ),
            434 =>
            array (
                'id' => '3935',
                'estado_id' => '18',
                'descricao' => 'Assis Chateaubriand'
            ),
            435 =>
            array (
                'id' => '3936',
                'estado_id' => '18',
                'descricao' => 'Astorga'
            ),
            436 =>
            array (
                'id' => '3937',
                'estado_id' => '18',
                'descricao' => 'Atalaia'
            ),
            437 =>
            array (
                'id' => '3938',
                'estado_id' => '18',
                'descricao' => 'Balsa Nova'
            ),
            438 =>
            array (
                'id' => '3939',
                'estado_id' => '18',
                'descricao' => 'Bandeirantes'
            ),
            439 =>
            array (
                'id' => '3940',
                'estado_id' => '18',
                'descricao' => 'Barbosa Ferraz'
            ),
            440 =>
            array (
                'id' => '3941',
                'estado_id' => '18',
                'descricao' => 'Barracão'
            ),
            441 =>
            array (
                'id' => '3942',
                'estado_id' => '18',
                'descricao' => 'Barra do Jacaré'
            ),
            442 =>
            array (
                'id' => '3943',
                'estado_id' => '18',
                'descricao' => 'Bela Vista da Caroba'
            ),
            443 =>
            array (
                'id' => '3944',
                'estado_id' => '18',
                'descricao' => 'Bela Vista do Paraíso'
            ),
            444 =>
            array (
                'id' => '3945',
                'estado_id' => '18',
                'descricao' => 'Bituruna'
            ),
            445 =>
            array (
                'id' => '3946',
                'estado_id' => '18',
                'descricao' => 'Boa Esperança'
            ),
            446 =>
            array (
                'id' => '3947',
                'estado_id' => '18',
                'descricao' => 'Boa Esperança do Iguaçu'
            ),
            447 =>
            array (
                'id' => '3948',
                'estado_id' => '18',
                'descricao' => 'Boa Ventura de São Roque'
            ),
            448 =>
            array (
                'id' => '3949',
                'estado_id' => '18',
                'descricao' => 'Boa Vista da Aparecida'
            ),
            449 =>
            array (
                'id' => '3950',
                'estado_id' => '18',
                'descricao' => 'Bocaiúva do Sul'
            ),
            450 =>
            array (
                'id' => '3951',
                'estado_id' => '18',
                'descricao' => 'Bom Jesus do Sul'
            ),
            451 =>
            array (
                'id' => '3952',
                'estado_id' => '18',
                'descricao' => 'Bom Sucesso'
            ),
            452 =>
            array (
                'id' => '3953',
                'estado_id' => '18',
                'descricao' => 'Bom Sucesso do Sul'
            ),
            453 =>
            array (
                'id' => '3954',
                'estado_id' => '18',
                'descricao' => 'Borrazópolis'
            ),
            454 =>
            array (
                'id' => '3955',
                'estado_id' => '18',
                'descricao' => 'Braganey'
            ),
            455 =>
            array (
                'id' => '3956',
                'estado_id' => '18',
                'descricao' => 'Brasilândia do Sul'
            ),
            456 =>
            array (
                'id' => '3957',
                'estado_id' => '18',
                'descricao' => 'Cafeara'
            ),
            457 =>
            array (
                'id' => '3958',
                'estado_id' => '18',
                'descricao' => 'Cafelândia'
            ),
            458 =>
            array (
                'id' => '3959',
                'estado_id' => '18',
                'descricao' => 'Cafezal do Sul'
            ),
            459 =>
            array (
                'id' => '3960',
                'estado_id' => '18',
                'descricao' => 'Califórnia'
            ),
            460 =>
            array (
                'id' => '3961',
                'estado_id' => '18',
                'descricao' => 'Cambará'
            ),
            461 =>
            array (
                'id' => '3962',
                'estado_id' => '18',
                'descricao' => 'Cambé'
            ),
            462 =>
            array (
                'id' => '3963',
                'estado_id' => '18',
                'descricao' => 'Cambira'
            ),
            463 =>
            array (
                'id' => '3964',
                'estado_id' => '18',
                'descricao' => 'Campina da Lagoa'
            ),
            464 =>
            array (
                'id' => '3965',
                'estado_id' => '18',
                'descricao' => 'Campina do Simão'
            ),
            465 =>
            array (
                'id' => '3966',
                'estado_id' => '18',
                'descricao' => 'Campina Grande do Sul'
            ),
            466 =>
            array (
                'id' => '3967',
                'estado_id' => '18',
                'descricao' => 'Campo Bonito'
            ),
            467 =>
            array (
                'id' => '3968',
                'estado_id' => '18',
                'descricao' => 'Campo do Tenente'
            ),
            468 =>
            array (
                'id' => '3969',
                'estado_id' => '18',
                'descricao' => 'Campo Largo'
            ),
            469 =>
            array (
                'id' => '3970',
                'estado_id' => '18',
                'descricao' => 'Campo Magro'
            ),
            470 =>
            array (
                'id' => '3971',
                'estado_id' => '18',
                'descricao' => 'Campo Mourão'
            ),
            471 =>
            array (
                'id' => '3972',
                'estado_id' => '18',
                'descricao' => 'Cândido de Abreu'
            ),
            472 =>
            array (
                'id' => '3973',
                'estado_id' => '18',
                'descricao' => 'Candói'
            ),
            473 =>
            array (
                'id' => '3974',
                'estado_id' => '18',
                'descricao' => 'Cantagalo'
            ),
            474 =>
            array (
                'id' => '3975',
                'estado_id' => '18',
                'descricao' => 'Capanema'
            ),
            475 =>
            array (
                'id' => '3976',
                'estado_id' => '18',
                'descricao' => 'Capitão Leônidas Marques'
            ),
            476 =>
            array (
                'id' => '3977',
                'estado_id' => '18',
                'descricao' => 'Carambeí'
            ),
            477 =>
            array (
                'id' => '3978',
                'estado_id' => '18',
                'descricao' => 'Carlópolis'
            ),
            478 =>
            array (
                'id' => '3979',
                'estado_id' => '18',
                'descricao' => 'Cascavel',
            ),
            479 =>
            array (
                'id' => '3980',
                'estado_id' => '18',
                'descricao' => 'Castro'
            ),
            480 =>
            array (
                'id' => '3981',
                'estado_id' => '18',
                'descricao' => 'Catanduvas'
            ),
            481 =>
            array (
                'id' => '3982',
                'estado_id' => '18',
                'descricao' => 'Centenário do Sul'
            ),
            482 =>
            array (
                'id' => '3983',
                'estado_id' => '18',
                'descricao' => 'Cerro Azul'
            ),
            483 =>
            array (
                'id' => '3984',
                'estado_id' => '18',
                'descricao' => 'Céu Azul'
            ),
            484 =>
            array (
                'id' => '3985',
                'estado_id' => '18',
                'descricao' => 'Chopinzinho'
            ),
            485 =>
            array (
                'id' => '3986',
                'estado_id' => '18',
                'descricao' => 'Cianorte'
            ),
            486 =>
            array (
                'id' => '3987',
                'estado_id' => '18',
                'descricao' => 'Cidade Gaúcha'
            ),
            487 =>
            array (
                'id' => '3988',
                'estado_id' => '18',
                'descricao' => 'Clevelândia'
            ),
            488 =>
            array (
                'id' => '3989',
                'estado_id' => '18',
                'descricao' => 'Colombo'
            ),
            489 =>
            array (
                'id' => '3990',
                'estado_id' => '18',
                'descricao' => 'Colorado'
            ),
            490 =>
            array (
                'id' => '3991',
                'estado_id' => '18',
                'descricao' => 'Congonhinhas'
            ),
            491 =>
            array (
                'id' => '3992',
                'estado_id' => '18',
                'descricao' => 'Conselheiro Mairinck'
            ),
            492 =>
            array (
                'id' => '3993',
                'estado_id' => '18',
                'descricao' => 'Contenda'
            ),
            493 =>
            array (
                'id' => '3994',
                'estado_id' => '18',
                'descricao' => 'Corbélia'
            ),
            494 =>
            array (
                'id' => '3995',
                'estado_id' => '18',
                'descricao' => 'Cornélio Procópio'
            ),
            495 =>
            array (
                'id' => '3996',
                'estado_id' => '18',
                'descricao' => 'Coronel Domingos Soares'
            ),
            496 =>
            array (
                'id' => '3997',
                'estado_id' => '18',
                'descricao' => 'Coronel Vivida'
            ),
            497 =>
            array (
                'id' => '3998',
                'estado_id' => '18',
                'descricao' => 'Corumbataí do Sul'
            ),
            498 =>
            array (
                'id' => '3999',
                'estado_id' => '18',
                'descricao' => 'Cruzeiro do Iguaçu'
            ),
            499 =>
            array (
                'id' => '4000',
                'estado_id' => '18',
                'descricao' => 'Cruzeiro do Oeste'
            ),
        ));
        \DB::table('municipios')->insert(array (
            0 =>
            array (
                'id' => '4001',
                'estado_id' => '18',
                'descricao' => 'Cruzeiro do Sul'
            ),
            1 =>
            array (
                'id' => '4002',
                'estado_id' => '18',
                'descricao' => 'Cruz Machado'
            ),
            2 =>
            array (
                'id' => '4003',
                'estado_id' => '18',
                'descricao' => 'Cruzmaltina'
            ),
            3 =>
            array (
                'id' => '4004',
                'estado_id' => '18',
                'descricao' => 'Curitiba',
            ),
            4 =>
            array (
                'id' => '4005',
                'estado_id' => '18',
                'descricao' => 'Curiúva'
            ),
            5 =>
            array (
                'id' => '4006',
                'estado_id' => '18',
                'descricao' => 'Diamante do Norte'
            ),
            6 =>
            array (
                'id' => '4007',
                'estado_id' => '18',
                'descricao' => 'Diamante do Sul'
            ),
            7 =>
            array (
                'id' => '4008',
                'estado_id' => '18',
                'descricao' => 'Diamante D\'oeste'
            ),
            8 =>
            array (
                'id' => '4009',
                'estado_id' => '18',
                'descricao' => 'Dois Vizinhos'
            ),
            9 =>
            array (
                'id' => '4010',
                'estado_id' => '18',
                'descricao' => 'Douradina'
            ),
            10 =>
            array (
                'id' => '4011',
                'estado_id' => '18',
                'descricao' => 'Doutor Camargo'
            ),
            11 =>
            array (
                'id' => '4012',
                'estado_id' => '18',
                'descricao' => 'Enéas Marques',
            ),
            12 =>
            array (
                'id' => '4013',
                'estado_id' => '18',
                'descricao' => 'Engenheiro Beltrão'
            ),
            13 =>
            array (
                'id' => '4014',
                'estado_id' => '18',
                'descricao' => 'Esperança Nova'
            ),
            14 =>
            array (
                'id' => '4015',
                'estado_id' => '18',
                'descricao' => 'Entre Rios do Oeste',
            ),
            15 =>
            array (
                'id' => '4016',
                'estado_id' => '18',
                'descricao' => 'Espigão Alto do Iguaçu'
            ),
            16 =>
            array (
                'id' => '4017',
                'estado_id' => '18',
                'descricao' => 'Farol'
            ),
            17 =>
            array (
                'id' => '4018',
                'estado_id' => '18',
                'descricao' => 'Faxinal'
            ),
            18 =>
            array (
                'id' => '4019',
                'estado_id' => '18',
                'descricao' => 'Fazenda Rio Grande'
            ),
            19 =>
            array (
                'id' => '4020',
                'estado_id' => '18',
                'descricao' => 'Fênix'
            ),
            20 =>
            array (
                'id' => '4021',
                'estado_id' => '18',
                'descricao' => 'Fernandes Pinheiro'
            ),
            21 =>
            array (
                'id' => '4022',
                'estado_id' => '18',
                'descricao' => 'Figueira'
            ),
            22 =>
            array (
                'id' => '4023',
                'estado_id' => '18',
                'descricao' => 'Floraí'
            ),
            23 =>
            array (
                'id' => '4024',
                'estado_id' => '18',
                'descricao' => 'Flor da Serra do Sul'
            ),
            24 =>
            array (
                'id' => '4025',
                'estado_id' => '18',
                'descricao' => 'Floresta'
            ),
            25 =>
            array (
                'id' => '4026',
                'estado_id' => '18',
                'descricao' => 'Florestópolis'
            ),
            26 =>
            array (
                'id' => '4027',
                'estado_id' => '18',
                'descricao' => 'Flórida'
            ),
            27 =>
            array (
                'id' => '4028',
                'estado_id' => '18',
                'descricao' => 'Formosa do Oeste'
            ),
            28 =>
            array (
                'id' => '4029',
                'estado_id' => '18',
                'descricao' => 'Foz do Iguaçu'
            ),
            29 =>
            array (
                'id' => '4030',
                'estado_id' => '18',
                'descricao' => 'Francisco Alves'
            ),
            30 =>
            array (
                'id' => '4031',
                'estado_id' => '18',
                'descricao' => 'Francisco Beltrão'
            ),
            31 =>
            array (
                'id' => '4032',
                'estado_id' => '18',
                'descricao' => 'Foz do Jordão'
            ),
            32 =>
            array (
                'id' => '4033',
                'estado_id' => '18',
                'descricao' => 'General Carneiro'
            ),
            33 =>
            array (
                'id' => '4034',
                'estado_id' => '18',
                'descricao' => 'Godoy Moreira'
            ),
            34 =>
            array (
                'id' => '4035',
                'estado_id' => '18',
                'descricao' => 'Goioerê'
            ),
            35 =>
            array (
                'id' => '4036',
                'estado_id' => '18',
                'descricao' => 'Goioxim'
            ),
            36 =>
            array (
                'id' => '4037',
                'estado_id' => '18',
                'descricao' => 'Grandes Rios'
            ),
            37 =>
            array (
                'id' => '4038',
                'estado_id' => '18',
                'descricao' => 'Guaíra'
            ),
            38 =>
            array (
                'id' => '4039',
                'estado_id' => '18',
                'descricao' => 'Guairaçá'
            ),
            39 =>
            array (
                'id' => '4040',
                'estado_id' => '18',
                'descricao' => 'Guamiranga'
            ),
            40 =>
            array (
                'id' => '4041',
                'estado_id' => '18',
                'descricao' => 'Guapirama'
            ),
            41 =>
            array (
                'id' => '4042',
                'estado_id' => '18',
                'descricao' => 'Guaporema'
            ),
            42 =>
            array (
                'id' => '4043',
                'estado_id' => '18',
                'descricao' => 'Guaraci'
            ),
            43 =>
            array (
                'id' => '4044',
                'estado_id' => '18',
                'descricao' => 'Guaraniaçu'
            ),
            44 =>
            array (
                'id' => '4045',
                'estado_id' => '18',
                'descricao' => 'Guarapuava'
            ),
            45 =>
            array (
                'id' => '4046',
                'estado_id' => '18',
                'descricao' => 'Guaraqueçaba'
            ),
            46 =>
            array (
                'id' => '4047',
                'estado_id' => '18',
                'descricao' => 'Guaratuba'
            ),
            47 =>
            array (
                'id' => '4048',
                'estado_id' => '18',
                'descricao' => 'Honório Serpa'
            ),
            48 =>
            array (
                'id' => '4049',
                'estado_id' => '18',
                'descricao' => 'Ibaiti'
            ),
            49 =>
            array (
                'id' => '4050',
                'estado_id' => '18',
                'descricao' => 'Ibema'
            ),
            50 =>
            array (
                'id' => '4051',
                'estado_id' => '18',
                'descricao' => 'Ibiporã'
            ),
            51 =>
            array (
                'id' => '4052',
                'estado_id' => '18',
                'descricao' => 'Icaraíma'
            ),
            52 =>
            array (
                'id' => '4053',
                'estado_id' => '18',
                'descricao' => 'Iguaraçu'
            ),
            53 =>
            array (
                'id' => '4054',
                'estado_id' => '18',
                'descricao' => 'Iguatu'
            ),
            54 =>
            array (
                'id' => '4055',
                'estado_id' => '18',
                'descricao' => 'Imbaú'
            ),
            55 =>
            array (
                'id' => '4056',
                'estado_id' => '18',
                'descricao' => 'Imbituva'
            ),
            56 =>
            array (
                'id' => '4057',
                'estado_id' => '18',
                'descricao' => 'Inácio Martins'
            ),
            57 =>
            array (
                'id' => '4058',
                'estado_id' => '18',
                'descricao' => 'Inajá'
            ),
            58 =>
            array (
                'id' => '4059',
                'estado_id' => '18',
                'descricao' => 'Indianópolis'
            ),
            59 =>
            array (
                'id' => '4060',
                'estado_id' => '18',
                'descricao' => 'Ipiranga'
            ),
            60 =>
            array (
                'id' => '4061',
                'estado_id' => '18',
                'descricao' => 'Iporã'
            ),
            61 =>
            array (
                'id' => '4062',
                'estado_id' => '18',
                'descricao' => 'Iracema do Oeste'
            ),
            62 =>
            array (
                'id' => '4063',
                'estado_id' => '18',
                'descricao' => 'Irati'
            ),
            63 =>
            array (
                'id' => '4064',
                'estado_id' => '18',
                'descricao' => 'Iretama'
            ),
            64 =>
            array (
                'id' => '4065',
                'estado_id' => '18',
                'descricao' => 'Itaguajé'
            ),
            65 =>
            array (
                'id' => '4066',
                'estado_id' => '18',
                'descricao' => 'Itaipulândia',
            ),
            66 =>
            array (
                'id' => '4067',
                'estado_id' => '18',
                'descricao' => 'Itambaracá'
            ),
            67 =>
            array (
                'id' => '4068',
                'estado_id' => '18',
                'descricao' => 'Itambé'
            ),
            68 =>
            array (
                'id' => '4069',
                'estado_id' => '18',
                'descricao' => 'Itapejara D\'oeste'
            ),
            69 =>
            array (
                'id' => '4070',
                'estado_id' => '18',
                'descricao' => 'Itaperuçu'
            ),
            70 =>
            array (
                'id' => '4071',
                'estado_id' => '18',
                'descricao' => 'Itaúna do Sul'
            ),
            71 =>
            array (
                'id' => '4072',
                'estado_id' => '18',
                'descricao' => 'Ivaí'
            ),
            72 =>
            array (
                'id' => '4073',
                'estado_id' => '18',
                'descricao' => 'Ivaiporã'
            ),
            73 =>
            array (
                'id' => '4074',
                'estado_id' => '18',
                'descricao' => 'Ivaté'
            ),
            74 =>
            array (
                'id' => '4075',
                'estado_id' => '18',
                'descricao' => 'Ivatuba'
            ),
            75 =>
            array (
                'id' => '4076',
                'estado_id' => '18',
                'descricao' => 'Jaboti'
            ),
            76 =>
            array (
                'id' => '4077',
                'estado_id' => '18',
                'descricao' => 'Jacarezinho'
            ),
            77 =>
            array (
                'id' => '4078',
                'estado_id' => '18',
                'descricao' => 'Jaguapitã'
            ),
            78 =>
            array (
                'id' => '4079',
                'estado_id' => '18',
                'descricao' => 'Jaguariaíva'
            ),
            79 =>
            array (
                'id' => '4080',
                'estado_id' => '18',
                'descricao' => 'Jandaia do Sul'
            ),
            80 =>
            array (
                'id' => '4081',
                'estado_id' => '18',
                'descricao' => 'Janiópolis'
            ),
            81 =>
            array (
                'id' => '4082',
                'estado_id' => '18',
                'descricao' => 'Japira'
            ),
            82 =>
            array (
                'id' => '4083',
                'estado_id' => '18',
                'descricao' => 'Japurá'
            ),
            83 =>
            array (
                'id' => '4084',
                'estado_id' => '18',
                'descricao' => 'Jardim Alegre'
            ),
            84 =>
            array (
                'id' => '4085',
                'estado_id' => '18',
                'descricao' => 'Jardim Olinda'
            ),
            85 =>
            array (
                'id' => '4086',
                'estado_id' => '18',
                'descricao' => 'Jataizinho'
            ),
            86 =>
            array (
                'id' => '4087',
                'estado_id' => '18',
                'descricao' => 'Jesuítas'
            ),
            87 =>
            array (
                'id' => '4088',
                'estado_id' => '18',
                'descricao' => 'Joaquim Távora'
            ),
            88 =>
            array (
                'id' => '4089',
                'estado_id' => '18',
                'descricao' => 'Jundiaí do Sul'
            ),
            89 =>
            array (
                'id' => '4090',
                'estado_id' => '18',
                'descricao' => 'Juranda'
            ),
            90 =>
            array (
                'id' => '4091',
                'estado_id' => '18',
                'descricao' => 'Jussara'
            ),
            91 =>
            array (
                'id' => '4092',
                'estado_id' => '18',
                'descricao' => 'Kaloré'
            ),
            92 =>
            array (
                'id' => '4093',
                'estado_id' => '18',
                'descricao' => 'Lapa'
            ),
            93 =>
            array (
                'id' => '4094',
                'estado_id' => '18',
                'descricao' => 'Laranjal'
            ),
            94 =>
            array (
                'id' => '4095',
                'estado_id' => '18',
                'descricao' => 'Laranjeiras do Sul'
            ),
            95 =>
            array (
                'id' => '4096',
                'estado_id' => '18',
                'descricao' => 'Leópolis'
            ),
            96 =>
            array (
                'id' => '4097',
                'estado_id' => '18',
                'descricao' => 'Lidianópolis'
            ),
            97 =>
            array (
                'id' => '4098',
                'estado_id' => '18',
                'descricao' => 'Lindoeste'
            ),
            98 =>
            array (
                'id' => '4099',
                'estado_id' => '18',
                'descricao' => 'Loanda'
            ),
            99 =>
            array (
                'id' => '4100',
                'estado_id' => '18',
                'descricao' => 'Lobato'
            ),
            100 =>
            array (
                'id' => '4101',
                'estado_id' => '18',
                'descricao' => 'Londrina',
            ),
            101 =>
            array (
                'id' => '4102',
                'estado_id' => '18',
                'descricao' => 'Luiziana'
            ),
            102 =>
            array (
                'id' => '4103',
                'estado_id' => '18',
                'descricao' => 'Lunardelli'
            ),
            103 =>
            array (
                'id' => '4104',
                'estado_id' => '18',
                'descricao' => 'Lupionópolis'
            ),
            104 =>
            array (
                'id' => '4105',
                'estado_id' => '18',
                'descricao' => 'Mallet'
            ),
            105 =>
            array (
                'id' => '4106',
                'estado_id' => '18',
                'descricao' => 'Mamborê'
            ),
            106 =>
            array (
                'id' => '4107',
                'estado_id' => '18',
                'descricao' => 'Mandaguaçu'
            ),
            107 =>
            array (
                'id' => '4108',
                'estado_id' => '18',
                'descricao' => 'Mandaguari'
            ),
            108 =>
            array (
                'id' => '4109',
                'estado_id' => '18',
                'descricao' => 'Mandirituba'
            ),
            109 =>
            array (
                'id' => '4110',
                'estado_id' => '18',
                'descricao' => 'Manfrinópolis'
            ),
            110 =>
            array (
                'id' => '4111',
                'estado_id' => '18',
                'descricao' => 'Mangueirinha'
            ),
            111 =>
            array (
                'id' => '4112',
                'estado_id' => '18',
                'descricao' => 'Manoel Ribas'
            ),
            112 =>
            array (
                'id' => '4113',
                'estado_id' => '18',
                'descricao' => 'Marechal Cândido Rondon',
            ),
            113 =>
            array (
                'id' => '4114',
                'estado_id' => '18',
                'descricao' => 'Maria Helena'
            ),
            114 =>
            array (
                'id' => '4115',
                'estado_id' => '18',
                'descricao' => 'Marialva'
            ),
            115 =>
            array (
                'id' => '4116',
                'estado_id' => '18',
                'descricao' => 'Marilândia do Sul'
            ),
            116 =>
            array (
                'id' => '4117',
                'estado_id' => '18',
                'descricao' => 'Marilena'
            ),
            117 =>
            array (
                'id' => '4118',
                'estado_id' => '18',
                'descricao' => 'Mariluz'
            ),
            118 =>
            array (
                'id' => '4119',
                'estado_id' => '18',
                'descricao' => 'Maringá',
            ),
            119 =>
            array (
                'id' => '4120',
                'estado_id' => '18',
                'descricao' => 'Mariópolis'
            ),
            120 =>
            array (
                'id' => '4121',
                'estado_id' => '18',
                'descricao' => 'Maripá'
            ),
            121 =>
            array (
                'id' => '4122',
                'estado_id' => '18',
                'descricao' => 'Marmeleiro'
            ),
            122 =>
            array (
                'id' => '4123',
                'estado_id' => '18',
                'descricao' => 'Marquinho'
            ),
            123 =>
            array (
                'id' => '4124',
                'estado_id' => '18',
                'descricao' => 'Marumbi'
            ),
            124 =>
            array (
                'id' => '4125',
                'estado_id' => '18',
                'descricao' => 'Matelândia'
            ),
            125 =>
            array (
                'id' => '4126',
                'estado_id' => '18',
                'descricao' => 'Matinhos'
            ),
            126 =>
            array (
                'id' => '4127',
                'estado_id' => '18',
                'descricao' => 'Mato Rico'
            ),
            127 =>
            array (
                'id' => '4128',
                'estado_id' => '18',
                'descricao' => 'Mauá da Serra'
            ),
            128 =>
            array (
                'id' => '4129',
                'estado_id' => '18',
                'descricao' => 'Medianeira',
            ),
            129 =>
            array (
                'id' => '4130',
                'estado_id' => '18',
                'descricao' => 'Mercedes'
            ),
            130 =>
            array (
                'id' => '4131',
                'estado_id' => '18',
                'descricao' => 'Mirador'
            ),
            131 =>
            array (
                'id' => '4132',
                'estado_id' => '18',
                'descricao' => 'Miraselva'
            ),
            132 =>
            array (
                'id' => '4133',
                'estado_id' => '18',
                'descricao' => 'Missal'
            ),
            133 =>
            array (
                'id' => '4134',
                'estado_id' => '18',
                'descricao' => 'Moreira Sales'
            ),
            134 =>
            array (
                'id' => '4135',
                'estado_id' => '18',
                'descricao' => 'Morretes'
            ),
            135 =>
            array (
                'id' => '4136',
                'estado_id' => '18',
                'descricao' => 'Munhoz de Melo'
            ),
            136 =>
            array (
                'id' => '4137',
                'estado_id' => '18',
                'descricao' => 'Nossa Senhora das Graças'
            ),
            137 =>
            array (
                'id' => '4138',
                'estado_id' => '18',
                'descricao' => 'Nova Aliança do Ivaí'
            ),
            138 =>
            array (
                'id' => '4139',
                'estado_id' => '18',
                'descricao' => 'Nova América da Colina'
            ),
            139 =>
            array (
                'id' => '4140',
                'estado_id' => '18',
                'descricao' => 'Nova Aurora'
            ),
            140 =>
            array (
                'id' => '4141',
                'estado_id' => '18',
                'descricao' => 'Nova Cantu'
            ),
            141 =>
            array (
                'id' => '4142',
                'estado_id' => '18',
                'descricao' => 'Nova Esperança'
            ),
            142 =>
            array (
                'id' => '4143',
                'estado_id' => '18',
                'descricao' => 'Nova Esperança do Sudoeste'
            ),
            143 =>
            array (
                'id' => '4144',
                'estado_id' => '18',
                'descricao' => 'Nova Fátima'
            ),
            144 =>
            array (
                'id' => '4145',
                'estado_id' => '18',
                'descricao' => 'Nova Laranjeiras'
            ),
            145 =>
            array (
                'id' => '4146',
                'estado_id' => '18',
                'descricao' => 'Nova Londrina'
            ),
            146 =>
            array (
                'id' => '4147',
                'estado_id' => '18',
                'descricao' => 'Nova Olímpia'
            ),
            147 =>
            array (
                'id' => '4148',
                'estado_id' => '18',
                'descricao' => 'Nova Santa Bárbara'
            ),
            148 =>
            array (
                'id' => '4149',
                'estado_id' => '18',
                'descricao' => 'Nova Santa Rosa'
            ),
            149 =>
            array (
                'id' => '4150',
                'estado_id' => '18',
                'descricao' => 'Nova Prata do Iguaçu'
            ),
            150 =>
            array (
                'id' => '4151',
                'estado_id' => '18',
                'descricao' => 'Nova Tebas'
            ),
            151 =>
            array (
                'id' => '4152',
                'estado_id' => '18',
                'descricao' => 'Novo Itacolomi'
            ),
            152 =>
            array (
                'id' => '4153',
                'estado_id' => '18',
                'descricao' => 'Ortigueira'
            ),
            153 =>
            array (
                'id' => '4154',
                'estado_id' => '18',
                'descricao' => 'Ourizona'
            ),
            154 =>
            array (
                'id' => '4155',
                'estado_id' => '18',
                'descricao' => 'Ouro Verde do Oeste'
            ),
            155 =>
            array (
                'id' => '4156',
                'estado_id' => '18',
                'descricao' => 'Paiçandu'
            ),
            156 =>
            array (
                'id' => '4157',
                'estado_id' => '18',
                'descricao' => 'Palmas'
            ),
            157 =>
            array (
                'id' => '4158',
                'estado_id' => '18',
                'descricao' => 'Palmeira'
            ),
            158 =>
            array (
                'id' => '4159',
                'estado_id' => '18',
                'descricao' => 'Palmital'
            ),
            159 =>
            array (
                'id' => '4160',
                'estado_id' => '18',
                'descricao' => 'Palotina'
            ),
            160 =>
            array (
                'id' => '4161',
                'estado_id' => '18',
                'descricao' => 'Paraíso do Norte'
            ),
            161 =>
            array (
                'id' => '4162',
                'estado_id' => '18',
                'descricao' => 'Paranacity'
            ),
            162 =>
            array (
                'id' => '4163',
                'estado_id' => '18',
                'descricao' => 'Paranaguá'
            ),
            163 =>
            array (
                'id' => '4164',
                'estado_id' => '18',
                'descricao' => 'Paranapoema'
            ),
            164 =>
            array (
                'id' => '4165',
                'estado_id' => '18',
                'descricao' => 'Paranavaí'
            ),
            165 =>
            array (
                'id' => '4166',
                'estado_id' => '18',
                'descricao' => 'Pato Bragado'
            ),
            166 =>
            array (
                'id' => '4167',
                'estado_id' => '18',
                'descricao' => 'Pato Branco',
            ),
            167 =>
            array (
                'id' => '4168',
                'estado_id' => '18',
                'descricao' => 'Paula Freitas'
            ),
            168 =>
            array (
                'id' => '4169',
                'estado_id' => '18',
                'descricao' => 'Paulo Frontin'
            ),
            169 =>
            array (
                'id' => '4170',
                'estado_id' => '18',
                'descricao' => 'Peabiru'
            ),
            170 =>
            array (
                'id' => '4171',
                'estado_id' => '18',
                'descricao' => 'Perobal'
            ),
            171 =>
            array (
                'id' => '4172',
                'estado_id' => '18',
                'descricao' => 'Pérola'
            ),
            172 =>
            array (
                'id' => '4173',
                'estado_id' => '18',
                'descricao' => 'Pérola D\'oeste'
            ),
            173 =>
            array (
                'id' => '4174',
                'estado_id' => '18',
                'descricao' => 'Piên'
            ),
            174 =>
            array (
                'id' => '4175',
                'estado_id' => '18',
                'descricao' => 'Pinhais'
            ),
            175 =>
            array (
                'id' => '4176',
                'estado_id' => '18',
                'descricao' => 'Pinhalão'
            ),
            176 =>
            array (
                'id' => '4177',
                'estado_id' => '18',
                'descricao' => 'Pinhal de São Bento'
            ),
            177 =>
            array (
                'id' => '4178',
                'estado_id' => '18',
                'descricao' => 'Pinhão'
            ),
            178 =>
            array (
                'id' => '4179',
                'estado_id' => '18',
                'descricao' => 'Piraí do Sul'
            ),
            179 =>
            array (
                'id' => '4180',
                'estado_id' => '18',
                'descricao' => 'Piraquara'
            ),
            180 =>
            array (
                'id' => '4181',
                'estado_id' => '18',
                'descricao' => 'Pitanga'
            ),
            181 =>
            array (
                'id' => '4182',
                'estado_id' => '18',
                'descricao' => 'Pitangueiras'
            ),
            182 =>
            array (
                'id' => '4183',
                'estado_id' => '18',
                'descricao' => 'Planaltina do Paraná'
            ),
            183 =>
            array (
                'id' => '4184',
                'estado_id' => '18',
                'descricao' => 'Planalto'
            ),
            184 =>
            array (
                'id' => '4185',
                'estado_id' => '18',
                'descricao' => 'Ponta Grossa',
            ),
            185 =>
            array (
                'id' => '4186',
                'estado_id' => '18',
                'descricao' => 'Pontal do Paraná',
            ),
            186 =>
            array (
                'id' => '4187',
                'estado_id' => '18',
                'descricao' => 'Porecatu'
            ),
            187 =>
            array (
                'id' => '4188',
                'estado_id' => '18',
                'descricao' => 'Porto Amazonas'
            ),
            188 =>
            array (
                'id' => '4189',
                'estado_id' => '18',
                'descricao' => 'Porto Barreiro'
            ),
            189 =>
            array (
                'id' => '4190',
                'estado_id' => '18',
                'descricao' => 'Porto Rico'
            ),
            190 =>
            array (
                'id' => '4191',
                'estado_id' => '18',
                'descricao' => 'Porto Vitória'
            ),
            191 =>
            array (
                'id' => '4192',
                'estado_id' => '18',
                'descricao' => 'Prado Ferreira'
            ),
            192 =>
            array (
                'id' => '4193',
                'estado_id' => '18',
                'descricao' => 'Pranchita'
            ),
            193 =>
            array (
                'id' => '4194',
                'estado_id' => '18',
                'descricao' => 'Presidente Castelo Branco'
            ),
            194 =>
            array (
                'id' => '4195',
                'estado_id' => '18',
                'descricao' => 'Primeiro de Maio'
            ),
            195 =>
            array (
                'id' => '4196',
                'estado_id' => '18',
                'descricao' => 'Prudentópolis'
            ),
            196 =>
            array (
                'id' => '4197',
                'estado_id' => '18',
                'descricao' => 'Quarto Centenário'
            ),
            197 =>
            array (
                'id' => '4198',
                'estado_id' => '18',
                'descricao' => 'Quatiguá'
            ),
            198 =>
            array (
                'id' => '4199',
                'estado_id' => '18',
                'descricao' => 'Quatro Barras'
            ),
            199 =>
            array (
                'id' => '4200',
                'estado_id' => '18',
                'descricao' => 'Quatro Pontes',
            ),
            200 =>
            array (
                'id' => '4201',
                'estado_id' => '18',
                'descricao' => 'Quedas do Iguaçu'
            ),
            201 =>
            array (
                'id' => '4202',
                'estado_id' => '18',
                'descricao' => 'Querência do Norte'
            ),
            202 =>
            array (
                'id' => '4203',
                'estado_id' => '18',
                'descricao' => 'Quinta do Sol'
            ),
            203 =>
            array (
                'id' => '4204',
                'estado_id' => '18',
                'descricao' => 'Quitandinha'
            ),
            204 =>
            array (
                'id' => '4205',
                'estado_id' => '18',
                'descricao' => 'Ramilândia'
            ),
            205 =>
            array (
                'id' => '4206',
                'estado_id' => '18',
                'descricao' => 'Rancho Alegre'
            ),
            206 =>
            array (
                'id' => '4207',
                'estado_id' => '18',
                'descricao' => 'Rancho Alegre D\'oeste'
            ),
            207 =>
            array (
                'id' => '4208',
                'estado_id' => '18',
                'descricao' => 'Realeza'
            ),
            208 =>
            array (
                'id' => '4209',
                'estado_id' => '18',
                'descricao' => 'Rebouças'
            ),
            209 =>
            array (
                'id' => '4210',
                'estado_id' => '18',
                'descricao' => 'Renascença'
            ),
            210 =>
            array (
                'id' => '4211',
                'estado_id' => '18',
                'descricao' => 'Reserva'
            ),
            211 =>
            array (
                'id' => '4212',
                'estado_id' => '18',
                'descricao' => 'Reserva do Iguaçu'
            ),
            212 =>
            array (
                'id' => '4213',
                'estado_id' => '18',
                'descricao' => 'Ribeirão Claro'
            ),
            213 =>
            array (
                'id' => '4214',
                'estado_id' => '18',
                'descricao' => 'Ribeirão do Pinhal'
            ),
            214 =>
            array (
                'id' => '4215',
                'estado_id' => '18',
                'descricao' => 'Rio Azul'
            ),
            215 =>
            array (
                'id' => '4216',
                'estado_id' => '18',
                'descricao' => 'Rio Bom'
            ),
            216 =>
            array (
                'id' => '4217',
                'estado_id' => '18',
                'descricao' => 'Rio Bonito do Iguaçu'
            ),
            217 =>
            array (
                'id' => '4218',
                'estado_id' => '18',
                'descricao' => 'Rio Branco do Ivaí'
            ),
            218 =>
            array (
                'id' => '4219',
                'estado_id' => '18',
                'descricao' => 'Rio Branco do Sul'
            ),
            219 =>
            array (
                'id' => '4220',
                'estado_id' => '18',
                'descricao' => 'Rio Negro'
            ),
            220 =>
            array (
                'id' => '4221',
                'estado_id' => '18',
                'descricao' => 'Rolândia'
            ),
            221 =>
            array (
                'id' => '4222',
                'estado_id' => '18',
                'descricao' => 'Roncador'
            ),
            222 =>
            array (
                'id' => '4223',
                'estado_id' => '18',
                'descricao' => 'Rondon'
            ),
            223 =>
            array (
                'id' => '4224',
                'estado_id' => '18',
                'descricao' => 'Rosário do Ivaí'
            ),
            224 =>
            array (
                'id' => '4225',
                'estado_id' => '18',
                'descricao' => 'Sabáudia'
            ),
            225 =>
            array (
                'id' => '4226',
                'estado_id' => '18',
                'descricao' => 'Salgado Filho'
            ),
            226 =>
            array (
                'id' => '4227',
                'estado_id' => '18',
                'descricao' => 'Salto do Itararé'
            ),
            227 =>
            array (
                'id' => '4228',
                'estado_id' => '18',
                'descricao' => 'Salto do Lontra'
            ),
            228 =>
            array (
                'id' => '4229',
                'estado_id' => '18',
                'descricao' => 'Santa Amélia'
            ),
            229 =>
            array (
                'id' => '4230',
                'estado_id' => '18',
                'descricao' => 'Santa Cecília do Pavão'
            ),
            230 =>
            array (
                'id' => '4231',
                'estado_id' => '18',
                'descricao' => 'Santa Cruz de Monte Castelo'
            ),
            231 =>
            array (
                'id' => '4232',
                'estado_id' => '18',
                'descricao' => 'Santa Fé'
            ),
            232 =>
            array (
                'id' => '4233',
                'estado_id' => '18',
                'descricao' => 'Santa Helena'
            ),
            233 =>
            array (
                'id' => '4234',
                'estado_id' => '18',
                'descricao' => 'Santa Inês'
            ),
            234 =>
            array (
                'id' => '4235',
                'estado_id' => '18',
                'descricao' => 'Santa Isabel do Ivaí'
            ),
            235 =>
            array (
                'id' => '4236',
                'estado_id' => '18',
                'descricao' => 'Santa Izabel do Oeste'
            ),
            236 =>
            array (
                'id' => '4237',
                'estado_id' => '18',
                'descricao' => 'Santa Lúcia'
            ),
            237 =>
            array (
                'id' => '4238',
                'estado_id' => '18',
                'descricao' => 'Santa Maria do Oeste'
            ),
            238 =>
            array (
                'id' => '4239',
                'estado_id' => '18',
                'descricao' => 'Santa Mariana'
            ),
            239 =>
            array (
                'id' => '4240',
                'estado_id' => '18',
                'descricao' => 'Santa Mônica'
            ),
            240 =>
            array (
                'id' => '4241',
                'estado_id' => '18',
                'descricao' => 'Santana do Itararé'
            ),
            241 =>
            array (
                'id' => '4242',
                'estado_id' => '18',
                'descricao' => 'Santa Tereza do Oeste'
            ),
            242 =>
            array (
                'id' => '4243',
                'estado_id' => '18',
                'descricao' => 'Santa Terezinha de Itaipu'
            ),
            243 =>
            array (
                'id' => '4244',
                'estado_id' => '18',
                'descricao' => 'Santo Antônio da Platina'
            ),
            244 =>
            array (
                'id' => '4245',
                'estado_id' => '18',
                'descricao' => 'Santo Antônio do Caiuá'
            ),
            245 =>
            array (
                'id' => '4246',
                'estado_id' => '18',
                'descricao' => 'Santo Antônio do Paraíso'
            ),
            246 =>
            array (
                'id' => '4247',
                'estado_id' => '18',
                'descricao' => 'Santo Antônio do Sudoeste'
            ),
            247 =>
            array (
                'id' => '4248',
                'estado_id' => '18',
                'descricao' => 'Santo Inácio'
            ),
            248 =>
            array (
                'id' => '4249',
                'estado_id' => '18',
                'descricao' => 'São Carlos do Ivaí'
            ),
            249 =>
            array (
                'id' => '4250',
                'estado_id' => '18',
                'descricao' => 'São Jerônimo da Serra'
            ),
            250 =>
            array (
                'id' => '4251',
                'estado_id' => '18',
                'descricao' => 'São João'
            ),
            251 =>
            array (
                'id' => '4252',
                'estado_id' => '18',
                'descricao' => 'São João do Caiuá'
            ),
            252 =>
            array (
                'id' => '4253',
                'estado_id' => '18',
                'descricao' => 'São João do Ivaí'
            ),
            253 =>
            array (
                'id' => '4254',
                'estado_id' => '18',
                'descricao' => 'São João do Triunfo'
            ),
            254 =>
            array (
                'id' => '4255',
                'estado_id' => '18',
                'descricao' => 'São Jorge D\'oeste'
            ),
            255 =>
            array (
                'id' => '4256',
                'estado_id' => '18',
                'descricao' => 'São Jorge do Ivaí'
            ),
            256 =>
            array (
                'id' => '4257',
                'estado_id' => '18',
                'descricao' => 'São Jorge do Patrocínio'
            ),
            257 =>
            array (
                'id' => '4258',
                'estado_id' => '18',
                'descricao' => 'São José da Boa Vista'
            ),
            258 =>
            array (
                'id' => '4259',
                'estado_id' => '18',
                'descricao' => 'São José das Palmeiras'
            ),
            259 =>
            array (
                'id' => '4260',
                'estado_id' => '18',
                'descricao' => 'São José dos Pinhais'
            ),
            260 =>
            array (
                'id' => '4261',
                'estado_id' => '18',
                'descricao' => 'São Manoel do Paraná'
            ),
            261 =>
            array (
                'id' => '4262',
                'estado_id' => '18',
                'descricao' => 'São Mateus do Sul'
            ),
            262 =>
            array (
                'id' => '4263',
                'estado_id' => '18',
                'descricao' => 'São Miguel do Iguaçu'
            ),
            263 =>
            array (
                'id' => '4264',
                'estado_id' => '18',
                'descricao' => 'São Pedro do Iguaçu'
            ),
            264 =>
            array (
                'id' => '4265',
                'estado_id' => '18',
                'descricao' => 'São Pedro do Ivaí'
            ),
            265 =>
            array (
                'id' => '4266',
                'estado_id' => '18',
                'descricao' => 'São Pedro do Paraná'
            ),
            266 =>
            array (
                'id' => '4267',
                'estado_id' => '18',
                'descricao' => 'São Sebastião da Amoreira'
            ),
            267 =>
            array (
                'id' => '4268',
                'estado_id' => '18',
                'descricao' => 'São Tomé'
            ),
            268 =>
            array (
                'id' => '4269',
                'estado_id' => '18',
                'descricao' => 'Sapopema'
            ),
            269 =>
            array (
                'id' => '4270',
                'estado_id' => '18',
                'descricao' => 'Sarandi'
            ),
            270 =>
            array (
                'id' => '4271',
                'estado_id' => '18',
                'descricao' => 'Saudade do Iguaçu'
            ),
            271 =>
            array (
                'id' => '4272',
                'estado_id' => '18',
                'descricao' => 'Sengés'
            ),
            272 =>
            array (
                'id' => '4273',
                'estado_id' => '18',
                'descricao' => 'Serranópolis do Iguaçu',
            ),
            273 =>
            array (
                'id' => '4274',
                'estado_id' => '18',
                'descricao' => 'Sertaneja'
            ),
            274 =>
            array (
                'id' => '4275',
                'estado_id' => '18',
                'descricao' => 'Sertanópolis'
            ),
            275 =>
            array (
                'id' => '4276',
                'estado_id' => '18',
                'descricao' => 'Siqueira Campos'
            ),
            276 =>
            array (
                'id' => '4277',
                'estado_id' => '18',
                'descricao' => 'Sulina'
            ),
            277 =>
            array (
                'id' => '4278',
                'estado_id' => '18',
                'descricao' => 'Tamarana'
            ),
            278 =>
            array (
                'id' => '4279',
                'estado_id' => '18',
                'descricao' => 'Tamboara'
            ),
            279 =>
            array (
                'id' => '4280',
                'estado_id' => '18',
                'descricao' => 'Tapejara'
            ),
            280 =>
            array (
                'id' => '4281',
                'estado_id' => '18',
                'descricao' => 'Tapira'
            ),
            281 =>
            array (
                'id' => '4282',
                'estado_id' => '18',
                'descricao' => 'Teixeira Soares'
            ),
            282 =>
            array (
                'id' => '4283',
                'estado_id' => '18',
                'descricao' => 'Telêmaco Borba'
            ),
            283 =>
            array (
                'id' => '4284',
                'estado_id' => '18',
                'descricao' => 'Terra Boa'
            ),
            284 =>
            array (
                'id' => '4285',
                'estado_id' => '18',
                'descricao' => 'Terra Rica'
            ),
            285 =>
            array (
                'id' => '4286',
                'estado_id' => '18',
                'descricao' => 'Terra Roxa'
            ),
            286 =>
            array (
                'id' => '4287',
                'estado_id' => '18',
                'descricao' => 'Tibagi'
            ),
            287 =>
            array (
                'id' => '4288',
                'estado_id' => '18',
                'descricao' => 'Tijucas do Sul'
            ),
            288 =>
            array (
                'id' => '4289',
                'estado_id' => '18',
                'descricao' => 'Toledo'
            ),
            289 =>
            array (
                'id' => '4290',
                'estado_id' => '18',
                'descricao' => 'Tomazina'
            ),
            290 =>
            array (
                'id' => '4291',
                'estado_id' => '18',
                'descricao' => 'Três Barras do Paraná'
            ),
            291 =>
            array (
                'id' => '4292',
                'estado_id' => '18',
                'descricao' => 'Tunas do Paraná'
            ),
            292 =>
            array (
                'id' => '4293',
                'estado_id' => '18',
                'descricao' => 'Tuneiras do Oeste'
            ),
            293 =>
            array (
                'id' => '4294',
                'estado_id' => '18',
                'descricao' => 'Tupãssi'
            ),
            294 =>
            array (
                'id' => '4295',
                'estado_id' => '18',
                'descricao' => 'Turvo'
            ),
            295 =>
            array (
                'id' => '4296',
                'estado_id' => '18',
                'descricao' => 'Ubiratã'
            ),
            296 =>
            array (
                'id' => '4297',
                'estado_id' => '18',
                'descricao' => 'Umuarama'
            ),
            297 =>
            array (
                'id' => '4298',
                'estado_id' => '18',
                'descricao' => 'União da Vitória'
            ),
            298 =>
            array (
                'id' => '4299',
                'estado_id' => '18',
                'descricao' => 'Uniflor'
            ),
            299 =>
            array (
                'id' => '4300',
                'estado_id' => '18',
                'descricao' => 'Uraí'
            ),
            300 =>
            array (
                'id' => '4301',
                'estado_id' => '18',
                'descricao' => 'Wenceslau Braz'
            ),
            301 =>
            array (
                'id' => '4302',
                'estado_id' => '18',
                'descricao' => 'Ventania'
            ),
            302 =>
            array (
                'id' => '4303',
                'estado_id' => '18',
                'descricao' => 'Vera Cruz do Oeste'
            ),
            303 =>
            array (
                'id' => '4304',
                'estado_id' => '18',
                'descricao' => 'Verê'
            ),
            304 =>
            array (
                'id' => '4305',
                'estado_id' => '18',
                'descricao' => 'Alto Paraíso'
            ),
            305 =>
            array (
                'id' => '4306',
                'estado_id' => '18',
                'descricao' => 'Doutor Ulysses'
            ),
            306 =>
            array (
                'id' => '4307',
                'estado_id' => '18',
                'descricao' => 'Virmond'
            ),
            307 =>
            array (
                'id' => '4308',
                'estado_id' => '18',
                'descricao' => 'Vitorino'
            ),
            308 =>
            array (
                'id' => '4309',
                'estado_id' => '18',
                'descricao' => 'Xambrê'
            ),
            309 =>
            array (
                'id' => '4310',
                'estado_id' => '24',
                'descricao' => 'Abdon Batista'
            ),
            310 =>
            array (
                'id' => '4311',
                'estado_id' => '24',
                'descricao' => 'Abelardo Luz'
            ),
            311 =>
            array (
                'id' => '4312',
                'estado_id' => '24',
                'descricao' => 'Agrolândia'
            ),
            312 =>
            array (
                'id' => '4313',
                'estado_id' => '24',
                'descricao' => 'Agronômica',
            ),
            313 =>
            array (
                'id' => '4314',
                'estado_id' => '24',
                'descricao' => 'Água Doce'
            ),
            314 =>
            array (
                'id' => '4315',
                'estado_id' => '24',
                'descricao' => 'Águas de Chapecó'
            ),
            315 =>
            array (
                'id' => '4316',
                'estado_id' => '24',
                'descricao' => 'Águas Frias'
            ),
            316 =>
            array (
                'id' => '4317',
                'estado_id' => '24',
                'descricao' => 'Águas Mornas'
            ),
            317 =>
            array (
                'id' => '4318',
                'estado_id' => '24',
                'descricao' => 'Alfredo Wagner'
            ),
            318 =>
            array (
                'id' => '4319',
                'estado_id' => '24',
                'descricao' => 'Alto Bela Vista'
            ),
            319 =>
            array (
                'id' => '4320',
                'estado_id' => '24',
                'descricao' => 'Anchieta'
            ),
            320 =>
            array (
                'id' => '4321',
                'estado_id' => '24',
                'descricao' => 'Angelina'
            ),
            321 =>
            array (
                'id' => '4322',
                'estado_id' => '24',
                'descricao' => 'Anita Garibaldi'
            ),
            322 =>
            array (
                'id' => '4323',
                'estado_id' => '24',
                'descricao' => 'Anitápolis'
            ),
            323 =>
            array (
                'id' => '4324',
                'estado_id' => '24',
                'descricao' => 'Antônio Carlos',
            ),
            324 =>
            array (
                'id' => '4325',
                'estado_id' => '24',
                'descricao' => 'Apiúna'
            ),
            325 =>
            array (
                'id' => '4326',
                'estado_id' => '24',
                'descricao' => 'Arabutã'
            ),
            326 =>
            array (
                'id' => '4327',
                'estado_id' => '24',
                'descricao' => 'Araquari'
            ),
            327 =>
            array (
                'id' => '4328',
                'estado_id' => '24',
                'descricao' => 'Araranguá'
            ),
            328 =>
            array (
                'id' => '4329',
                'estado_id' => '24',
                'descricao' => 'Armazém'
            ),
            329 =>
            array (
                'id' => '4330',
                'estado_id' => '24',
                'descricao' => 'Arroio Trinta',
            ),
            330 =>
            array (
                'id' => '4331',
                'estado_id' => '24',
                'descricao' => 'Arvoredo'
            ),
            331 =>
            array (
                'id' => '4332',
                'estado_id' => '24',
                'descricao' => 'Ascurra'
            ),
            332 =>
            array (
                'id' => '4333',
                'estado_id' => '24',
                'descricao' => 'Atalanta'
            ),
            333 =>
            array (
                'id' => '4334',
                'estado_id' => '24',
                'descricao' => 'Aurora'
            ),
            334 =>
            array (
                'id' => '4335',
                'estado_id' => '24',
                'descricao' => 'Balneário Arroio do Silva',
            ),
            335 =>
            array (
                'id' => '4336',
                'estado_id' => '24',
                'descricao' => 'Balneário Camboriú',
            ),
            336 =>
            array (
                'id' => '4337',
                'estado_id' => '24',
                'descricao' => 'Balneário Barra do Sul'
            ),
            337 =>
            array (
                'id' => '4338',
                'estado_id' => '24',
                'descricao' => 'Balneário Gaivota'
            ),
            338 =>
            array (
                'id' => '4339',
                'estado_id' => '24',
                'descricao' => 'Bandeirante'
            ),
            339 =>
            array (
                'id' => '4340',
                'estado_id' => '24',
                'descricao' => 'Barra Bonita'
            ),
            340 =>
            array (
                'id' => '4341',
                'estado_id' => '24',
                'descricao' => 'Barra Velha'
            ),
            341 =>
            array (
                'id' => '4342',
                'estado_id' => '24',
                'descricao' => 'Bela Vista do Toldo'
            ),
            342 =>
            array (
                'id' => '4343',
                'estado_id' => '24',
                'descricao' => 'Belmonte'
            ),
            343 =>
            array (
                'id' => '4344',
                'estado_id' => '24',
                'descricao' => 'Benedito Novo'
            ),
            344 =>
            array (
                'id' => '4345',
                'estado_id' => '24',
                'descricao' => 'Biguaçu'
            ),
            345 =>
            array (
                'id' => '4346',
                'estado_id' => '24',
                'descricao' => 'Blumenau',
            ),
            346 =>
            array (
                'id' => '4347',
                'estado_id' => '24',
                'descricao' => 'Bocaina do Sul'
            ),
            347 =>
            array (
                'id' => '4348',
                'estado_id' => '24',
                'descricao' => 'Bombinhas'
            ),
            348 =>
            array (
                'id' => '4349',
                'estado_id' => '24',
                'descricao' => 'Bom Jardim da Serra'
            ),
            349 =>
            array (
                'id' => '4350',
                'estado_id' => '24',
                'descricao' => 'Bom Jesus'
            ),
            350 =>
            array (
                'id' => '4351',
                'estado_id' => '24',
                'descricao' => 'Bom Jesus do Oeste'
            ),
            351 =>
            array (
                'id' => '4352',
                'estado_id' => '24',
                'descricao' => 'Bom Retiro'
            ),
            352 =>
            array (
                'id' => '4353',
                'estado_id' => '24',
                'descricao' => 'Botuverá'
            ),
            353 =>
            array (
                'id' => '4354',
                'estado_id' => '24',
                'descricao' => 'Braço do Norte'
            ),
            354 =>
            array (
                'id' => '4355',
                'estado_id' => '24',
                'descricao' => 'Braço do Trombudo',
            ),
            355 =>
            array (
                'id' => '4356',
                'estado_id' => '24',
                'descricao' => 'Brunópolis'
            ),
            356 =>
            array (
                'id' => '4357',
                'estado_id' => '24',
                'descricao' => 'Brusque',
            ),
            357 =>
            array (
                'id' => '4358',
                'estado_id' => '24',
                'descricao' => 'Caçador'
            ),
            358 =>
            array (
                'id' => '4359',
                'estado_id' => '24',
                'descricao' => 'Caibi'
            ),
            359 =>
            array (
                'id' => '4360',
                'estado_id' => '24',
                'descricao' => 'Calmon'
            ),
            360 =>
            array (
                'id' => '4361',
                'estado_id' => '24',
                'descricao' => 'Camboriú'
            ),
            361 =>
            array (
                'id' => '4362',
                'estado_id' => '24',
                'descricao' => 'Capão Alto'
            ),
            362 =>
            array (
                'id' => '4363',
                'estado_id' => '24',
                'descricao' => 'Campo Alegre'
            ),
            363 =>
            array (
                'id' => '4364',
                'estado_id' => '24',
                'descricao' => 'Campo Belo do Sul'
            ),
            364 =>
            array (
                'id' => '4365',
                'estado_id' => '24',
                'descricao' => 'Campo Erê'
            ),
            365 =>
            array (
                'id' => '4366',
                'estado_id' => '24',
                'descricao' => 'Campos Novos'
            ),
            366 =>
            array (
                'id' => '4367',
                'estado_id' => '24',
                'descricao' => 'Canelinha'
            ),
            367 =>
            array (
                'id' => '4368',
                'estado_id' => '24',
                'descricao' => 'Canoinhas'
            ),
            368 =>
            array (
                'id' => '4369',
                'estado_id' => '24',
                'descricao' => 'Capinzal'
            ),
            369 =>
            array (
                'id' => '4370',
                'estado_id' => '24',
                'descricao' => 'Capivari de Baixo'
            ),
            370 =>
            array (
                'id' => '4371',
                'estado_id' => '24',
                'descricao' => 'Catanduvas'
            ),
            371 =>
            array (
                'id' => '4372',
                'estado_id' => '24',
                'descricao' => 'Caxambu do Sul'
            ),
            372 =>
            array (
                'id' => '4373',
                'estado_id' => '24',
                'descricao' => 'Celso Ramos'
            ),
            373 =>
            array (
                'id' => '4374',
                'estado_id' => '24',
                'descricao' => 'Cerro Negro'
            ),
            374 =>
            array (
                'id' => '4375',
                'estado_id' => '24',
                'descricao' => 'Chapadão do Lageado'
            ),
            375 =>
            array (
                'id' => '4376',
                'estado_id' => '24',
                'descricao' => 'Chapecó',
            ),
            376 =>
            array (
                'id' => '4377',
                'estado_id' => '24',
                'descricao' => 'Cocal do Sul'
            ),
            377 =>
            array (
                'id' => '4378',
                'estado_id' => '24',
                'descricao' => 'Concórdia',
            ),
            378 =>
            array (
                'id' => '4379',
                'estado_id' => '24',
                'descricao' => 'Cordilheira Alta'
            ),
            379 =>
            array (
                'id' => '4380',
                'estado_id' => '24',
                'descricao' => 'Coronel Freitas'
            ),
            380 =>
            array (
                'id' => '4381',
                'estado_id' => '24',
                'descricao' => 'Coronel Martins'
            ),
            381 =>
            array (
                'id' => '4382',
                'estado_id' => '24',
                'descricao' => 'Corupá',
            ),
            382 =>
            array (
                'id' => '4383',
                'estado_id' => '24',
                'descricao' => 'Correia Pinto'
            ),
            383 =>
            array (
                'id' => '4384',
                'estado_id' => '24',
                'descricao' => 'Criciúma',
            ),
            384 =>
            array (
                'id' => '4385',
                'estado_id' => '24',
                'descricao' => 'Cunha Porã'
            ),
            385 =>
            array (
                'id' => '4386',
                'estado_id' => '24',
                'descricao' => 'Cunhataí'
            ),
            386 =>
            array (
                'id' => '4387',
                'estado_id' => '24',
                'descricao' => 'Curitibanos'
            ),
            387 =>
            array (
                'id' => '4388',
                'estado_id' => '24',
                'descricao' => 'Descanso'
            ),
            388 =>
            array (
                'id' => '4389',
                'estado_id' => '24',
                'descricao' => 'Dionísio Cerqueira'
            ),
            389 =>
            array (
                'id' => '4390',
                'estado_id' => '24',
                'descricao' => 'Dona Emma',
            ),
            390 =>
            array (
                'id' => '4391',
                'estado_id' => '24',
                'descricao' => 'Doutor Pedrinho'
            ),
            391 =>
            array (
                'id' => '4392',
                'estado_id' => '24',
                'descricao' => 'Entre Rios'
            ),
            392 =>
            array (
                'id' => '4393',
                'estado_id' => '24',
                'descricao' => 'Ermo'
            ),
            393 =>
            array (
                'id' => '4394',
                'estado_id' => '24',
                'descricao' => 'Erval Velho'
            ),
            394 =>
            array (
                'id' => '4395',
                'estado_id' => '24',
                'descricao' => 'Faxinal dos Guedes'
            ),
            395 =>
            array (
                'id' => '4396',
                'estado_id' => '24',
                'descricao' => 'Flor do Sertão'
            ),
            396 =>
            array (
                'id' => '4397',
                'estado_id' => '24',
                'descricao' => 'Florianópolis',
            ),
            397 =>
            array (
                'id' => '4398',
                'estado_id' => '24',
                'descricao' => 'Formosa do Sul'
            ),
            398 =>
            array (
                'id' => '4399',
                'estado_id' => '24',
                'descricao' => 'Forquilhinha'
            ),
            399 =>
            array (
                'id' => '4400',
                'estado_id' => '24',
                'descricao' => 'Fraiburgo'
            ),
            400 =>
            array (
                'id' => '4401',
                'estado_id' => '24',
                'descricao' => 'Frei Rogério'
            ),
            401 =>
            array (
                'id' => '4402',
                'estado_id' => '24',
                'descricao' => 'Galvão'
            ),
            402 =>
            array (
                'id' => '4403',
                'estado_id' => '24',
                'descricao' => 'Garopaba'
            ),
            403 =>
            array (
                'id' => '4404',
                'estado_id' => '24',
                'descricao' => 'Garuva'
            ),
            404 =>
            array (
                'id' => '4405',
                'estado_id' => '24',
                'descricao' => 'Gaspar'
            ),
            405 =>
            array (
                'id' => '4406',
                'estado_id' => '24',
                'descricao' => 'Governador Celso Ramos'
            ),
            406 =>
            array (
                'id' => '4407',
                'estado_id' => '24',
                'descricao' => 'Grão Pará',
            ),
            407 =>
            array (
                'id' => '4408',
                'estado_id' => '24',
                'descricao' => 'Gravatal'
            ),
            408 =>
            array (
                'id' => '4409',
                'estado_id' => '24',
                'descricao' => 'Guabiruba'
            ),
            409 =>
            array (
                'id' => '4410',
                'estado_id' => '24',
                'descricao' => 'Guaraciaba'
            ),
            410 =>
            array (
                'id' => '4411',
                'estado_id' => '24',
                'descricao' => 'Guaramirim'
            ),
            411 =>
            array (
                'id' => '4412',
                'estado_id' => '24',
                'descricao' => 'Guarujá do Sul'
            ),
            412 =>
            array (
                'id' => '4413',
                'estado_id' => '24',
                'descricao' => 'Guatambú'
            ),
            413 =>
            array (
                'id' => '4414',
                'estado_id' => '24',
                'descricao' => 'Herval D\'oeste'
            ),
            414 =>
            array (
                'id' => '4415',
                'estado_id' => '24',
                'descricao' => 'Ibiam'
            ),
            415 =>
            array (
                'id' => '4416',
                'estado_id' => '24',
                'descricao' => 'Ibicaré'
            ),
            416 =>
            array (
                'id' => '4417',
                'estado_id' => '24',
                'descricao' => 'Ibirama'
            ),
            417 =>
            array (
                'id' => '4418',
                'estado_id' => '24',
                'descricao' => 'Içara'
            ),
            418 =>
            array (
                'id' => '4419',
                'estado_id' => '24',
                'descricao' => 'Ilhota'
            ),
            419 =>
            array (
                'id' => '4420',
                'estado_id' => '24',
                'descricao' => 'Imaruí'
            ),
            420 =>
            array (
                'id' => '4421',
                'estado_id' => '24',
                'descricao' => 'Imbituba'
            ),
            421 =>
            array (
                'id' => '4422',
                'estado_id' => '24',
                'descricao' => 'Imbuia'
            ),
            422 =>
            array (
                'id' => '4423',
                'estado_id' => '24',
                'descricao' => 'Indaial',
            ),
            423 =>
            array (
                'id' => '4424',
                'estado_id' => '24',
                'descricao' => 'Iomerê'
            ),
            424 =>
            array (
                'id' => '4425',
                'estado_id' => '24',
                'descricao' => 'Ipira'
            ),
            425 =>
            array (
                'id' => '4426',
                'estado_id' => '24',
                'descricao' => 'Iporã do Oeste'
            ),
            426 =>
            array (
                'id' => '4427',
                'estado_id' => '24',
                'descricao' => 'Ipuaçu'
            ),
            427 =>
            array (
                'id' => '4428',
                'estado_id' => '24',
                'descricao' => 'Ipumirim'
            ),
            428 =>
            array (
                'id' => '4429',
                'estado_id' => '24',
                'descricao' => 'Iraceminha'
            ),
            429 =>
            array (
                'id' => '4430',
                'estado_id' => '24',
                'descricao' => 'Irani'
            ),
            430 =>
            array (
                'id' => '4431',
                'estado_id' => '24',
                'descricao' => 'Irati'
            ),
            431 =>
            array (
                'id' => '4432',
                'estado_id' => '24',
                'descricao' => 'Irineópolis'
            ),
            432 =>
            array (
                'id' => '4433',
                'estado_id' => '24',
                'descricao' => 'Itá'
            ),
            433 =>
            array (
                'id' => '4434',
                'estado_id' => '24',
                'descricao' => 'Itaiópolis'
            ),
            434 =>
            array (
                'id' => '4435',
                'estado_id' => '24',
                'descricao' => 'Itajaí',
            ),
            435 =>
            array (
                'id' => '4436',
                'estado_id' => '24',
                'descricao' => 'Itapema',
            ),
            436 =>
            array (
                'id' => '4437',
                'estado_id' => '24',
                'descricao' => 'Itapiranga',
            ),
            437 =>
            array (
                'id' => '4438',
                'estado_id' => '24',
                'descricao' => 'Itapoá'
            ),
            438 =>
            array (
                'id' => '4439',
                'estado_id' => '24',
                'descricao' => 'Ituporanga'
            ),
            439 =>
            array (
                'id' => '4440',
                'estado_id' => '24',
                'descricao' => 'Jaborá'
            ),
            440 =>
            array (
                'id' => '4441',
                'estado_id' => '24',
                'descricao' => 'Jacinto Machado'
            ),
            441 =>
            array (
                'id' => '4442',
                'estado_id' => '24',
                'descricao' => 'Jaguaruna'
            ),
            442 =>
            array (
                'id' => '4443',
                'estado_id' => '24',
                'descricao' => 'Jaraguá do Sul',
            ),
            443 =>
            array (
                'id' => '4444',
                'estado_id' => '24',
                'descricao' => 'Jardinópolis'
            ),
            444 =>
            array (
                'id' => '4445',
                'estado_id' => '24',
                'descricao' => 'Joaçaba',
            ),
            445 =>
            array (
                'id' => '4446',
                'estado_id' => '24',
                'descricao' => 'Joinville',
            ),
            446 =>
            array (
                'id' => '4447',
                'estado_id' => '24',
                'descricao' => 'José Boiteux'
            ),
            447 =>
            array (
                'id' => '4448',
                'estado_id' => '24',
                'descricao' => 'Jupiá'
            ),
            448 =>
            array (
                'id' => '4449',
                'estado_id' => '24',
                'descricao' => 'Lacerdópolis'
            ),
            449 =>
            array (
                'id' => '4450',
                'estado_id' => '24',
                'descricao' => 'Lages'
            ),
            450 =>
            array (
                'id' => '4451',
                'estado_id' => '24',
                'descricao' => 'Laguna'
            ),
            451 =>
            array (
                'id' => '4452',
                'estado_id' => '24',
                'descricao' => 'Lajeado Grande'
            ),
            452 =>
            array (
                'id' => '4453',
                'estado_id' => '24',
                'descricao' => 'Laurentino'
            ),
            453 =>
            array (
                'id' => '4454',
                'estado_id' => '24',
                'descricao' => 'Lauro Muller'
            ),
            454 =>
            array (
                'id' => '4455',
                'estado_id' => '24',
                'descricao' => 'Lebon Régis'
            ),
            455 =>
            array (
                'id' => '4456',
                'estado_id' => '24',
                'descricao' => 'Leoberto Leal'
            ),
            456 =>
            array (
                'id' => '4457',
                'estado_id' => '24',
                'descricao' => 'Lindóia do Sul'
            ),
            457 =>
            array (
                'id' => '4458',
                'estado_id' => '24',
                'descricao' => 'Lontras'
            ),
            458 =>
            array (
                'id' => '4459',
                'estado_id' => '24',
                'descricao' => 'Luiz Alves'
            ),
            459 =>
            array (
                'id' => '4460',
                'estado_id' => '24',
                'descricao' => 'Luzerna'
            ),
            460 =>
            array (
                'id' => '4461',
                'estado_id' => '24',
                'descricao' => 'Macieira'
            ),
            461 =>
            array (
                'id' => '4462',
                'estado_id' => '24',
                'descricao' => 'Mafra'
            ),
            462 =>
            array (
                'id' => '4463',
                'estado_id' => '24',
                'descricao' => 'Major Gercino'
            ),
            463 =>
            array (
                'id' => '4464',
                'estado_id' => '24',
                'descricao' => 'Major Vieira'
            ),
            464 =>
            array (
                'id' => '4465',
                'estado_id' => '24',
                'descricao' => 'Maracajá'
            ),
            465 =>
            array (
                'id' => '4466',
                'estado_id' => '24',
                'descricao' => 'Maravilha'
            ),
            466 =>
            array (
                'id' => '4467',
                'estado_id' => '24',
                'descricao' => 'Marema'
            ),
            467 =>
            array (
                'id' => '4468',
                'estado_id' => '24',
                'descricao' => 'Massaranduba'
            ),
            468 =>
            array (
                'id' => '4469',
                'estado_id' => '24',
                'descricao' => 'Matos Costa'
            ),
            469 =>
            array (
                'id' => '4470',
                'estado_id' => '24',
                'descricao' => 'Meleiro'
            ),
            470 =>
            array (
                'id' => '4471',
                'estado_id' => '24',
                'descricao' => 'Mirim Doce'
            ),
            471 =>
            array (
                'id' => '4472',
                'estado_id' => '24',
                'descricao' => 'Modelo'
            ),
            472 =>
            array (
                'id' => '4473',
                'estado_id' => '24',
                'descricao' => 'Mondaí'
            ),
            473 =>
            array (
                'id' => '4474',
                'estado_id' => '24',
                'descricao' => 'Monte Carlo'
            ),
            474 =>
            array (
                'id' => '4475',
                'estado_id' => '24',
                'descricao' => 'Monte Castelo'
            ),
            475 =>
            array (
                'id' => '4476',
                'estado_id' => '24',
                'descricao' => 'Morro da Fumaça'
            ),
            476 =>
            array (
                'id' => '4477',
                'estado_id' => '24',
                'descricao' => 'Morro Grande'
            ),
            477 =>
            array (
                'id' => '4478',
                'estado_id' => '24',
                'descricao' => 'Navegantes'
            ),
            478 =>
            array (
                'id' => '4479',
                'estado_id' => '24',
                'descricao' => 'Nova Erechim',
            ),
            479 =>
            array (
                'id' => '4480',
                'estado_id' => '24',
                'descricao' => 'Nova Itaberaba'
            ),
            480 =>
            array (
                'id' => '4481',
                'estado_id' => '24',
                'descricao' => 'Nova Trento'
            ),
            481 =>
            array (
                'id' => '4482',
                'estado_id' => '24',
                'descricao' => 'Nova Veneza'
            ),
            482 =>
            array (
                'id' => '4483',
                'estado_id' => '24',
                'descricao' => 'Novo Horizonte'
            ),
            483 =>
            array (
                'id' => '4484',
                'estado_id' => '24',
                'descricao' => 'Orleans'
            ),
            484 =>
            array (
                'id' => '4485',
                'estado_id' => '24',
                'descricao' => 'Otacílio Costa'
            ),
            485 =>
            array (
                'id' => '4486',
                'estado_id' => '24',
                'descricao' => 'Ouro',
            ),
            486 =>
            array (
                'id' => '4487',
                'estado_id' => '24',
                'descricao' => 'Ouro Verde'
            ),
            487 =>
            array (
                'id' => '4488',
                'estado_id' => '24',
                'descricao' => 'Paial'
            ),
            488 =>
            array (
                'id' => '4489',
                'estado_id' => '24',
                'descricao' => 'Painel'
            ),
            489 =>
            array (
                'id' => '4490',
                'estado_id' => '24',
                'descricao' => 'Palhoça'
            ),
            490 =>
            array (
                'id' => '4491',
                'estado_id' => '24',
                'descricao' => 'Palma Sola'
            ),
            491 =>
            array (
                'id' => '4492',
                'estado_id' => '24',
                'descricao' => 'Palmeira'
            ),
            492 =>
            array (
                'id' => '4493',
                'estado_id' => '24',
                'descricao' => 'Palmitos'
            ),
            493 =>
            array (
                'id' => '4494',
                'estado_id' => '24',
                'descricao' => 'Papanduva'
            ),
            494 =>
            array (
                'id' => '4495',
                'estado_id' => '24',
                'descricao' => 'Paraíso'
            ),
            495 =>
            array (
                'id' => '4496',
                'estado_id' => '24',
                'descricao' => 'Passo de Torres'
            ),
            496 =>
            array (
                'id' => '4497',
                'estado_id' => '24',
                'descricao' => 'Passos Maia'
            ),
            497 =>
            array (
                'id' => '4498',
                'estado_id' => '24',
                'descricao' => 'Paulo Lopes'
            ),
            498 =>
            array (
                'id' => '4499',
                'estado_id' => '24',
                'descricao' => 'Pedras Grandes'
            ),
            499 =>
            array (
                'id' => '4500',
                'estado_id' => '24',
                'descricao' => 'Penha'
            ),
        ));
        \DB::table('municipios')->insert(array (
            0 =>
            array (
                'id' => '4501',
                'estado_id' => '24',
                'descricao' => 'Peritiba'
            ),
            1 =>
            array (
                'id' => '4502',
                'estado_id' => '24',
                'descricao' => 'Petrolândia'
            ),
            2 =>
            array (
                'id' => '4503',
                'estado_id' => '24',
                'descricao' => 'Balneário Piçarras'
            ),
            3 =>
            array (
                'id' => '4504',
                'estado_id' => '24',
                'descricao' => 'Pinhalzinho',
            ),
            4 =>
            array (
                'id' => '4505',
                'estado_id' => '24',
                'descricao' => 'Pinheiro Preto'
            ),
            5 =>
            array (
                'id' => '4506',
                'estado_id' => '24',
                'descricao' => 'Piratuba'
            ),
            6 =>
            array (
                'id' => '4507',
                'estado_id' => '24',
                'descricao' => 'Planalto Alegre'
            ),
            7 =>
            array (
                'id' => '4508',
                'estado_id' => '24',
                'descricao' => 'Pomerode',
            ),
            8 =>
            array (
                'id' => '4509',
                'estado_id' => '24',
                'descricao' => 'Ponte Alta'
            ),
            9 =>
            array (
                'id' => '4510',
                'estado_id' => '24',
                'descricao' => 'Ponte Alta do Norte'
            ),
            10 =>
            array (
                'id' => '4511',
                'estado_id' => '24',
                'descricao' => 'Ponte Serrada'
            ),
            11 =>
            array (
                'id' => '4512',
                'estado_id' => '24',
                'descricao' => 'Porto Belo'
            ),
            12 =>
            array (
                'id' => '4513',
                'estado_id' => '24',
                'descricao' => 'Porto União'
            ),
            13 =>
            array (
                'id' => '4514',
                'estado_id' => '24',
                'descricao' => 'Pouso Redondo'
            ),
            14 =>
            array (
                'id' => '4515',
                'estado_id' => '24',
                'descricao' => 'Praia Grande'
            ),
            15 =>
            array (
                'id' => '4516',
                'estado_id' => '24',
                'descricao' => 'Presidente Castello Branco',
            ),
            16 =>
            array (
                'id' => '4517',
                'estado_id' => '24',
                'descricao' => 'Presidente Getúlio',
            ),
            17 =>
            array (
                'id' => '4518',
                'estado_id' => '24',
                'descricao' => 'Presidente Nereu',
            ),
            18 =>
            array (
                'id' => '4519',
                'estado_id' => '24',
                'descricao' => 'Princesa'
            ),
            19 =>
            array (
                'id' => '4520',
                'estado_id' => '24',
                'descricao' => 'Quilombo'
            ),
            20 =>
            array (
                'id' => '4521',
                'estado_id' => '24',
                'descricao' => 'Rancho Queimado'
            ),
            21 =>
            array (
                'id' => '4522',
                'estado_id' => '24',
                'descricao' => 'Rio das Antas'
            ),
            22 =>
            array (
                'id' => '4523',
                'estado_id' => '24',
                'descricao' => 'Rio do Campo',
            ),
            23 =>
            array (
                'id' => '4524',
                'estado_id' => '24',
                'descricao' => 'Rio do Oeste',
            ),
            24 =>
            array (
                'id' => '4525',
                'estado_id' => '24',
                'descricao' => 'Rio dos Cedros'
            ),
            25 =>
            array (
                'id' => '4526',
                'estado_id' => '24',
                'descricao' => 'Rio do Sul',
            ),
            26 =>
            array (
                'id' => '4527',
                'estado_id' => '24',
                'descricao' => 'Rio Fortuna',
            ),
            27 =>
            array (
                'id' => '4528',
                'estado_id' => '24',
                'descricao' => 'Rio Negrinho'
            ),
            28 =>
            array (
                'id' => '4529',
                'estado_id' => '24',
                'descricao' => 'Rio Rufino'
            ),
            29 =>
            array (
                'id' => '4530',
                'estado_id' => '24',
                'descricao' => 'Riqueza'
            ),
            30 =>
            array (
                'id' => '4531',
                'estado_id' => '24',
                'descricao' => 'Rodeio',
            ),
            31 =>
            array (
                'id' => '4532',
                'estado_id' => '24',
                'descricao' => 'Romelândia'
            ),
            32 =>
            array (
                'id' => '4533',
                'estado_id' => '24',
                'descricao' => 'Salete'
            ),
            33 =>
            array (
                'id' => '4534',
                'estado_id' => '24',
                'descricao' => 'Saltinho'
            ),
            34 =>
            array (
                'id' => '4535',
                'estado_id' => '24',
                'descricao' => 'Salto Veloso',
            ),
            35 =>
            array (
                'id' => '4536',
                'estado_id' => '24',
                'descricao' => 'Sangão'
            ),
            36 =>
            array (
                'id' => '4537',
                'estado_id' => '24',
                'descricao' => 'Santa Cecília'
            ),
            37 =>
            array (
                'id' => '4538',
                'estado_id' => '24',
                'descricao' => 'Santa Helena'
            ),
            38 =>
            array (
                'id' => '4539',
                'estado_id' => '24',
                'descricao' => 'Santa Rosa de Lima'
            ),
            39 =>
            array (
                'id' => '4540',
                'estado_id' => '24',
                'descricao' => 'Santa Rosa do Sul'
            ),
            40 =>
            array (
                'id' => '4541',
                'estado_id' => '24',
                'descricao' => 'Santa Terezinha'
            ),
            41 =>
            array (
                'id' => '4542',
                'estado_id' => '24',
                'descricao' => 'Santa Terezinha do Progresso'
            ),
            42 =>
            array (
                'id' => '4543',
                'estado_id' => '24',
                'descricao' => 'Santiago do Sul'
            ),
            43 =>
            array (
                'id' => '4544',
                'estado_id' => '24',
                'descricao' => 'Santo Amaro da Imperatriz'
            ),
            44 =>
            array (
                'id' => '4545',
                'estado_id' => '24',
                'descricao' => 'São Bernardino'
            ),
            45 =>
            array (
                'id' => '4546',
                'estado_id' => '24',
                'descricao' => 'São Bento do Sul',
            ),
            46 =>
            array (
                'id' => '4547',
                'estado_id' => '24',
                'descricao' => 'São Bonifácio'
            ),
            47 =>
            array (
                'id' => '4548',
                'estado_id' => '24',
                'descricao' => 'São Carlos'
            ),
            48 =>
            array (
                'id' => '4549',
                'estado_id' => '24',
                'descricao' => 'São Cristovão do Sul'
            ),
            49 =>
            array (
                'id' => '4550',
                'estado_id' => '24',
                'descricao' => 'São Domingos',
            ),
            50 =>
            array (
                'id' => '4551',
                'estado_id' => '24',
                'descricao' => 'São Francisco do Sul'
            ),
            51 =>
            array (
                'id' => '4552',
                'estado_id' => '24',
                'descricao' => 'São João do Oeste'
            ),
            52 =>
            array (
                'id' => '4553',
                'estado_id' => '24',
                'descricao' => 'São João Batista'
            ),
            53 =>
            array (
                'id' => '4554',
                'estado_id' => '24',
                'descricao' => 'São João do Itaperiú'
            ),
            54 =>
            array (
                'id' => '4555',
                'estado_id' => '24',
                'descricao' => 'São João do Sul'
            ),
            55 =>
            array (
                'id' => '4556',
                'estado_id' => '24',
                'descricao' => 'São Joaquim'
            ),
            56 =>
            array (
                'id' => '4557',
                'estado_id' => '24',
                'descricao' => 'São José',
            ),
            57 =>
            array (
                'id' => '4558',
                'estado_id' => '24',
                'descricao' => 'São José do Cedro'
            ),
            58 =>
            array (
                'id' => '4559',
                'estado_id' => '24',
                'descricao' => 'São José do Cerrito'
            ),
            59 =>
            array (
                'id' => '4560',
                'estado_id' => '24',
                'descricao' => 'São Lourenço do Oeste'
            ),
            60 =>
            array (
                'id' => '4561',
                'estado_id' => '24',
                'descricao' => 'São Ludgero'
            ),
            61 =>
            array (
                'id' => '4562',
                'estado_id' => '24',
                'descricao' => 'São Martinho'
            ),
            62 =>
            array (
                'id' => '4563',
                'estado_id' => '24',
                'descricao' => 'São Miguel da Boa Vista'
            ),
            63 =>
            array (
                'id' => '4564',
                'estado_id' => '24',
                'descricao' => 'São Miguel do Oeste',
            ),
            64 =>
            array (
                'id' => '4565',
                'estado_id' => '24',
                'descricao' => 'São Pedro de Alcântara'
            ),
            65 =>
            array (
                'id' => '4566',
                'estado_id' => '24',
                'descricao' => 'Saudades'
            ),
            66 =>
            array (
                'id' => '4567',
                'estado_id' => '24',
                'descricao' => 'Schroeder'
            ),
            67 =>
            array (
                'id' => '4568',
                'estado_id' => '24',
                'descricao' => 'Seara',
            ),
            68 =>
            array (
                'id' => '4569',
                'estado_id' => '24',
                'descricao' => 'Serra Alta'
            ),
            69 =>
            array (
                'id' => '4570',
                'estado_id' => '24',
                'descricao' => 'Siderópolis'
            ),
            70 =>
            array (
                'id' => '4571',
                'estado_id' => '24',
                'descricao' => 'Sombrio'
            ),
            71 =>
            array (
                'id' => '4572',
                'estado_id' => '24',
                'descricao' => 'Sul Brasil'
            ),
            72 =>
            array (
                'id' => '4573',
                'estado_id' => '24',
                'descricao' => 'Taió'
            ),
            73 =>
            array (
                'id' => '4574',
                'estado_id' => '24',
                'descricao' => 'Tangará'
            ),
            74 =>
            array (
                'id' => '4575',
                'estado_id' => '24',
                'descricao' => 'Tigrinhos'
            ),
            75 =>
            array (
                'id' => '4576',
                'estado_id' => '24',
                'descricao' => 'Tijucas'
            ),
            76 =>
            array (
                'id' => '4577',
                'estado_id' => '24',
                'descricao' => 'Timbé do Sul'
            ),
            77 =>
            array (
                'id' => '4578',
                'estado_id' => '24',
                'descricao' => 'Timbó',
            ),
            78 =>
            array (
                'id' => '4579',
                'estado_id' => '24',
                'descricao' => 'Timbó Grande'
            ),
            79 =>
            array (
                'id' => '4580',
                'estado_id' => '24',
                'descricao' => 'Três Barras'
            ),
            80 =>
            array (
                'id' => '4581',
                'estado_id' => '24',
                'descricao' => 'Treviso'
            ),
            81 =>
            array (
                'id' => '4582',
                'estado_id' => '24',
                'descricao' => 'Treze de Maio'
            ),
            82 =>
            array (
                'id' => '4583',
                'estado_id' => '24',
                'descricao' => 'Treze Tílias',
            ),
            83 =>
            array (
                'id' => '4584',
                'estado_id' => '24',
                'descricao' => 'Trombudo Central',
            ),
            84 =>
            array (
                'id' => '4585',
                'estado_id' => '24',
                'descricao' => 'Tubarão',
            ),
            85 =>
            array (
                'id' => '4586',
                'estado_id' => '24',
                'descricao' => 'Tunápolis'
            ),
            86 =>
            array (
                'id' => '4587',
                'estado_id' => '24',
                'descricao' => 'Turvo'
            ),
            87 =>
            array (
                'id' => '4588',
                'estado_id' => '24',
                'descricao' => 'União do Oeste'
            ),
            88 =>
            array (
                'id' => '4589',
                'estado_id' => '24',
                'descricao' => 'Urubici'
            ),
            89 =>
            array (
                'id' => '4590',
                'estado_id' => '24',
                'descricao' => 'Urupema'
            ),
            90 =>
            array (
                'id' => '4591',
                'estado_id' => '24',
                'descricao' => 'Urussanga'
            ),
            91 =>
            array (
                'id' => '4592',
                'estado_id' => '24',
                'descricao' => 'Vargeão'
            ),
            92 =>
            array (
                'id' => '4593',
                'estado_id' => '24',
                'descricao' => 'Vargem'
            ),
            93 =>
            array (
                'id' => '4594',
                'estado_id' => '24',
                'descricao' => 'Vargem Bonita'
            ),
            94 =>
            array (
                'id' => '4595',
                'estado_id' => '24',
                'descricao' => 'Vidal Ramos'
            ),
            95 =>
            array (
                'id' => '4596',
                'estado_id' => '24',
                'descricao' => 'Videira',
            ),
            96 =>
            array (
                'id' => '4597',
                'estado_id' => '24',
                'descricao' => 'Vitor Meireles'
            ),
            97 =>
            array (
                'id' => '4598',
                'estado_id' => '24',
                'descricao' => 'Witmarsum'
            ),
            98 =>
            array (
                'id' => '4599',
                'estado_id' => '24',
                'descricao' => 'Xanxerê',
            ),
            99 =>
            array (
                'id' => '4600',
                'estado_id' => '24',
                'descricao' => 'Xavantina'
            ),
            100 =>
            array (
                'id' => '4601',
                'estado_id' => '24',
                'descricao' => 'Xaxim'
            ),
            101 =>
            array (
                'id' => '4602',
                'estado_id' => '24',
                'descricao' => 'Zortéa'
            ),
            102 =>
            array (
                'id' => '4603',
                'estado_id' => '23',
                'descricao' => 'Aceguá'
            ),
            103 =>
            array (
                'id' => '4604',
                'estado_id' => '23',
                'descricao' => 'Água Santa',
            ),
            104 =>
            array (
                'id' => '4605',
                'estado_id' => '23',
                'descricao' => 'Agudo'
            ),
            105 =>
            array (
                'id' => '4606',
                'estado_id' => '23',
                'descricao' => 'Ajuricaba'
            ),
            106 =>
            array (
                'id' => '4607',
                'estado_id' => '23',
                'descricao' => 'Alecrim'
            ),
            107 =>
            array (
                'id' => '4608',
                'estado_id' => '23',
                'descricao' => 'Alegrete'
            ),
            108 =>
            array (
                'id' => '4609',
                'estado_id' => '23',
                'descricao' => 'Alegria'
            ),
            109 =>
            array (
                'id' => '4610',
                'estado_id' => '23',
                'descricao' => 'Almirante Tamandaré do Sul'
            ),
            110 =>
            array (
                'id' => '4611',
                'estado_id' => '23',
                'descricao' => 'Alpestre'
            ),
            111 =>
            array (
                'id' => '4612',
                'estado_id' => '23',
                'descricao' => 'Alto Alegre'
            ),
            112 =>
            array (
                'id' => '4613',
                'estado_id' => '23',
                'descricao' => 'Alto Feliz'
            ),
            113 =>
            array (
                'id' => '4614',
                'estado_id' => '23',
                'descricao' => 'Alvorada'
            ),
            114 =>
            array (
                'id' => '4615',
                'estado_id' => '23',
                'descricao' => 'Amaral Ferrador'
            ),
            115 =>
            array (
                'id' => '4616',
                'estado_id' => '23',
                'descricao' => 'Ametista do Sul'
            ),
            116 =>
            array (
                'id' => '4617',
                'estado_id' => '23',
                'descricao' => 'André da Rocha'
            ),
            117 =>
            array (
                'id' => '4618',
                'estado_id' => '23',
                'descricao' => 'Anta Gorda'
            ),
            118 =>
            array (
                'id' => '4619',
                'estado_id' => '23',
                'descricao' => 'Antônio Prado',
            ),
            119 =>
            array (
                'id' => '4620',
                'estado_id' => '23',
                'descricao' => 'Arambaré'
            ),
            120 =>
            array (
                'id' => '4621',
                'estado_id' => '23',
                'descricao' => 'Araricá'
            ),
            121 =>
            array (
                'id' => '4622',
                'estado_id' => '23',
                'descricao' => 'Aratiba',
            ),
            122 =>
            array (
                'id' => '4623',
                'estado_id' => '23',
                'descricao' => 'Arroio do Meio'
            ),
            123 =>
            array (
                'id' => '4624',
                'estado_id' => '23',
                'descricao' => 'Arroio do Sal'
            ),
            124 =>
            array (
                'id' => '4625',
                'estado_id' => '23',
                'descricao' => 'Arroio do Padre'
            ),
            125 =>
            array (
                'id' => '4626',
                'estado_id' => '23',
                'descricao' => 'Arroio dos Ratos'
            ),
            126 =>
            array (
                'id' => '4627',
                'estado_id' => '23',
                'descricao' => 'Arroio do Tigre'
            ),
            127 =>
            array (
                'id' => '4628',
                'estado_id' => '23',
                'descricao' => 'Arroio Grande'
            ),
            128 =>
            array (
                'id' => '4629',
                'estado_id' => '23',
                'descricao' => 'Arvorezinha'
            ),
            129 =>
            array (
                'id' => '4630',
                'estado_id' => '23',
                'descricao' => 'Augusto Pestana',
            ),
            130 =>
            array (
                'id' => '4631',
                'estado_id' => '23',
                'descricao' => 'Áurea'
            ),
            131 =>
            array (
                'id' => '4632',
                'estado_id' => '23',
                'descricao' => 'Bagé'
            ),
            132 =>
            array (
                'id' => '4633',
                'estado_id' => '23',
                'descricao' => 'Balneário Pinhal'
            ),
            133 =>
            array (
                'id' => '4634',
                'estado_id' => '23',
                'descricao' => 'Barão',
            ),
            134 =>
            array (
                'id' => '4635',
                'estado_id' => '23',
                'descricao' => 'Barão de Cotegipe'
            ),
            135 =>
            array (
                'id' => '4636',
                'estado_id' => '23',
                'descricao' => 'Barão do Triunfo'
            ),
            136 =>
            array (
                'id' => '4637',
                'estado_id' => '23',
                'descricao' => 'Barracão'
            ),
            137 =>
            array (
                'id' => '4638',
                'estado_id' => '23',
                'descricao' => 'Barra do Guarita'
            ),
            138 =>
            array (
                'id' => '4639',
                'estado_id' => '23',
                'descricao' => 'Barra do Quaraí'
            ),
            139 =>
            array (
                'id' => '4640',
                'estado_id' => '23',
                'descricao' => 'Barra do Ribeiro'
            ),
            140 =>
            array (
                'id' => '4641',
                'estado_id' => '23',
                'descricao' => 'Barra do Rio Azul'
            ),
            141 =>
            array (
                'id' => '4642',
                'estado_id' => '23',
                'descricao' => 'Barra Funda'
            ),
            142 =>
            array (
                'id' => '4643',
                'estado_id' => '23',
                'descricao' => 'Barros Cassal'
            ),
            143 =>
            array (
                'id' => '4644',
                'estado_id' => '23',
                'descricao' => 'Benjamin Constant do Sul'
            ),
            144 =>
            array (
                'id' => '4645',
                'estado_id' => '23',
                'descricao' => 'Bento Gonçalves',
            ),
            145 =>
            array (
                'id' => '4646',
                'estado_id' => '23',
                'descricao' => 'Boa Vista das Missões'
            ),
            146 =>
            array (
                'id' => '4647',
                'estado_id' => '23',
                'descricao' => 'Boa Vista do Buricá'
            ),
            147 =>
            array (
                'id' => '4648',
                'estado_id' => '23',
                'descricao' => 'Boa Vista do Cadeado'
            ),
            148 =>
            array (
                'id' => '4649',
                'estado_id' => '23',
                'descricao' => 'Boa Vista do Incra'
            ),
            149 =>
            array (
                'id' => '4650',
                'estado_id' => '23',
                'descricao' => 'Boa Vista do Sul',
            ),
            150 =>
            array (
                'id' => '4651',
                'estado_id' => '23',
                'descricao' => 'Bom Jesus'
            ),
            151 =>
            array (
                'id' => '4652',
                'estado_id' => '23',
                'descricao' => 'Bom Princípio'
            ),
            152 =>
            array (
                'id' => '4653',
                'estado_id' => '23',
                'descricao' => 'Bom Progresso'
            ),
            153 =>
            array (
                'id' => '4654',
                'estado_id' => '23',
                'descricao' => 'Bom Retiro do Sul'
            ),
            154 =>
            array (
                'id' => '4655',
                'estado_id' => '23',
                'descricao' => 'Boqueirão do Leão'
            ),
            155 =>
            array (
                'id' => '4656',
                'estado_id' => '23',
                'descricao' => 'Bossoroca'
            ),
            156 =>
            array (
                'id' => '4657',
                'estado_id' => '23',
                'descricao' => 'Bozano',
            ),
            157 =>
            array (
                'id' => '4658',
                'estado_id' => '23',
                'descricao' => 'Braga'
            ),
            158 =>
            array (
                'id' => '4659',
                'estado_id' => '23',
                'descricao' => 'Brochier'
            ),
            159 =>
            array (
                'id' => '4660',
                'estado_id' => '23',
                'descricao' => 'Butiá'
            ),
            160 =>
            array (
                'id' => '4661',
                'estado_id' => '23',
                'descricao' => 'Caçapava do Sul'
            ),
            161 =>
            array (
                'id' => '4662',
                'estado_id' => '23',
                'descricao' => 'Cacequi'
            ),
            162 =>
            array (
                'id' => '4663',
                'estado_id' => '23',
                'descricao' => 'Cachoeira do Sul'
            ),
            163 =>
            array (
                'id' => '4664',
                'estado_id' => '23',
                'descricao' => 'Cachoeirinha'
            ),
            164 =>
            array (
                'id' => '4665',
                'estado_id' => '23',
                'descricao' => 'Cacique Doble'
            ),
            165 =>
            array (
                'id' => '4666',
                'estado_id' => '23',
                'descricao' => 'Caibaté'
            ),
            166 =>
            array (
                'id' => '4667',
                'estado_id' => '23',
                'descricao' => 'Caiçara'
            ),
            167 =>
            array (
                'id' => '4668',
                'estado_id' => '23',
                'descricao' => 'Camaquã'
            ),
            168 =>
            array (
                'id' => '4669',
                'estado_id' => '23',
                'descricao' => 'Camargo'
            ),
            169 =>
            array (
                'id' => '4670',
                'estado_id' => '23',
                'descricao' => 'Cambará do Sul'
            ),
            170 =>
            array (
                'id' => '4671',
                'estado_id' => '23',
                'descricao' => 'Campestre da Serra'
            ),
            171 =>
            array (
                'id' => '4672',
                'estado_id' => '23',
                'descricao' => 'Campina das Missões'
            ),
            172 =>
            array (
                'id' => '4673',
                'estado_id' => '23',
                'descricao' => 'Campinas do Sul'
            ),
            173 =>
            array (
                'id' => '4674',
                'estado_id' => '23',
                'descricao' => 'Campo Bom'
            ),
            174 =>
            array (
                'id' => '4675',
                'estado_id' => '23',
                'descricao' => 'Campo Novo'
            ),
            175 =>
            array (
                'id' => '4676',
                'estado_id' => '23',
                'descricao' => 'Campos Borges'
            ),
            176 =>
            array (
                'id' => '4677',
                'estado_id' => '23',
                'descricao' => 'Candelária'
            ),
            177 =>
            array (
                'id' => '4678',
                'estado_id' => '23',
                'descricao' => 'Cândido Godói'
            ),
            178 =>
            array (
                'id' => '4679',
                'estado_id' => '23',
                'descricao' => 'Candiota'
            ),
            179 =>
            array (
                'id' => '4680',
                'estado_id' => '23',
                'descricao' => 'Canela'
            ),
            180 =>
            array (
                'id' => '4681',
                'estado_id' => '23',
                'descricao' => 'Canguçu'
            ),
            181 =>
            array (
                'id' => '4682',
                'estado_id' => '23',
                'descricao' => 'Canoas',
            ),
            182 =>
            array (
                'id' => '4683',
                'estado_id' => '23',
                'descricao' => 'Canudos do Vale'
            ),
            183 =>
            array (
                'id' => '4684',
                'estado_id' => '23',
                'descricao' => 'Capão Bonito do Sul'
            ),
            184 =>
            array (
                'id' => '4685',
                'estado_id' => '23',
                'descricao' => 'Capão da Canoa',
            ),
            185 =>
            array (
                'id' => '4686',
                'estado_id' => '23',
                'descricao' => 'Capão do Cipó'
            ),
            186 =>
            array (
                'id' => '4687',
                'estado_id' => '23',
                'descricao' => 'Capão do Leão'
            ),
            187 =>
            array (
                'id' => '4688',
                'estado_id' => '23',
                'descricao' => 'Capivari do Sul',
            ),
            188 =>
            array (
                'id' => '4689',
                'estado_id' => '23',
                'descricao' => 'Capela de Santana'
            ),
            189 =>
            array (
                'id' => '4690',
                'estado_id' => '23',
                'descricao' => 'Capitão'
            ),
            190 =>
            array (
                'id' => '4691',
                'estado_id' => '23',
                'descricao' => 'Carazinho'
            ),
            191 =>
            array (
                'id' => '4692',
                'estado_id' => '23',
                'descricao' => 'Caraá'
            ),
            192 =>
            array (
                'id' => '4693',
                'estado_id' => '23',
                'descricao' => 'Carlos Barbosa',
            ),
            193 =>
            array (
                'id' => '4694',
                'estado_id' => '23',
                'descricao' => 'Carlos Gomes'
            ),
            194 =>
            array (
                'id' => '4695',
                'estado_id' => '23',
                'descricao' => 'Casca',
            ),
            195 =>
            array (
                'id' => '4696',
                'estado_id' => '23',
                'descricao' => 'Caseiros'
            ),
            196 =>
            array (
                'id' => '4697',
                'estado_id' => '23',
                'descricao' => 'Catuípe',
            ),
            197 =>
            array (
                'id' => '4698',
                'estado_id' => '23',
                'descricao' => 'Caxias do Sul',
            ),
            198 =>
            array (
                'id' => '4699',
                'estado_id' => '23',
                'descricao' => 'Centenário'
            ),
            199 =>
            array (
                'id' => '4700',
                'estado_id' => '23',
                'descricao' => 'Cerrito'
            ),
            200 =>
            array (
                'id' => '4701',
                'estado_id' => '23',
                'descricao' => 'Cerro Branco'
            ),
            201 =>
            array (
                'id' => '4702',
                'estado_id' => '23',
                'descricao' => 'Cerro Grande'
            ),
            202 =>
            array (
                'id' => '4703',
                'estado_id' => '23',
                'descricao' => 'Cerro Grande do Sul'
            ),
            203 =>
            array (
                'id' => '4704',
                'estado_id' => '23',
                'descricao' => 'Cerro Largo'
            ),
            204 =>
            array (
                'id' => '4705',
                'estado_id' => '23',
                'descricao' => 'Chapada'
            ),
            205 =>
            array (
                'id' => '4706',
                'estado_id' => '23',
                'descricao' => 'Charqueadas'
            ),
            206 =>
            array (
                'id' => '4707',
                'estado_id' => '23',
                'descricao' => 'Charrua'
            ),
            207 =>
            array (
                'id' => '4708',
                'estado_id' => '23',
                'descricao' => 'Chiapetta'
            ),
            208 =>
            array (
                'id' => '4709',
                'estado_id' => '23',
                'descricao' => 'Chuí'
            ),
            209 =>
            array (
                'id' => '4710',
                'estado_id' => '23',
                'descricao' => 'Chuvisca'
            ),
            210 =>
            array (
                'id' => '4711',
                'estado_id' => '23',
                'descricao' => 'Cidreira'
            ),
            211 =>
            array (
                'id' => '4712',
                'estado_id' => '23',
                'descricao' => 'Ciríaco'
            ),
            212 =>
            array (
                'id' => '4713',
                'estado_id' => '23',
                'descricao' => 'Colinas',
            ),
            213 =>
            array (
                'id' => '4714',
                'estado_id' => '23',
                'descricao' => 'Colorado',
            ),
            214 =>
            array (
                'id' => '4715',
                'estado_id' => '23',
                'descricao' => 'Condor'
            ),
            215 =>
            array (
                'id' => '4716',
                'estado_id' => '23',
                'descricao' => 'Constantina'
            ),
            216 =>
            array (
                'id' => '4717',
                'estado_id' => '23',
                'descricao' => 'Coqueiro Baixo'
            ),
            217 =>
            array (
                'id' => '4718',
                'estado_id' => '23',
                'descricao' => 'Coqueiros do Sul',
            ),
            218 =>
            array (
                'id' => '4719',
                'estado_id' => '23',
                'descricao' => 'Coronel Barros',
            ),
            219 =>
            array (
                'id' => '4720',
                'estado_id' => '23',
                'descricao' => 'Coronel Bicaco'
            ),
            220 =>
            array (
                'id' => '4721',
                'estado_id' => '23',
                'descricao' => 'Coronel Pilar',
            ),
            221 =>
            array (
                'id' => '4722',
                'estado_id' => '23',
                'descricao' => 'Cotiporã',
            ),
            222 =>
            array (
                'id' => '4723',
                'estado_id' => '23',
                'descricao' => 'Coxilha'
            ),
            223 =>
            array (
                'id' => '4724',
                'estado_id' => '23',
                'descricao' => 'Crissiumal'
            ),
            224 =>
            array (
                'id' => '4725',
                'estado_id' => '23',
                'descricao' => 'Cristal'
            ),
            225 =>
            array (
                'id' => '4726',
                'estado_id' => '23',
                'descricao' => 'Cristal do Sul'
            ),
            226 =>
            array (
                'id' => '4727',
                'estado_id' => '23',
                'descricao' => 'Cruz Alta',
            ),
            227 =>
            array (
                'id' => '4728',
                'estado_id' => '23',
                'descricao' => 'Cruzaltense'
            ),
            228 =>
            array (
                'id' => '4729',
                'estado_id' => '23',
                'descricao' => 'Cruzeiro do Sul'
            ),
            229 =>
            array (
                'id' => '4730',
                'estado_id' => '23',
                'descricao' => 'David Canabarro'
            ),
            230 =>
            array (
                'id' => '4731',
                'estado_id' => '23',
                'descricao' => 'Derrubadas'
            ),
            231 =>
            array (
                'id' => '4732',
                'estado_id' => '23',
                'descricao' => 'Dezesseis de Novembro'
            ),
            232 =>
            array (
                'id' => '4733',
                'estado_id' => '23',
                'descricao' => 'Dilermando de Aguiar'
            ),
            233 =>
            array (
                'id' => '4734',
                'estado_id' => '23',
                'descricao' => 'Dois Irmãos',
            ),
            234 =>
            array (
                'id' => '4735',
                'estado_id' => '23',
                'descricao' => 'Dois Irmãos das Missões'
            ),
            235 =>
            array (
                'id' => '4736',
                'estado_id' => '23',
                'descricao' => 'Dois Lajeados',
            ),
            236 =>
            array (
                'id' => '4737',
                'estado_id' => '23',
                'descricao' => 'Dom Feliciano'
            ),
            237 =>
            array (
                'id' => '4738',
                'estado_id' => '23',
                'descricao' => 'Dom Pedro de Alcântara'
            ),
            238 =>
            array (
                'id' => '4739',
                'estado_id' => '23',
                'descricao' => 'Dom Pedrito'
            ),
            239 =>
            array (
                'id' => '4740',
                'estado_id' => '23',
                'descricao' => 'Dona Francisca'
            ),
            240 =>
            array (
                'id' => '4741',
                'estado_id' => '23',
                'descricao' => 'Doutor Maurício Cardoso'
            ),
            241 =>
            array (
                'id' => '4742',
                'estado_id' => '23',
                'descricao' => 'Doutor Ricardo'
            ),
            242 =>
            array (
                'id' => '4743',
                'estado_id' => '23',
                'descricao' => 'Eldorado do Sul'
            ),
            243 =>
            array (
                'id' => '4744',
                'estado_id' => '23',
                'descricao' => 'Encantado',
            ),
            244 =>
            array (
                'id' => '4745',
                'estado_id' => '23',
                'descricao' => 'Encruzilhada do Sul'
            ),
            245 =>
            array (
                'id' => '4746',
                'estado_id' => '23',
                'descricao' => 'Engenho Velho'
            ),
            246 =>
            array (
                'id' => '4747',
                'estado_id' => '23',
                'descricao' => 'Entre-Ijuís'
            ),
            247 =>
            array (
                'id' => '4748',
                'estado_id' => '23',
                'descricao' => 'Entre Rios do Sul'
            ),
            248 =>
            array (
                'id' => '4749',
                'estado_id' => '23',
                'descricao' => 'Erebango'
            ),
            249 =>
            array (
                'id' => '4750',
                'estado_id' => '23',
                'descricao' => 'Erechim',
            ),
            250 =>
            array (
                'id' => '4751',
                'estado_id' => '23',
                'descricao' => 'Ernestina'
            ),
            251 =>
            array (
                'id' => '4752',
                'estado_id' => '23',
                'descricao' => 'Herval'
            ),
            252 =>
            array (
                'id' => '4753',
                'estado_id' => '23',
                'descricao' => 'Erval Grande'
            ),
            253 =>
            array (
                'id' => '4754',
                'estado_id' => '23',
                'descricao' => 'Erval Seco'
            ),
            254 =>
            array (
                'id' => '4755',
                'estado_id' => '23',
                'descricao' => 'Esmeralda'
            ),
            255 =>
            array (
                'id' => '4756',
                'estado_id' => '23',
                'descricao' => 'Esperança do Sul'
            ),
            256 =>
            array (
                'id' => '4757',
                'estado_id' => '23',
                'descricao' => 'Espumoso'
            ),
            257 =>
            array (
                'id' => '4758',
                'estado_id' => '23',
                'descricao' => 'Estação',
            ),
            258 =>
            array (
                'id' => '4759',
                'estado_id' => '23',
                'descricao' => 'Estância Velha'
            ),
            259 =>
            array (
                'id' => '4760',
                'estado_id' => '23',
                'descricao' => 'Esteio',
            ),
            260 =>
            array (
                'id' => '4761',
                'estado_id' => '23',
                'descricao' => 'Estrela',
            ),
            261 =>
            array (
                'id' => '4762',
                'estado_id' => '23',
                'descricao' => 'Estrela Velha'
            ),
            262 =>
            array (
                'id' => '4763',
                'estado_id' => '23',
                'descricao' => 'Eugênio de Castro'
            ),
            263 =>
            array (
                'id' => '4764',
                'estado_id' => '23',
                'descricao' => 'Fagundes Varela',
            ),
            264 =>
            array (
                'id' => '4765',
                'estado_id' => '23',
                'descricao' => 'Farroupilha',
            ),
            265 =>
            array (
                'id' => '4766',
                'estado_id' => '23',
                'descricao' => 'Faxinal do Soturno'
            ),
            266 =>
            array (
                'id' => '4767',
                'estado_id' => '23',
                'descricao' => 'Faxinalzinho'
            ),
            267 =>
            array (
                'id' => '4768',
                'estado_id' => '23',
                'descricao' => 'Fazenda Vilanova'
            ),
            268 =>
            array (
                'id' => '4769',
                'estado_id' => '23',
                'descricao' => 'Feliz',
            ),
            269 =>
            array (
                'id' => '4770',
                'estado_id' => '23',
                'descricao' => 'Flores da Cunha',
            ),
            270 =>
            array (
                'id' => '4771',
                'estado_id' => '23',
                'descricao' => 'Floriano Peixoto'
            ),
            271 =>
            array (
                'id' => '4772',
                'estado_id' => '23',
                'descricao' => 'Fontoura Xavier'
            ),
            272 =>
            array (
                'id' => '4773',
                'estado_id' => '23',
                'descricao' => 'Formigueiro'
            ),
            273 =>
            array (
                'id' => '4774',
                'estado_id' => '23',
                'descricao' => 'Forquetinha'
            ),
            274 =>
            array (
                'id' => '4775',
                'estado_id' => '23',
                'descricao' => 'Fortaleza dos Valos',
            ),
            275 =>
            array (
                'id' => '4776',
                'estado_id' => '23',
                'descricao' => 'Frederico Westphalen'
            ),
            276 =>
            array (
                'id' => '4777',
                'estado_id' => '23',
                'descricao' => 'Garibaldi',
            ),
            277 =>
            array (
                'id' => '4778',
                'estado_id' => '23',
                'descricao' => 'Garruchos'
            ),
            278 =>
            array (
                'id' => '4779',
                'estado_id' => '23',
                'descricao' => 'Gaurama'
            ),
            279 =>
            array (
                'id' => '4780',
                'estado_id' => '23',
                'descricao' => 'General Câmara'
            ),
            280 =>
            array (
                'id' => '4781',
                'estado_id' => '23',
                'descricao' => 'Gentil'
            ),
            281 =>
            array (
                'id' => '4782',
                'estado_id' => '23',
                'descricao' => 'Getúlio Vargas'
            ),
            282 =>
            array (
                'id' => '4783',
                'estado_id' => '23',
                'descricao' => 'Giruá'
            ),
            283 =>
            array (
                'id' => '4784',
                'estado_id' => '23',
                'descricao' => 'Glorinha'
            ),
            284 =>
            array (
                'id' => '4785',
                'estado_id' => '23',
                'descricao' => 'Gramado',
            ),
            285 =>
            array (
                'id' => '4786',
                'estado_id' => '23',
                'descricao' => 'Gramado dos Loureiros'
            ),
            286 =>
            array (
                'id' => '4787',
                'estado_id' => '23',
                'descricao' => 'Gramado Xavier'
            ),
            287 =>
            array (
                'id' => '4788',
                'estado_id' => '23',
                'descricao' => 'Gravataí'
            ),
            288 =>
            array (
                'id' => '4789',
                'estado_id' => '23',
                'descricao' => 'Guabiju',
            ),
            289 =>
            array (
                'id' => '4790',
                'estado_id' => '23',
                'descricao' => 'Guaíba'
            ),
            290 =>
            array (
                'id' => '4791',
                'estado_id' => '23',
                'descricao' => 'Guaporé',
            ),
            291 =>
            array (
                'id' => '4792',
                'estado_id' => '23',
                'descricao' => 'Guarani das Missões'
            ),
            292 =>
            array (
                'id' => '4793',
                'estado_id' => '23',
                'descricao' => 'Harmonia'
            ),
            293 =>
            array (
                'id' => '4794',
                'estado_id' => '23',
                'descricao' => 'Herveiras'
            ),
            294 =>
            array (
                'id' => '4795',
                'estado_id' => '23',
                'descricao' => 'Horizontina',
            ),
            295 =>
            array (
                'id' => '4796',
                'estado_id' => '23',
                'descricao' => 'Hulha Negra'
            ),
            296 =>
            array (
                'id' => '4797',
                'estado_id' => '23',
                'descricao' => 'Humaitá'
            ),
            297 =>
            array (
                'id' => '4798',
                'estado_id' => '23',
                'descricao' => 'Ibarama'
            ),
            298 =>
            array (
                'id' => '4799',
                'estado_id' => '23',
                'descricao' => 'Ibiaçá'
            ),
            299 =>
            array (
                'id' => '4800',
                'estado_id' => '23',
                'descricao' => 'Ibiraiaras'
            ),
            300 =>
            array (
                'id' => '4801',
                'estado_id' => '23',
                'descricao' => 'Ibirapuitã'
            ),
            301 =>
            array (
                'id' => '4802',
                'estado_id' => '23',
                'descricao' => 'Ibirubá',
            ),
            302 =>
            array (
                'id' => '4803',
                'estado_id' => '23',
                'descricao' => 'Igrejinha',
            ),
            303 =>
            array (
                'id' => '4804',
                'estado_id' => '23',
                'descricao' => 'Ijuí',
            ),
            304 =>
            array (
                'id' => '4805',
                'estado_id' => '23',
                'descricao' => 'Ilópolis'
            ),
            305 =>
            array (
                'id' => '4806',
                'estado_id' => '23',
                'descricao' => 'Imbé',
            ),
            306 =>
            array (
                'id' => '4807',
                'estado_id' => '23',
                'descricao' => 'Imigrante'
            ),
            307 =>
            array (
                'id' => '4808',
                'estado_id' => '23',
                'descricao' => 'Independência'
            ),
            308 =>
            array (
                'id' => '4809',
                'estado_id' => '23',
                'descricao' => 'Inhacorá'
            ),
            309 =>
            array (
                'id' => '4810',
                'estado_id' => '23',
                'descricao' => 'Ipê'
            ),
            310 =>
            array (
                'id' => '4811',
                'estado_id' => '23',
                'descricao' => 'Ipiranga do Sul',
            ),
            311 =>
            array (
                'id' => '4812',
                'estado_id' => '23',
                'descricao' => 'Iraí'
            ),
            312 =>
            array (
                'id' => '4813',
                'estado_id' => '23',
                'descricao' => 'Itaara',
            ),
            313 =>
            array (
                'id' => '4814',
                'estado_id' => '23',
                'descricao' => 'Itacurubi'
            ),
            314 =>
            array (
                'id' => '4815',
                'estado_id' => '23',
                'descricao' => 'Itapuca'
            ),
            315 =>
            array (
                'id' => '4816',
                'estado_id' => '23',
                'descricao' => 'Itaqui'
            ),
            316 =>
            array (
                'id' => '4817',
                'estado_id' => '23',
                'descricao' => 'Itati'
            ),
            317 =>
            array (
                'id' => '4818',
                'estado_id' => '23',
                'descricao' => 'Itatiba do Sul'
            ),
            318 =>
            array (
                'id' => '4819',
                'estado_id' => '23',
                'descricao' => 'Ivorá'
            ),
            319 =>
            array (
                'id' => '4820',
                'estado_id' => '23',
                'descricao' => 'Ivoti',
            ),
            320 =>
            array (
                'id' => '4821',
                'estado_id' => '23',
                'descricao' => 'Jaboticaba'
            ),
            321 =>
            array (
                'id' => '4822',
                'estado_id' => '23',
                'descricao' => 'Jacuizinho'
            ),
            322 =>
            array (
                'id' => '4823',
                'estado_id' => '23',
                'descricao' => 'Jacutinga'
            ),
            323 =>
            array (
                'id' => '4824',
                'estado_id' => '23',
                'descricao' => 'Jaguarão'
            ),
            324 =>
            array (
                'id' => '4825',
                'estado_id' => '23',
                'descricao' => 'Jaguari'
            ),
            325 =>
            array (
                'id' => '4826',
                'estado_id' => '23',
                'descricao' => 'Jaquirana'
            ),
            326 =>
            array (
                'id' => '4827',
                'estado_id' => '23',
                'descricao' => 'Jari'
            ),
            327 =>
            array (
                'id' => '4828',
                'estado_id' => '23',
                'descricao' => 'Jóia'
            ),
            328 =>
            array (
                'id' => '4829',
                'estado_id' => '23',
                'descricao' => 'Júlio de Castilhos'
            ),
            329 =>
            array (
                'id' => '4830',
                'estado_id' => '23',
                'descricao' => 'Lagoa Bonita do Sul'
            ),
            330 =>
            array (
                'id' => '4831',
                'estado_id' => '23',
                'descricao' => 'Lagoão'
            ),
            331 =>
            array (
                'id' => '4832',
                'estado_id' => '23',
                'descricao' => 'Lagoa dos Três Cantos'
            ),
            332 =>
            array (
                'id' => '4833',
                'estado_id' => '23',
                'descricao' => 'Lagoa Vermelha'
            ),
            333 =>
            array (
                'id' => '4834',
                'estado_id' => '23',
                'descricao' => 'Lajeado',
            ),
            334 =>
            array (
                'id' => '4835',
                'estado_id' => '23',
                'descricao' => 'Lajeado do Bugre'
            ),
            335 =>
            array (
                'id' => '4836',
                'estado_id' => '23',
                'descricao' => 'Lavras do Sul'
            ),
            336 =>
            array (
                'id' => '4837',
                'estado_id' => '23',
                'descricao' => 'Liberato Salzano'
            ),
            337 =>
            array (
                'id' => '4838',
                'estado_id' => '23',
                'descricao' => 'Lindolfo Collor'
            ),
            338 =>
            array (
                'id' => '4839',
                'estado_id' => '23',
                'descricao' => 'Linha Nova'
            ),
            339 =>
            array (
                'id' => '4840',
                'estado_id' => '23',
                'descricao' => 'Machadinho'
            ),
            340 =>
            array (
                'id' => '4841',
                'estado_id' => '23',
                'descricao' => 'Maçambara'
            ),
            341 =>
            array (
                'id' => '4842',
                'estado_id' => '23',
                'descricao' => 'Mampituba'
            ),
            342 =>
            array (
                'id' => '4843',
                'estado_id' => '23',
                'descricao' => 'Manoel Viana'
            ),
            343 =>
            array (
                'id' => '4844',
                'estado_id' => '23',
                'descricao' => 'Maquiné'
            ),
            344 =>
            array (
                'id' => '4845',
                'estado_id' => '23',
                'descricao' => 'Maratá'
            ),
            345 =>
            array (
                'id' => '4846',
                'estado_id' => '23',
                'descricao' => 'Marau',
            ),
            346 =>
            array (
                'id' => '4847',
                'estado_id' => '23',
                'descricao' => 'Marcelino Ramos'
            ),
            347 =>
            array (
                'id' => '4848',
                'estado_id' => '23',
                'descricao' => 'Mariana Pimentel'
            ),
            348 =>
            array (
                'id' => '4849',
                'estado_id' => '23',
                'descricao' => 'Mariano Moro'
            ),
            349 =>
            array (
                'id' => '4850',
                'estado_id' => '23',
                'descricao' => 'Marques de Souza'
            ),
            350 =>
            array (
                'id' => '4851',
                'estado_id' => '23',
                'descricao' => 'Mata'
            ),
            351 =>
            array (
                'id' => '4852',
                'estado_id' => '23',
                'descricao' => 'Mato Castelhano',
            ),
            352 =>
            array (
                'id' => '4853',
                'estado_id' => '23',
                'descricao' => 'Mato Leitão'
            ),
            353 =>
            array (
                'id' => '4854',
                'estado_id' => '23',
                'descricao' => 'Mato Queimado'
            ),
            354 =>
            array (
                'id' => '4855',
                'estado_id' => '23',
                'descricao' => 'Maximiliano de Almeida'
            ),
            355 =>
            array (
                'id' => '4856',
                'estado_id' => '23',
                'descricao' => 'Minas do Leão'
            ),
            356 =>
            array (
                'id' => '4857',
                'estado_id' => '23',
                'descricao' => 'Miraguaí',
            ),
            357 =>
            array (
                'id' => '4858',
                'estado_id' => '23',
                'descricao' => 'Montauri',
            ),
            358 =>
            array (
                'id' => '4859',
                'estado_id' => '23',
                'descricao' => 'Monte Alegre dos Campos'
            ),
            359 =>
            array (
                'id' => '4860',
                'estado_id' => '23',
                'descricao' => 'Monte Belo do Sul'
            ),
            360 =>
            array (
                'id' => '4861',
                'estado_id' => '23',
                'descricao' => 'Montenegro',
            ),
            361 =>
            array (
                'id' => '4862',
                'estado_id' => '23',
                'descricao' => 'Mormaço'
            ),
            362 =>
            array (
                'id' => '4863',
                'estado_id' => '23',
                'descricao' => 'Morrinhos do Sul'
            ),
            363 =>
            array (
                'id' => '4864',
                'estado_id' => '23',
                'descricao' => 'Morro Redondo'
            ),
            364 =>
            array (
                'id' => '4865',
                'estado_id' => '23',
                'descricao' => 'Morro Reuter'
            ),
            365 =>
            array (
                'id' => '4866',
                'estado_id' => '23',
                'descricao' => 'Mostardas'
            ),
            366 =>
            array (
                'id' => '4867',
                'estado_id' => '23',
                'descricao' => 'Muçum'
            ),
            367 =>
            array (
                'id' => '4868',
                'estado_id' => '23',
                'descricao' => 'Muitos Capões'
            ),
            368 =>
            array (
                'id' => '4869',
                'estado_id' => '23',
                'descricao' => 'Muliterno'
            ),
            369 =>
            array (
                'id' => '4870',
                'estado_id' => '23',
                'descricao' => 'Não-Me-Toque',
            ),
            370 =>
            array (
                'id' => '4871',
                'estado_id' => '23',
                'descricao' => 'Nicolau Vergueiro',
            ),
            371 =>
            array (
                'id' => '4872',
                'estado_id' => '23',
                'descricao' => 'Nonoai'
            ),
            372 =>
            array (
                'id' => '4873',
                'estado_id' => '23',
                'descricao' => 'Nova Alvorada'
            ),
            373 =>
            array (
                'id' => '4874',
                'estado_id' => '23',
                'descricao' => 'Nova Araçá',
            ),
            374 =>
            array (
                'id' => '4875',
                'estado_id' => '23',
                'descricao' => 'Nova Bassano',
            ),
            375 =>
            array (
                'id' => '4876',
                'estado_id' => '23',
                'descricao' => 'Nova Boa Vista'
            ),
            376 =>
            array (
                'id' => '4877',
                'estado_id' => '23',
                'descricao' => 'Nova Bréscia',
            ),
            377 =>
            array (
                'id' => '4878',
                'estado_id' => '23',
                'descricao' => 'Nova Candelária',
            ),
            378 =>
            array (
                'id' => '4879',
                'estado_id' => '23',
                'descricao' => 'Nova Esperança do Sul'
            ),
            379 =>
            array (
                'id' => '4880',
                'estado_id' => '23',
                'descricao' => 'Nova Hartz'
            ),
            380 =>
            array (
                'id' => '4881',
                'estado_id' => '23',
                'descricao' => 'Nova Pádua'
            ),
            381 =>
            array (
                'id' => '4882',
                'estado_id' => '23',
                'descricao' => 'Nova Palma',
            ),
            382 =>
            array (
                'id' => '4883',
                'estado_id' => '23',
                'descricao' => 'Nova Petrópolis',
            ),
            383 =>
            array (
                'id' => '4884',
                'estado_id' => '23',
                'descricao' => 'Nova Prata',
            ),
            384 =>
            array (
                'id' => '4885',
                'estado_id' => '23',
                'descricao' => 'Nova Ramada'
            ),
            385 =>
            array (
                'id' => '4886',
                'estado_id' => '23',
                'descricao' => 'Nova Roma do Sul',
            ),
            386 =>
            array (
                'id' => '4887',
                'estado_id' => '23',
                'descricao' => 'Nova Santa Rita'
            ),
            387 =>
            array (
                'id' => '4888',
                'estado_id' => '23',
                'descricao' => 'Novo Cabrais'
            ),
            388 =>
            array (
                'id' => '4889',
                'estado_id' => '23',
                'descricao' => 'Novo Hamburgo',
            ),
            389 =>
            array (
                'id' => '4890',
                'estado_id' => '23',
                'descricao' => 'Novo Machado'
            ),
            390 =>
            array (
                'id' => '4891',
                'estado_id' => '23',
                'descricao' => 'Novo Tiradentes'
            ),
            391 =>
            array (
                'id' => '4892',
                'estado_id' => '23',
                'descricao' => 'Novo Xingu'
            ),
            392 =>
            array (
                'id' => '4893',
                'estado_id' => '23',
                'descricao' => 'Novo Barreiro'
            ),
            393 =>
            array (
                'id' => '4894',
                'estado_id' => '23',
                'descricao' => 'Osório',
            ),
            394 =>
            array (
                'id' => '4895',
                'estado_id' => '23',
                'descricao' => 'Paim Filho'
            ),
            395 =>
            array (
                'id' => '4896',
                'estado_id' => '23',
                'descricao' => 'Palmares do Sul'
            ),
            396 =>
            array (
                'id' => '4897',
                'estado_id' => '23',
                'descricao' => 'Palmeira das Missões'
            ),
            397 =>
            array (
                'id' => '4898',
                'estado_id' => '23',
                'descricao' => 'Palmitinho'
            ),
            398 =>
            array (
                'id' => '4899',
                'estado_id' => '23',
                'descricao' => 'Panambi'
            ),
            399 =>
            array (
                'id' => '4900',
                'estado_id' => '23',
                'descricao' => 'Pantano Grande'
            ),
            400 =>
            array (
                'id' => '4901',
                'estado_id' => '23',
                'descricao' => 'Paraí',
            ),
            401 =>
            array (
                'id' => '4902',
                'estado_id' => '23',
                'descricao' => 'Paraíso do Sul'
            ),
            402 =>
            array (
                'id' => '4903',
                'estado_id' => '23',
                'descricao' => 'Pareci Novo'
            ),
            403 =>
            array (
                'id' => '4904',
                'estado_id' => '23',
                'descricao' => 'Parobé'
            ),
            404 =>
            array (
                'id' => '4905',
                'estado_id' => '23',
                'descricao' => 'Passa Sete'
            ),
            405 =>
            array (
                'id' => '4906',
                'estado_id' => '23',
                'descricao' => 'Passo do Sobrado'
            ),
            406 =>
            array (
                'id' => '4907',
                'estado_id' => '23',
                'descricao' => 'Passo Fundo',
            ),
            407 =>
            array (
                'id' => '4908',
                'estado_id' => '23',
                'descricao' => 'Paulo Bento'
            ),
            408 =>
            array (
                'id' => '4909',
                'estado_id' => '23',
                'descricao' => 'Paverama'
            ),
            409 =>
            array (
                'id' => '4910',
                'estado_id' => '23',
                'descricao' => 'Pedras Altas'
            ),
            410 =>
            array (
                'id' => '4911',
                'estado_id' => '23',
                'descricao' => 'Pedro Osório'
            ),
            411 =>
            array (
                'id' => '4912',
                'estado_id' => '23',
                'descricao' => 'Pejuçara'
            ),
            412 =>
            array (
                'id' => '4913',
                'estado_id' => '23',
                'descricao' => 'Pelotas',
            ),
            413 =>
            array (
                'id' => '4914',
                'estado_id' => '23',
                'descricao' => 'Picada Café'
            ),
            414 =>
            array (
                'id' => '4915',
                'estado_id' => '23',
                'descricao' => 'Pinhal'
            ),
            415 =>
            array (
                'id' => '4916',
                'estado_id' => '23',
                'descricao' => 'Pinhal da Serra'
            ),
            416 =>
            array (
                'id' => '4917',
                'estado_id' => '23',
                'descricao' => 'Pinhal Grande'
            ),
            417 =>
            array (
                'id' => '4918',
                'estado_id' => '23',
                'descricao' => 'Pinheirinho do Vale'
            ),
            418 =>
            array (
                'id' => '4919',
                'estado_id' => '23',
                'descricao' => 'Pinheiro Machado'
            ),
            419 =>
            array (
                'id' => '4920',
                'estado_id' => '23',
                'descricao' => 'Pirapó'
            ),
            420 =>
            array (
                'id' => '4921',
                'estado_id' => '23',
                'descricao' => 'Piratini'
            ),
            421 =>
            array (
                'id' => '4922',
                'estado_id' => '23',
                'descricao' => 'Planalto'
            ),
            422 =>
            array (
                'id' => '4923',
                'estado_id' => '23',
                'descricao' => 'Poço das Antas'
            ),
            423 =>
            array (
                'id' => '4924',
                'estado_id' => '23',
                'descricao' => 'Pontão'
            ),
            424 =>
            array (
                'id' => '4925',
                'estado_id' => '23',
                'descricao' => 'Ponte Preta'
            ),
            425 =>
            array (
                'id' => '4926',
                'estado_id' => '23',
                'descricao' => 'Portão'
            ),
            426 =>
            array (
                'id' => '4927',
                'estado_id' => '23',
                'descricao' => 'Porto Alegre',
            ),
            427 =>
            array (
                'id' => '4928',
                'estado_id' => '23',
                'descricao' => 'Porto Lucena'
            ),
            428 =>
            array (
                'id' => '4929',
                'estado_id' => '23',
                'descricao' => 'Porto Mauá'
            ),
            429 =>
            array (
                'id' => '4930',
                'estado_id' => '23',
                'descricao' => 'Porto Vera Cruz'
            ),
            430 =>
            array (
                'id' => '4931',
                'estado_id' => '23',
                'descricao' => 'Porto Xavier'
            ),
            431 =>
            array (
                'id' => '4932',
                'estado_id' => '23',
                'descricao' => 'Pouso Novo',
            ),
            432 =>
            array (
                'id' => '4933',
                'estado_id' => '23',
                'descricao' => 'Presidente Lucena'
            ),
            433 =>
            array (
                'id' => '4934',
                'estado_id' => '23',
                'descricao' => 'Progresso'
            ),
            434 =>
            array (
                'id' => '4935',
                'estado_id' => '23',
                'descricao' => 'Protásio Alves',
            ),
            435 =>
            array (
                'id' => '4936',
                'estado_id' => '23',
                'descricao' => 'Putinga'
            ),
            436 =>
            array (
                'id' => '4937',
                'estado_id' => '23',
                'descricao' => 'Quaraí'
            ),
            437 =>
            array (
                'id' => '4938',
                'estado_id' => '23',
                'descricao' => 'Quatro Irmãos'
            ),
            438 =>
            array (
                'id' => '4939',
                'estado_id' => '23',
                'descricao' => 'Quevedos'
            ),
            439 =>
            array (
                'id' => '4940',
                'estado_id' => '23',
                'descricao' => 'Quinze de Novembro',
            ),
            440 =>
            array (
                'id' => '4941',
                'estado_id' => '23',
                'descricao' => 'Redentora'
            ),
            441 =>
            array (
                'id' => '4942',
                'estado_id' => '23',
                'descricao' => 'Relvado'
            ),
            442 =>
            array (
                'id' => '4943',
                'estado_id' => '23',
                'descricao' => 'Restinga Seca'
            ),
            443 =>
            array (
                'id' => '4944',
                'estado_id' => '23',
                'descricao' => 'Rio dos Índios'
            ),
            444 =>
            array (
                'id' => '4945',
                'estado_id' => '23',
                'descricao' => 'Rio Grande',
            ),
            445 =>
            array (
                'id' => '4946',
                'estado_id' => '23',
                'descricao' => 'Rio Pardo'
            ),
            446 =>
            array (
                'id' => '4947',
                'estado_id' => '23',
                'descricao' => 'Riozinho'
            ),
            447 =>
            array (
                'id' => '4948',
                'estado_id' => '23',
                'descricao' => 'Roca Sales'
            ),
            448 =>
            array (
                'id' => '4949',
                'estado_id' => '23',
                'descricao' => 'Rodeio Bonito'
            ),
            449 =>
            array (
                'id' => '4950',
                'estado_id' => '23',
                'descricao' => 'Rolador'
            ),
            450 =>
            array (
                'id' => '4951',
                'estado_id' => '23',
                'descricao' => 'Rolante'
            ),
            451 =>
            array (
                'id' => '4952',
                'estado_id' => '23',
                'descricao' => 'Ronda Alta'
            ),
            452 =>
            array (
                'id' => '4953',
                'estado_id' => '23',
                'descricao' => 'Rondinha',
            ),
            453 =>
            array (
                'id' => '4954',
                'estado_id' => '23',
                'descricao' => 'Roque Gonzales'
            ),
            454 =>
            array (
                'id' => '4955',
                'estado_id' => '23',
                'descricao' => 'Rosário do Sul'
            ),
            455 =>
            array (
                'id' => '4956',
                'estado_id' => '23',
                'descricao' => 'Sagrada Família'
            ),
            456 =>
            array (
                'id' => '4957',
                'estado_id' => '23',
                'descricao' => 'Saldanha Marinho'
            ),
            457 =>
            array (
                'id' => '4958',
                'estado_id' => '23',
                'descricao' => 'Salto do Jacuí'
            ),
            458 =>
            array (
                'id' => '4959',
                'estado_id' => '23',
                'descricao' => 'Salvador das Missões'
            ),
            459 =>
            array (
                'id' => '4960',
                'estado_id' => '23',
                'descricao' => 'Salvador do Sul'
            ),
            460 =>
            array (
                'id' => '4961',
                'estado_id' => '23',
                'descricao' => 'Sananduva'
            ),
            461 =>
            array (
                'id' => '4962',
                'estado_id' => '23',
                'descricao' => 'Santa Bárbara do Sul'
            ),
            462 =>
            array (
                'id' => '4963',
                'estado_id' => '23',
                'descricao' => 'Santa Cecília do Sul',
            ),
            463 =>
            array (
                'id' => '4964',
                'estado_id' => '23',
                'descricao' => 'Santa Clara do Sul'
            ),
            464 =>
            array (
                'id' => '4965',
                'estado_id' => '23',
                'descricao' => 'Santa Cruz do Sul',
            ),
            465 =>
            array (
                'id' => '4966',
                'estado_id' => '23',
                'descricao' => 'Santa Maria',
            ),
            466 =>
            array (
                'id' => '4967',
                'estado_id' => '23',
                'descricao' => 'Santa Maria do Herval'
            ),
            467 =>
            array (
                'id' => '4968',
                'estado_id' => '23',
                'descricao' => 'Santa Margarida do Sul'
            ),
            468 =>
            array (
                'id' => '4969',
                'estado_id' => '23',
                'descricao' => 'Santana da Boa Vista'
            ),
            469 =>
            array (
                'id' => '4970',
                'estado_id' => '23',
                'descricao' => 'Santana do Livramento'
            ),
            470 =>
            array (
                'id' => '4971',
                'estado_id' => '23',
                'descricao' => 'Santa Rosa'
            ),
            471 =>
            array (
                'id' => '4972',
                'estado_id' => '23',
                'descricao' => 'Santa Tereza',
            ),
            472 =>
            array (
                'id' => '4973',
                'estado_id' => '23',
                'descricao' => 'Santa Vitória do Palmar'
            ),
            473 =>
            array (
                'id' => '4974',
                'estado_id' => '23',
                'descricao' => 'Santiago'
            ),
            474 =>
            array (
                'id' => '4975',
                'estado_id' => '23',
                'descricao' => 'Santo Ângelo',
            ),
            475 =>
            array (
                'id' => '4976',
                'estado_id' => '23',
                'descricao' => 'Santo Antônio do Palma',
            ),
            476 =>
            array (
                'id' => '4977',
                'estado_id' => '23',
                'descricao' => 'Santo Antônio da Patrulha'
            ),
            477 =>
            array (
                'id' => '4978',
                'estado_id' => '23',
                'descricao' => 'Santo Antônio das Missões'
            ),
            478 =>
            array (
                'id' => '4979',
                'estado_id' => '23',
                'descricao' => 'Santo Antônio do Planalto'
            ),
            479 =>
            array (
                'id' => '4980',
                'estado_id' => '23',
                'descricao' => 'Santo Augusto'
            ),
            480 =>
            array (
                'id' => '4981',
                'estado_id' => '23',
                'descricao' => 'Santo Cristo'
            ),
            481 =>
            array (
                'id' => '4982',
                'estado_id' => '23',
                'descricao' => 'Santo Expedito do Sul'
            ),
            482 =>
            array (
                'id' => '4983',
                'estado_id' => '23',
                'descricao' => 'São Borja'
            ),
            483 =>
            array (
                'id' => '4984',
                'estado_id' => '23',
                'descricao' => 'São Domingos do Sul',
            ),
            484 =>
            array (
                'id' => '4985',
                'estado_id' => '23',
                'descricao' => 'São Francisco de Assis'
            ),
            485 =>
            array (
                'id' => '4986',
                'estado_id' => '23',
                'descricao' => 'São Francisco de Paula'
            ),
            486 =>
            array (
                'id' => '4987',
                'estado_id' => '23',
                'descricao' => 'São Gabriel'
            ),
            487 =>
            array (
                'id' => '4988',
                'estado_id' => '23',
                'descricao' => 'São Jerônimo'
            ),
            488 =>
            array (
                'id' => '4989',
                'estado_id' => '23',
                'descricao' => 'São João da Urtiga'
            ),
            489 =>
            array (
                'id' => '4990',
                'estado_id' => '23',
                'descricao' => 'São João do Polêsine',
            ),
            490 =>
            array (
                'id' => '4991',
                'estado_id' => '23',
                'descricao' => 'São Jorge'
            ),
            491 =>
            array (
                'id' => '4992',
                'estado_id' => '23',
                'descricao' => 'São José das Missões'
            ),
            492 =>
            array (
                'id' => '4993',
                'estado_id' => '23',
                'descricao' => 'São José do Herval'
            ),
            493 =>
            array (
                'id' => '4994',
                'estado_id' => '23',
                'descricao' => 'São José do Hortêncio'
            ),
            494 =>
            array (
                'id' => '4995',
                'estado_id' => '23',
                'descricao' => 'São José do Inhacorá'
            ),
            495 =>
            array (
                'id' => '4996',
                'estado_id' => '23',
                'descricao' => 'São José do Norte'
            ),
            496 =>
            array (
                'id' => '4997',
                'estado_id' => '23',
                'descricao' => 'São José do Ouro'
            ),
            497 =>
            array (
                'id' => '4998',
                'estado_id' => '23',
                'descricao' => 'São José do Sul',
            ),
            498 =>
            array (
                'id' => '4999',
                'estado_id' => '23',
                'descricao' => 'São José dos Ausentes'
            ),
            499 =>
            array (
                'id' => '5000',
                'estado_id' => '23',
                'descricao' => 'São Leopoldo',
            ),
        ));
        \DB::table('municipios')->insert(array (
            0 =>
            array (
                'id' => '5001',
                'estado_id' => '23',
                'descricao' => 'São Lourenço do Sul'
            ),
            1 =>
            array (
                'id' => '5002',
                'estado_id' => '23',
                'descricao' => 'São Luiz Gonzaga'
            ),
            2 =>
            array (
                'id' => '5003',
                'estado_id' => '23',
                'descricao' => 'São Marcos',
            ),
            3 =>
            array (
                'id' => '5004',
                'estado_id' => '23',
                'descricao' => 'São Martinho'
            ),
            4 =>
            array (
                'id' => '5005',
                'estado_id' => '23',
                'descricao' => 'São Martinho da Serra'
            ),
            5 =>
            array (
                'id' => '5006',
                'estado_id' => '23',
                'descricao' => 'São Miguel das Missões'
            ),
            6 =>
            array (
                'id' => '5007',
                'estado_id' => '23',
                'descricao' => 'São Nicolau'
            ),
            7 =>
            array (
                'id' => '5008',
                'estado_id' => '23',
                'descricao' => 'São Paulo das Missões'
            ),
            8 =>
            array (
                'id' => '5009',
                'estado_id' => '23',
                'descricao' => 'São Pedro da Serra'
            ),
            9 =>
            array (
                'id' => '5010',
                'estado_id' => '23',
                'descricao' => 'São Pedro das Missões'
            ),
            10 =>
            array (
                'id' => '5011',
                'estado_id' => '23',
                'descricao' => 'São Pedro do Butiá',
            ),
            11 =>
            array (
                'id' => '5012',
                'estado_id' => '23',
                'descricao' => 'São Pedro do Sul'
            ),
            12 =>
            array (
                'id' => '5013',
                'estado_id' => '23',
                'descricao' => 'São Sebastião do Caí'
            ),
            13 =>
            array (
                'id' => '5014',
                'estado_id' => '23',
                'descricao' => 'São Sepé'
            ),
            14 =>
            array (
                'id' => '5015',
                'estado_id' => '23',
                'descricao' => 'São Valentim'
            ),
            15 =>
            array (
                'id' => '5016',
                'estado_id' => '23',
                'descricao' => 'São Valentim do Sul',
            ),
            16 =>
            array (
                'id' => '5017',
                'estado_id' => '23',
                'descricao' => 'São Valério do Sul'
            ),
            17 =>
            array (
                'id' => '5018',
                'estado_id' => '23',
                'descricao' => 'São Vendelino'
            ),
            18 =>
            array (
                'id' => '5019',
                'estado_id' => '23',
                'descricao' => 'São Vicente do Sul'
            ),
            19 =>
            array (
                'id' => '5020',
                'estado_id' => '23',
                'descricao' => 'Sapiranga'
            ),
            20 =>
            array (
                'id' => '5021',
                'estado_id' => '23',
                'descricao' => 'Sapucaia do Sul'
            ),
            21 =>
            array (
                'id' => '5022',
                'estado_id' => '23',
                'descricao' => 'Sarandi',
            ),
            22 =>
            array (
                'id' => '5023',
                'estado_id' => '23',
                'descricao' => 'Seberi'
            ),
            23 =>
            array (
                'id' => '5024',
                'estado_id' => '23',
                'descricao' => 'Sede Nova'
            ),
            24 =>
            array (
                'id' => '5025',
                'estado_id' => '23',
                'descricao' => 'Segredo'
            ),
            25 =>
            array (
                'id' => '5026',
                'estado_id' => '23',
                'descricao' => 'Selbach',
            ),
            26 =>
            array (
                'id' => '5027',
                'estado_id' => '23',
                'descricao' => 'Senador Salgado Filho'
            ),
            27 =>
            array (
                'id' => '5028',
                'estado_id' => '23',
                'descricao' => 'Sentinela do Sul'
            ),
            28 =>
            array (
                'id' => '5029',
                'estado_id' => '23',
                'descricao' => 'Serafina Corrêa'
            ),
            29 =>
            array (
                'id' => '5030',
                'estado_id' => '23',
                'descricao' => 'Sério'
            ),
            30 =>
            array (
                'id' => '5031',
                'estado_id' => '23',
                'descricao' => 'Sertão'
            ),
            31 =>
            array (
                'id' => '5032',
                'estado_id' => '23',
                'descricao' => 'Sertão Santana'
            ),
            32 =>
            array (
                'id' => '5033',
                'estado_id' => '23',
                'descricao' => 'Sete de Setembro'
            ),
            33 =>
            array (
                'id' => '5034',
                'estado_id' => '23',
                'descricao' => 'Severiano de Almeida'
            ),
            34 =>
            array (
                'id' => '5035',
                'estado_id' => '23',
                'descricao' => 'Silveira Martins'
            ),
            35 =>
            array (
                'id' => '5036',
                'estado_id' => '23',
                'descricao' => 'Sinimbu'
            ),
            36 =>
            array (
                'id' => '5037',
                'estado_id' => '23',
                'descricao' => 'Sobradinho'
            ),
            37 =>
            array (
                'id' => '5038',
                'estado_id' => '23',
                'descricao' => 'Soledade'
            ),
            38 =>
            array (
                'id' => '5039',
                'estado_id' => '23',
                'descricao' => 'Tabaí'
            ),
            39 =>
            array (
                'id' => '5040',
                'estado_id' => '23',
                'descricao' => 'Tapejara',
            ),
            40 =>
            array (
                'id' => '5041',
                'estado_id' => '23',
                'descricao' => 'Tapera'
            ),
            41 =>
            array (
                'id' => '5042',
                'estado_id' => '23',
                'descricao' => 'Tapes'
            ),
            42 =>
            array (
                'id' => '5043',
                'estado_id' => '23',
                'descricao' => 'Taquara'
            ),
            43 =>
            array (
                'id' => '5044',
                'estado_id' => '23',
                'descricao' => 'Taquari'
            ),
            44 =>
            array (
                'id' => '5045',
                'estado_id' => '23',
                'descricao' => 'Taquaruçu do Sul'
            ),
            45 =>
            array (
                'id' => '5046',
                'estado_id' => '23',
                'descricao' => 'Tavares'
            ),
            46 =>
            array (
                'id' => '5047',
                'estado_id' => '23',
                'descricao' => 'Tenente Portela'
            ),
            47 =>
            array (
                'id' => '5048',
                'estado_id' => '23',
                'descricao' => 'Terra de Areia'
            ),
            48 =>
            array (
                'id' => '5049',
                'estado_id' => '23',
                'descricao' => 'Teutônia'
            ),
            49 =>
            array (
                'id' => '5050',
                'estado_id' => '23',
                'descricao' => 'Tio Hugo'
            ),
            50 =>
            array (
                'id' => '5051',
                'estado_id' => '23',
                'descricao' => 'Tiradentes do Sul'
            ),
            51 =>
            array (
                'id' => '5052',
                'estado_id' => '23',
                'descricao' => 'Toropi'
            ),
            52 =>
            array (
                'id' => '5053',
                'estado_id' => '23',
                'descricao' => 'Torres',
            ),
            53 =>
            array (
                'id' => '5054',
                'estado_id' => '23',
                'descricao' => 'Tramandaí'
            ),
            54 =>
            array (
                'id' => '5055',
                'estado_id' => '23',
                'descricao' => 'Travesseiro'
            ),
            55 =>
            array (
                'id' => '5056',
                'estado_id' => '23',
                'descricao' => 'Três Arroios',
            ),
            56 =>
            array (
                'id' => '5057',
                'estado_id' => '23',
                'descricao' => 'Três Cachoeiras'
            ),
            57 =>
            array (
                'id' => '5058',
                'estado_id' => '23',
                'descricao' => 'Três Coroas'
            ),
            58 =>
            array (
                'id' => '5059',
                'estado_id' => '23',
                'descricao' => 'Três de Maio'
            ),
            59 =>
            array (
                'id' => '5060',
                'estado_id' => '23',
                'descricao' => 'Três Forquilhas'
            ),
            60 =>
            array (
                'id' => '5061',
                'estado_id' => '23',
                'descricao' => 'Três Palmeiras'
            ),
            61 =>
            array (
                'id' => '5062',
                'estado_id' => '23',
                'descricao' => 'Três Passos'
            ),
            62 =>
            array (
                'id' => '5063',
                'estado_id' => '23',
                'descricao' => 'Trindade do Sul'
            ),
            63 =>
            array (
                'id' => '5064',
                'estado_id' => '23',
                'descricao' => 'Triunfo'
            ),
            64 =>
            array (
                'id' => '5065',
                'estado_id' => '23',
                'descricao' => 'Tucunduva'
            ),
            65 =>
            array (
                'id' => '5066',
                'estado_id' => '23',
                'descricao' => 'Tunas'
            ),
            66 =>
            array (
                'id' => '5067',
                'estado_id' => '23',
                'descricao' => 'Tupanci do Sul'
            ),
            67 =>
            array (
                'id' => '5068',
                'estado_id' => '23',
                'descricao' => 'Tupanciretã'
            ),
            68 =>
            array (
                'id' => '5069',
                'estado_id' => '23',
                'descricao' => 'Tupandi'
            ),
            69 =>
            array (
                'id' => '5070',
                'estado_id' => '23',
                'descricao' => 'Tuparendi'
            ),
            70 =>
            array (
                'id' => '5071',
                'estado_id' => '23',
                'descricao' => 'Turuçu'
            ),
            71 =>
            array (
                'id' => '5072',
                'estado_id' => '23',
                'descricao' => 'Ubiretama'
            ),
            72 =>
            array (
                'id' => '5073',
                'estado_id' => '23',
                'descricao' => 'União da Serra',
            ),
            73 =>
            array (
                'id' => '5074',
                'estado_id' => '23',
                'descricao' => 'Unistalda'
            ),
            74 =>
            array (
                'id' => '5075',
                'estado_id' => '23',
                'descricao' => 'Uruguaiana'
            ),
            75 =>
            array (
                'id' => '5076',
                'estado_id' => '23',
                'descricao' => 'Vacaria'
            ),
            76 =>
            array (
                'id' => '5077',
                'estado_id' => '23',
                'descricao' => 'Vale Verde'
            ),
            77 =>
            array (
                'id' => '5078',
                'estado_id' => '23',
                'descricao' => 'Vale do Sol'
            ),
            78 =>
            array (
                'id' => '5079',
                'estado_id' => '23',
                'descricao' => 'Vale Real'
            ),
            79 =>
            array (
                'id' => '5080',
                'estado_id' => '23',
                'descricao' => 'Vanini'
            ),
            80 =>
            array (
                'id' => '5081',
                'estado_id' => '23',
                'descricao' => 'Venâncio Aires'
            ),
            81 =>
            array (
                'id' => '5082',
                'estado_id' => '23',
                'descricao' => 'Vera Cruz'
            ),
            82 =>
            array (
                'id' => '5083',
                'estado_id' => '23',
                'descricao' => 'Veranópolis',
            ),
            83 =>
            array (
                'id' => '5084',
                'estado_id' => '23',
                'descricao' => 'Vespasiano Correa'
            ),
            84 =>
            array (
                'id' => '5085',
                'estado_id' => '23',
                'descricao' => 'Viadutos'
            ),
            85 =>
            array (
                'id' => '5086',
                'estado_id' => '23',
                'descricao' => 'Viamão'
            ),
            86 =>
            array (
                'id' => '5087',
                'estado_id' => '23',
                'descricao' => 'Vicente Dutra'
            ),
            87 =>
            array (
                'id' => '5088',
                'estado_id' => '23',
                'descricao' => 'Victor Graeff',
            ),
            88 =>
            array (
                'id' => '5089',
                'estado_id' => '23',
                'descricao' => 'Vila Flores'
            ),
            89 =>
            array (
                'id' => '5090',
                'estado_id' => '23',
                'descricao' => 'Vila Lângaro'
            ),
            90 =>
            array (
                'id' => '5091',
                'estado_id' => '23',
                'descricao' => 'Vila Maria',
            ),
            91 =>
            array (
                'id' => '5092',
                'estado_id' => '23',
                'descricao' => 'Vila Nova do Sul'
            ),
            92 =>
            array (
                'id' => '5093',
                'estado_id' => '23',
                'descricao' => 'Vista Alegre'
            ),
            93 =>
            array (
                'id' => '5094',
                'estado_id' => '23',
                'descricao' => 'Vista Alegre do Prata',
            ),
            94 =>
            array (
                'id' => '5095',
                'estado_id' => '23',
                'descricao' => 'Vista Gaúcha',
            ),
            95 =>
            array (
                'id' => '5096',
                'estado_id' => '23',
                'descricao' => 'Vitória das Missões'
            ),
            96 =>
            array (
                'id' => '5097',
                'estado_id' => '23',
                'descricao' => 'Westfalia',
            ),
            97 =>
            array (
                'id' => '5098',
                'estado_id' => '23',
                'descricao' => 'Xangri-Lá'
            ),
            98 =>
            array (
                'id' => '5099',
                'estado_id' => '12',
                'descricao' => 'Água Clara'
            ),
            99 =>
            array (
                'id' => '5100',
                'estado_id' => '12',
                'descricao' => 'Alcinópolis'
            ),
            100 =>
            array (
                'id' => '5101',
                'estado_id' => '12',
                'descricao' => 'Amambaí'
            ),
            101 =>
            array (
                'id' => '5102',
                'estado_id' => '12',
                'descricao' => 'Anastácio'
            ),
            102 =>
            array (
                'id' => '5103',
                'estado_id' => '12',
                'descricao' => 'Anaurilândia'
            ),
            103 =>
            array (
                'id' => '5104',
                'estado_id' => '12',
                'descricao' => 'Angélica'
            ),
            104 =>
            array (
                'id' => '5105',
                'estado_id' => '12',
                'descricao' => 'Antônio João'
            ),
            105 =>
            array (
                'id' => '5106',
                'estado_id' => '12',
                'descricao' => 'Aparecida do Taboado'
            ),
            106 =>
            array (
                'id' => '5107',
                'estado_id' => '12',
                'descricao' => 'Aquidauana'
            ),
            107 =>
            array (
                'id' => '5108',
                'estado_id' => '12',
                'descricao' => 'Aral Moreira'
            ),
            108 =>
            array (
                'id' => '5109',
                'estado_id' => '12',
                'descricao' => 'Bandeirantes'
            ),
            109 =>
            array (
                'id' => '5110',
                'estado_id' => '12',
                'descricao' => 'Bataguassu'
            ),
            110 =>
            array (
                'id' => '5111',
                'estado_id' => '12',
                'descricao' => 'Batayporã'
            ),
            111 =>
            array (
                'id' => '5112',
                'estado_id' => '12',
                'descricao' => 'Bela Vista'
            ),
            112 =>
            array (
                'id' => '5113',
                'estado_id' => '12',
                'descricao' => 'Bodoquena'
            ),
            113 =>
            array (
                'id' => '5114',
                'estado_id' => '12',
                'descricao' => 'Bonito'
            ),
            114 =>
            array (
                'id' => '5115',
                'estado_id' => '12',
                'descricao' => 'Brasilândia'
            ),
            115 =>
            array (
                'id' => '5116',
                'estado_id' => '12',
                'descricao' => 'Caarapó'
            ),
            116 =>
            array (
                'id' => '5117',
                'estado_id' => '12',
                'descricao' => 'Camapuã'
            ),
            117 =>
            array (
                'id' => '5118',
                'estado_id' => '12',
                'descricao' => 'Campo Grande',
            ),
            118 =>
            array (
                'id' => '5119',
                'estado_id' => '12',
                'descricao' => 'Caracol'
            ),
            119 =>
            array (
                'id' => '5120',
                'estado_id' => '12',
                'descricao' => 'Cassilândia'
            ),
            120 =>
            array (
                'id' => '5121',
                'estado_id' => '12',
                'descricao' => 'Chapadão do Sul',
            ),
            121 =>
            array (
                'id' => '5122',
                'estado_id' => '12',
                'descricao' => 'Corguinho'
            ),
            122 =>
            array (
                'id' => '5123',
                'estado_id' => '12',
                'descricao' => 'Coronel Sapucaia'
            ),
            123 =>
            array (
                'id' => '5124',
                'estado_id' => '12',
                'descricao' => 'Corumbá'
            ),
            124 =>
            array (
                'id' => '5125',
                'estado_id' => '12',
                'descricao' => 'Costa Rica'
            ),
            125 =>
            array (
                'id' => '5126',
                'estado_id' => '12',
                'descricao' => 'Coxim'
            ),
            126 =>
            array (
                'id' => '5127',
                'estado_id' => '12',
                'descricao' => 'Deodápolis'
            ),
            127 =>
            array (
                'id' => '5128',
                'estado_id' => '12',
                'descricao' => 'Dois Irmãos do Buriti'
            ),
            128 =>
            array (
                'id' => '5129',
                'estado_id' => '12',
                'descricao' => 'Douradina'
            ),
            129 =>
            array (
                'id' => '5130',
                'estado_id' => '12',
                'descricao' => 'Dourados'
            ),
            130 =>
            array (
                'id' => '5131',
                'estado_id' => '12',
                'descricao' => 'Eldorado'
            ),
            131 =>
            array (
                'id' => '5132',
                'estado_id' => '12',
                'descricao' => 'Fátima do Sul'
            ),
            132 =>
            array (
                'id' => '5133',
                'estado_id' => '12',
                'descricao' => 'Figueirão'
            ),
            133 =>
            array (
                'id' => '5134',
                'estado_id' => '12',
                'descricao' => 'Glória de Dourados'
            ),
            134 =>
            array (
                'id' => '5135',
                'estado_id' => '12',
                'descricao' => 'Guia Lopes da Laguna'
            ),
            135 =>
            array (
                'id' => '5136',
                'estado_id' => '12',
                'descricao' => 'Iguatemi'
            ),
            136 =>
            array (
                'id' => '5137',
                'estado_id' => '12',
                'descricao' => 'Inocência'
            ),
            137 =>
            array (
                'id' => '5138',
                'estado_id' => '12',
                'descricao' => 'Itaporã'
            ),
            138 =>
            array (
                'id' => '5139',
                'estado_id' => '12',
                'descricao' => 'Itaquiraí'
            ),
            139 =>
            array (
                'id' => '5140',
                'estado_id' => '12',
                'descricao' => 'Ivinhema'
            ),
            140 =>
            array (
                'id' => '5141',
                'estado_id' => '12',
                'descricao' => 'Japorã'
            ),
            141 =>
            array (
                'id' => '5142',
                'estado_id' => '12',
                'descricao' => 'Jaraguari'
            ),
            142 =>
            array (
                'id' => '5143',
                'estado_id' => '12',
                'descricao' => 'Jardim'
            ),
            143 =>
            array (
                'id' => '5144',
                'estado_id' => '12',
                'descricao' => 'Jateí'
            ),
            144 =>
            array (
                'id' => '5145',
                'estado_id' => '12',
                'descricao' => 'Juti'
            ),
            145 =>
            array (
                'id' => '5146',
                'estado_id' => '12',
                'descricao' => 'Ladário'
            ),
            146 =>
            array (
                'id' => '5147',
                'estado_id' => '12',
                'descricao' => 'Laguna Carapã'
            ),
            147 =>
            array (
                'id' => '5148',
                'estado_id' => '12',
                'descricao' => 'Maracaju'
            ),
            148 =>
            array (
                'id' => '5149',
                'estado_id' => '12',
                'descricao' => 'Miranda'
            ),
            149 =>
            array (
                'id' => '5150',
                'estado_id' => '12',
                'descricao' => 'Mundo Novo'
            ),
            150 =>
            array (
                'id' => '5151',
                'estado_id' => '12',
                'descricao' => 'Naviraí'
            ),
            151 =>
            array (
                'id' => '5152',
                'estado_id' => '12',
                'descricao' => 'Nioaque'
            ),
            152 =>
            array (
                'id' => '5153',
                'estado_id' => '12',
                'descricao' => 'Nova Alvorada do Sul',
            ),
            153 =>
            array (
                'id' => '5154',
                'estado_id' => '12',
                'descricao' => 'Nova Andradina'
            ),
            154 =>
            array (
                'id' => '5155',
                'estado_id' => '12',
                'descricao' => 'Novo Horizonte do Sul'
            ),
            155 =>
            array (
                'id' => '5156',
                'estado_id' => '12',
                'descricao' => 'Paranaíba'
            ),
            156 =>
            array (
                'id' => '5157',
                'estado_id' => '12',
                'descricao' => 'Paranhos'
            ),
            157 =>
            array (
                'id' => '5158',
                'estado_id' => '12',
                'descricao' => 'Pedro Gomes'
            ),
            158 =>
            array (
                'id' => '5159',
                'estado_id' => '12',
                'descricao' => 'Ponta Porã'
            ),
            159 =>
            array (
                'id' => '5160',
                'estado_id' => '12',
                'descricao' => 'Porto Murtinho'
            ),
            160 =>
            array (
                'id' => '5161',
                'estado_id' => '12',
                'descricao' => 'Ribas do Rio Pardo'
            ),
            161 =>
            array (
                'id' => '5162',
                'estado_id' => '12',
                'descricao' => 'Rio Brilhante'
            ),
            162 =>
            array (
                'id' => '5163',
                'estado_id' => '12',
                'descricao' => 'Rio Negro'
            ),
            163 =>
            array (
                'id' => '5164',
                'estado_id' => '12',
                'descricao' => 'Rio Verde de Mato Grosso'
            ),
            164 =>
            array (
                'id' => '5165',
                'estado_id' => '12',
                'descricao' => 'Rochedo'
            ),
            165 =>
            array (
                'id' => '5166',
                'estado_id' => '12',
                'descricao' => 'Santa Rita do Pardo'
            ),
            166 =>
            array (
                'id' => '5167',
                'estado_id' => '12',
                'descricao' => 'São Gabriel do Oeste'
            ),
            167 =>
            array (
                'id' => '5168',
                'estado_id' => '12',
                'descricao' => 'Sete Quedas'
            ),
            168 =>
            array (
                'id' => '5169',
                'estado_id' => '12',
                'descricao' => 'Selvíria'
            ),
            169 =>
            array (
                'id' => '5170',
                'estado_id' => '12',
                'descricao' => 'Sidrolândia'
            ),
            170 =>
            array (
                'id' => '5171',
                'estado_id' => '12',
                'descricao' => 'Sonora'
            ),
            171 =>
            array (
                'id' => '5172',
                'estado_id' => '12',
                'descricao' => 'Tacuru'
            ),
            172 =>
            array (
                'id' => '5173',
                'estado_id' => '12',
                'descricao' => 'Taquarussu'
            ),
            173 =>
            array (
                'id' => '5174',
                'estado_id' => '12',
                'descricao' => 'Terenos'
            ),
            174 =>
            array (
                'id' => '5175',
                'estado_id' => '12',
                'descricao' => 'Três Lagoas',
            ),
            175 =>
            array (
                'id' => '5176',
                'estado_id' => '12',
                'descricao' => 'Vicentina'
            ),
            176 =>
            array (
                'id' => '5177',
                'estado_id' => '13',
                'descricao' => 'Acorizal'
            ),
            177 =>
            array (
                'id' => '5178',
                'estado_id' => '13',
                'descricao' => 'Água Boa'
            ),
            178 =>
            array (
                'id' => '5179',
                'estado_id' => '13',
                'descricao' => 'Alta Floresta'
            ),
            179 =>
            array (
                'id' => '5180',
                'estado_id' => '13',
                'descricao' => 'Alto Araguaia'
            ),
            180 =>
            array (
                'id' => '5181',
                'estado_id' => '13',
                'descricao' => 'Alto Boa Vista'
            ),
            181 =>
            array (
                'id' => '5182',
                'estado_id' => '13',
                'descricao' => 'Alto Garças'
            ),
            182 =>
            array (
                'id' => '5183',
                'estado_id' => '13',
                'descricao' => 'Alto Paraguai'
            ),
            183 =>
            array (
                'id' => '5184',
                'estado_id' => '13',
                'descricao' => 'Alto Taquari'
            ),
            184 =>
            array (
                'id' => '5185',
                'estado_id' => '13',
                'descricao' => 'Apiacás'
            ),
            185 =>
            array (
                'id' => '5186',
                'estado_id' => '13',
                'descricao' => 'Araguaiana'
            ),
            186 =>
            array (
                'id' => '5187',
                'estado_id' => '13',
                'descricao' => 'Araguainha'
            ),
            187 =>
            array (
                'id' => '5188',
                'estado_id' => '13',
                'descricao' => 'Araputanga'
            ),
            188 =>
            array (
                'id' => '5189',
                'estado_id' => '13',
                'descricao' => 'Arenápolis'
            ),
            189 =>
            array (
                'id' => '5190',
                'estado_id' => '13',
                'descricao' => 'Aripuanã'
            ),
            190 =>
            array (
                'id' => '5191',
                'estado_id' => '13',
                'descricao' => 'Barão de Melgaço'
            ),
            191 =>
            array (
                'id' => '5192',
                'estado_id' => '13',
                'descricao' => 'Barra do Bugres'
            ),
            192 =>
            array (
                'id' => '5193',
                'estado_id' => '13',
                'descricao' => 'Barra do Garças'
            ),
            193 =>
            array (
                'id' => '5194',
                'estado_id' => '13',
                'descricao' => 'Bom Jesus do Araguaia'
            ),
            194 =>
            array (
                'id' => '5195',
                'estado_id' => '13',
                'descricao' => 'Brasnorte'
            ),
            195 =>
            array (
                'id' => '5196',
                'estado_id' => '13',
                'descricao' => 'Cáceres'
            ),
            196 =>
            array (
                'id' => '5197',
                'estado_id' => '13',
                'descricao' => 'Campinápolis'
            ),
            197 =>
            array (
                'id' => '5198',
                'estado_id' => '13',
                'descricao' => 'Campo Novo do Parecis'
            ),
            198 =>
            array (
                'id' => '5199',
                'estado_id' => '13',
                'descricao' => 'Campo Verde'
            ),
            199 =>
            array (
                'id' => '5200',
                'estado_id' => '13',
                'descricao' => 'Campos de Júlio',
            ),
            200 =>
            array (
                'id' => '5201',
                'estado_id' => '13',
                'descricao' => 'Canabrava do Norte'
            ),
            201 =>
            array (
                'id' => '5202',
                'estado_id' => '13',
                'descricao' => 'Canarana'
            ),
            202 =>
            array (
                'id' => '5203',
                'estado_id' => '13',
                'descricao' => 'Carlinda'
            ),
            203 =>
            array (
                'id' => '5204',
                'estado_id' => '13',
                'descricao' => 'Castanheira'
            ),
            204 =>
            array (
                'id' => '5205',
                'estado_id' => '13',
                'descricao' => 'Chapada dos Guimarães'
            ),
            205 =>
            array (
                'id' => '5206',
                'estado_id' => '13',
                'descricao' => 'Cláudia'
            ),
            206 =>
            array (
                'id' => '5207',
                'estado_id' => '13',
                'descricao' => 'Cocalinho'
            ),
            207 =>
            array (
                'id' => '5208',
                'estado_id' => '13',
                'descricao' => 'Colíder'
            ),
            208 =>
            array (
                'id' => '5209',
                'estado_id' => '13',
                'descricao' => 'Colniza'
            ),
            209 =>
            array (
                'id' => '5210',
                'estado_id' => '13',
                'descricao' => 'Comodoro'
            ),
            210 =>
            array (
                'id' => '5211',
                'estado_id' => '13',
                'descricao' => 'Confresa'
            ),
            211 =>
            array (
                'id' => '5212',
                'estado_id' => '13',
                'descricao' => 'Conquista D\'oeste'
            ),
            212 =>
            array (
                'id' => '5213',
                'estado_id' => '13',
                'descricao' => 'Cotriguaçu'
            ),
            213 =>
            array (
                'id' => '5214',
                'estado_id' => '13',
                'descricao' => 'Cuiabá',
            ),
            214 =>
            array (
                'id' => '5215',
                'estado_id' => '13',
                'descricao' => 'Curvelândia'
            ),
            215 =>
            array (
                'id' => '5216',
                'estado_id' => '13',
                'descricao' => 'Denise'
            ),
            216 =>
            array (
                'id' => '5217',
                'estado_id' => '13',
                'descricao' => 'Diamantino'
            ),
            217 =>
            array (
                'id' => '5218',
                'estado_id' => '13',
                'descricao' => 'Dom Aquino'
            ),
            218 =>
            array (
                'id' => '5219',
                'estado_id' => '13',
                'descricao' => 'Feliz Natal'
            ),
            219 =>
            array (
                'id' => '5220',
                'estado_id' => '13',
                'descricao' => 'Figueirópolis D\'oeste'
            ),
            220 =>
            array (
                'id' => '5221',
                'estado_id' => '13',
                'descricao' => 'Gaúcha do Norte'
            ),
            221 =>
            array (
                'id' => '5222',
                'estado_id' => '13',
                'descricao' => 'General Carneiro'
            ),
            222 =>
            array (
                'id' => '5223',
                'estado_id' => '13',
                'descricao' => 'Glória D\'oeste'
            ),
            223 =>
            array (
                'id' => '5224',
                'estado_id' => '13',
                'descricao' => 'Guarantã do Norte'
            ),
            224 =>
            array (
                'id' => '5225',
                'estado_id' => '13',
                'descricao' => 'Guiratinga'
            ),
            225 =>
            array (
                'id' => '5226',
                'estado_id' => '13',
                'descricao' => 'Indiavaí'
            ),
            226 =>
            array (
                'id' => '5227',
                'estado_id' => '13',
                'descricao' => 'Ipiranga do Norte'
            ),
            227 =>
            array (
                'id' => '5228',
                'estado_id' => '13',
                'descricao' => 'Itanhangá'
            ),
            228 =>
            array (
                'id' => '5229',
                'estado_id' => '13',
                'descricao' => 'Itaúba'
            ),
            229 =>
            array (
                'id' => '5230',
                'estado_id' => '13',
                'descricao' => 'Itiquira'
            ),
            230 =>
            array (
                'id' => '5231',
                'estado_id' => '13',
                'descricao' => 'Jaciara'
            ),
            231 =>
            array (
                'id' => '5232',
                'estado_id' => '13',
                'descricao' => 'Jangada'
            ),
            232 =>
            array (
                'id' => '5233',
                'estado_id' => '13',
                'descricao' => 'Jauru'
            ),
            233 =>
            array (
                'id' => '5234',
                'estado_id' => '13',
                'descricao' => 'Juara'
            ),
            234 =>
            array (
                'id' => '5235',
                'estado_id' => '13',
                'descricao' => 'Juína'
            ),
            235 =>
            array (
                'id' => '5236',
                'estado_id' => '13',
                'descricao' => 'Juruena'
            ),
            236 =>
            array (
                'id' => '5237',
                'estado_id' => '13',
                'descricao' => 'Juscimeira'
            ),
            237 =>
            array (
                'id' => '5238',
                'estado_id' => '13',
                'descricao' => 'Lambari D\'oeste'
            ),
            238 =>
            array (
                'id' => '5239',
                'estado_id' => '13',
                'descricao' => 'Lucas do Rio Verde',
            ),
            239 =>
            array (
                'id' => '5240',
                'estado_id' => '13',
                'descricao' => 'Luciára'
            ),
            240 =>
            array (
                'id' => '5241',
                'estado_id' => '13',
                'descricao' => 'Vila Bela da Santíssima Trindade'
            ),
            241 =>
            array (
                'id' => '5242',
                'estado_id' => '13',
                'descricao' => 'Marcelândia'
            ),
            242 =>
            array (
                'id' => '5243',
                'estado_id' => '13',
                'descricao' => 'Matupá'
            ),
            243 =>
            array (
                'id' => '5244',
                'estado_id' => '13',
                'descricao' => 'Mirassol D\'oeste'
            ),
            244 =>
            array (
                'id' => '5245',
                'estado_id' => '13',
                'descricao' => 'Nobres'
            ),
            245 =>
            array (
                'id' => '5246',
                'estado_id' => '13',
                'descricao' => 'Nortelândia'
            ),
            246 =>
            array (
                'id' => '5247',
                'estado_id' => '13',
                'descricao' => 'Nossa Senhora do Livramento'
            ),
            247 =>
            array (
                'id' => '5248',
                'estado_id' => '13',
                'descricao' => 'Nova Bandeirantes'
            ),
            248 =>
            array (
                'id' => '5249',
                'estado_id' => '13',
                'descricao' => 'Nova Nazaré'
            ),
            249 =>
            array (
                'id' => '5250',
                'estado_id' => '13',
                'descricao' => 'Nova Lacerda'
            ),
            250 =>
            array (
                'id' => '5251',
                'estado_id' => '13',
                'descricao' => 'Nova Santa Helena'
            ),
            251 =>
            array (
                'id' => '5252',
                'estado_id' => '13',
                'descricao' => 'Nova Brasilândia'
            ),
            252 =>
            array (
                'id' => '5253',
                'estado_id' => '13',
                'descricao' => 'Nova Canaã do Norte'
            ),
            253 =>
            array (
                'id' => '5254',
                'estado_id' => '13',
                'descricao' => 'Nova Mutum',
            ),
            254 =>
            array (
                'id' => '5255',
                'estado_id' => '13',
                'descricao' => 'Nova Olímpia'
            ),
            255 =>
            array (
                'id' => '5256',
                'estado_id' => '13',
                'descricao' => 'Nova Ubiratã'
            ),
            256 =>
            array (
                'id' => '5257',
                'estado_id' => '13',
                'descricao' => 'Nova Xavantina'
            ),
            257 =>
            array (
                'id' => '5258',
                'estado_id' => '13',
                'descricao' => 'Novo Mundo'
            ),
            258 =>
            array (
                'id' => '5259',
                'estado_id' => '13',
                'descricao' => 'Novo Horizonte do Norte'
            ),
            259 =>
            array (
                'id' => '5260',
                'estado_id' => '13',
                'descricao' => 'Novo São Joaquim'
            ),
            260 =>
            array (
                'id' => '5261',
                'estado_id' => '13',
                'descricao' => 'Paranaíta'
            ),
            261 =>
            array (
                'id' => '5262',
                'estado_id' => '13',
                'descricao' => 'Paranatinga'
            ),
            262 =>
            array (
                'id' => '5263',
                'estado_id' => '13',
                'descricao' => 'Novo Santo Antônio'
            ),
            263 =>
            array (
                'id' => '5264',
                'estado_id' => '13',
                'descricao' => 'Pedra Preta'
            ),
            264 =>
            array (
                'id' => '5265',
                'estado_id' => '13',
                'descricao' => 'Peixoto de Azevedo'
            ),
            265 =>
            array (
                'id' => '5266',
                'estado_id' => '13',
                'descricao' => 'Planalto da Serra'
            ),
            266 =>
            array (
                'id' => '5267',
                'estado_id' => '13',
                'descricao' => 'Poconé'
            ),
            267 =>
            array (
                'id' => '5268',
                'estado_id' => '13',
                'descricao' => 'Pontal do Araguaia'
            ),
            268 =>
            array (
                'id' => '5269',
                'estado_id' => '13',
                'descricao' => 'Ponte Branca'
            ),
            269 =>
            array (
                'id' => '5270',
                'estado_id' => '13',
                'descricao' => 'Pontes e Lacerda'
            ),
            270 =>
            array (
                'id' => '5271',
                'estado_id' => '13',
                'descricao' => 'Porto Alegre do Norte'
            ),
            271 =>
            array (
                'id' => '5272',
                'estado_id' => '13',
                'descricao' => 'Porto dos Gaúchos'
            ),
            272 =>
            array (
                'id' => '5273',
                'estado_id' => '13',
                'descricao' => 'Porto Esperidião'
            ),
            273 =>
            array (
                'id' => '5274',
                'estado_id' => '13',
                'descricao' => 'Porto Estrela'
            ),
            274 =>
            array (
                'id' => '5275',
                'estado_id' => '13',
                'descricao' => 'Poxoréo'
            ),
            275 =>
            array (
                'id' => '5276',
                'estado_id' => '13',
                'descricao' => 'Primavera do Leste',
            ),
            276 =>
            array (
                'id' => '5277',
                'estado_id' => '13',
                'descricao' => 'Querência'
            ),
            277 =>
            array (
                'id' => '5278',
                'estado_id' => '13',
                'descricao' => 'São José dos Quatro Marcos'
            ),
            278 =>
            array (
                'id' => '5279',
                'estado_id' => '13',
                'descricao' => 'Reserva do Cabaçal'
            ),
            279 =>
            array (
                'id' => '5280',
                'estado_id' => '13',
                'descricao' => 'Ribeirão Cascalheira'
            ),
            280 =>
            array (
                'id' => '5281',
                'estado_id' => '13',
                'descricao' => 'Ribeirãozinho'
            ),
            281 =>
            array (
                'id' => '5282',
                'estado_id' => '13',
                'descricao' => 'Rio Branco'
            ),
            282 =>
            array (
                'id' => '5283',
                'estado_id' => '13',
                'descricao' => 'Santa Carmem'
            ),
            283 =>
            array (
                'id' => '5284',
                'estado_id' => '13',
                'descricao' => 'Santo Afonso'
            ),
            284 =>
            array (
                'id' => '5285',
                'estado_id' => '13',
                'descricao' => 'São José do Povo'
            ),
            285 =>
            array (
                'id' => '5286',
                'estado_id' => '13',
                'descricao' => 'São José do Rio Claro'
            ),
            286 =>
            array (
                'id' => '5287',
                'estado_id' => '13',
                'descricao' => 'São José do Xingu'
            ),
            287 =>
            array (
                'id' => '5288',
                'estado_id' => '13',
                'descricao' => 'São Pedro da Cipa'
            ),
            288 =>
            array (
                'id' => '5289',
                'estado_id' => '13',
                'descricao' => 'Rondolândia'
            ),
            289 =>
            array (
                'id' => '5290',
                'estado_id' => '13',
                'descricao' => 'Rondonópolis'
            ),
            290 =>
            array (
                'id' => '5291',
                'estado_id' => '13',
                'descricao' => 'Rosário Oeste'
            ),
            291 =>
            array (
                'id' => '5292',
                'estado_id' => '13',
                'descricao' => 'Santa Cruz do Xingu'
            ),
            292 =>
            array (
                'id' => '5293',
                'estado_id' => '13',
                'descricao' => 'Salto do Céu'
            ),
            293 =>
            array (
                'id' => '5294',
                'estado_id' => '13',
                'descricao' => 'Santa Rita do Trivelato'
            ),
            294 =>
            array (
                'id' => '5295',
                'estado_id' => '13',
                'descricao' => 'Santa Terezinha'
            ),
            295 =>
            array (
                'id' => '5296',
                'estado_id' => '13',
                'descricao' => 'Santo Antônio do Leste'
            ),
            296 =>
            array (
                'id' => '5297',
                'estado_id' => '13',
                'descricao' => 'Santo Antônio do Leverger'
            ),
            297 =>
            array (
                'id' => '5298',
                'estado_id' => '13',
                'descricao' => 'São Félix do Araguaia'
            ),
            298 =>
            array (
                'id' => '5299',
                'estado_id' => '13',
                'descricao' => 'Sapezal'
            ),
            299 =>
            array (
                'id' => '5300',
                'estado_id' => '13',
                'descricao' => 'Serra Nova Dourada'
            ),
            300 =>
            array (
                'id' => '5301',
                'estado_id' => '13',
                'descricao' => 'Sinop',
            ),
            301 =>
            array (
                'id' => '5302',
                'estado_id' => '13',
                'descricao' => 'Sorriso',
            ),
            302 =>
            array (
                'id' => '5303',
                'estado_id' => '13',
                'descricao' => 'Tabaporã'
            ),
            303 =>
            array (
                'id' => '5304',
                'estado_id' => '13',
                'descricao' => 'Tangará da Serra'
            ),
            304 =>
            array (
                'id' => '5305',
                'estado_id' => '13',
                'descricao' => 'Tapurah'
            ),
            305 =>
            array (
                'id' => '5306',
                'estado_id' => '13',
                'descricao' => 'Terra Nova do Norte'
            ),
            306 =>
            array (
                'id' => '5307',
                'estado_id' => '13',
                'descricao' => 'Tesouro'
            ),
            307 =>
            array (
                'id' => '5308',
                'estado_id' => '13',
                'descricao' => 'Torixoréu'
            ),
            308 =>
            array (
                'id' => '5309',
                'estado_id' => '13',
                'descricao' => 'União do Sul'
            ),
            309 =>
            array (
                'id' => '5310',
                'estado_id' => '13',
                'descricao' => 'Vale de São Domingos'
            ),
            310 =>
            array (
                'id' => '5311',
                'estado_id' => '13',
                'descricao' => 'Várzea Grande'
            ),
            311 =>
            array (
                'id' => '5312',
                'estado_id' => '13',
                'descricao' => 'Vera'
            ),
            312 =>
            array (
                'id' => '5313',
                'estado_id' => '13',
                'descricao' => 'Vila Rica'
            ),
            313 =>
            array (
                'id' => '5314',
                'estado_id' => '13',
                'descricao' => 'Nova Guarita'
            ),
            314 =>
            array (
                'id' => '5315',
                'estado_id' => '13',
                'descricao' => 'Nova Marilândia'
            ),
            315 =>
            array (
                'id' => '5316',
                'estado_id' => '13',
                'descricao' => 'Nova Maringá'
            ),
            316 =>
            array (
                'id' => '5317',
                'estado_id' => '13',
                'descricao' => 'Nova Monte Verde'
            ),
            317 =>
            array (
                'id' => '5318',
                'estado_id' => '9',
                'descricao' => 'Abadia de Goiás'
            ),
            318 =>
            array (
                'id' => '5319',
                'estado_id' => '9',
                'descricao' => 'Abadiânia'
            ),
            319 =>
            array (
                'id' => '5320',
                'estado_id' => '9',
                'descricao' => 'Acreúna'
            ),
            320 =>
            array (
                'id' => '5321',
                'estado_id' => '9',
                'descricao' => 'Adelândia'
            ),
            321 =>
            array (
                'id' => '5322',
                'estado_id' => '9',
                'descricao' => 'Água Fria de Goiás'
            ),
            322 =>
            array (
                'id' => '5323',
                'estado_id' => '9',
                'descricao' => 'Água Limpa'
            ),
            323 =>
            array (
                'id' => '5324',
                'estado_id' => '9',
                'descricao' => 'Águas Lindas de Goiás'
            ),
            324 =>
            array (
                'id' => '5325',
                'estado_id' => '9',
                'descricao' => 'Alexânia'
            ),
            325 =>
            array (
                'id' => '5326',
                'estado_id' => '9',
                'descricao' => 'Aloândia'
            ),
            326 =>
            array (
                'id' => '5327',
                'estado_id' => '9',
                'descricao' => 'Alto Horizonte'
            ),
            327 =>
            array (
                'id' => '5328',
                'estado_id' => '9',
                'descricao' => 'Alto Paraíso de Goiás',
            ),
            328 =>
            array (
                'id' => '5329',
                'estado_id' => '9',
                'descricao' => 'Alvorada do Norte'
            ),
            329 =>
            array (
                'id' => '5330',
                'estado_id' => '9',
                'descricao' => 'Amaralina'
            ),
            330 =>
            array (
                'id' => '5331',
                'estado_id' => '9',
                'descricao' => 'Americano do Brasil'
            ),
            331 =>
            array (
                'id' => '5332',
                'estado_id' => '9',
                'descricao' => 'Amorinópolis'
            ),
            332 =>
            array (
                'id' => '5333',
                'estado_id' => '9',
                'descricao' => 'Anápolis'
            ),
            333 =>
            array (
                'id' => '5334',
                'estado_id' => '9',
                'descricao' => 'Anhanguera'
            ),
            334 =>
            array (
                'id' => '5335',
                'estado_id' => '9',
                'descricao' => 'Anicuns'
            ),
            335 =>
            array (
                'id' => '5336',
                'estado_id' => '9',
                'descricao' => 'Aparecida de Goiânia'
            ),
            336 =>
            array (
                'id' => '5337',
                'estado_id' => '9',
                'descricao' => 'Aparecida do Rio Doce'
            ),
            337 =>
            array (
                'id' => '5338',
                'estado_id' => '9',
                'descricao' => 'Aporé'
            ),
            338 =>
            array (
                'id' => '5339',
                'estado_id' => '9',
                'descricao' => 'Araçu'
            ),
            339 =>
            array (
                'id' => '5340',
                'estado_id' => '9',
                'descricao' => 'Aragarças'
            ),
            340 =>
            array (
                'id' => '5341',
                'estado_id' => '9',
                'descricao' => 'Aragoiânia'
            ),
            341 =>
            array (
                'id' => '5342',
                'estado_id' => '9',
                'descricao' => 'Araguapaz'
            ),
            342 =>
            array (
                'id' => '5343',
                'estado_id' => '9',
                'descricao' => 'Arenópolis'
            ),
            343 =>
            array (
                'id' => '5344',
                'estado_id' => '9',
                'descricao' => 'Aruanã'
            ),
            344 =>
            array (
                'id' => '5345',
                'estado_id' => '9',
                'descricao' => 'Aurilândia'
            ),
            345 =>
            array (
                'id' => '5346',
                'estado_id' => '9',
                'descricao' => 'Avelinópolis'
            ),
            346 =>
            array (
                'id' => '5347',
                'estado_id' => '9',
                'descricao' => 'Baliza'
            ),
            347 =>
            array (
                'id' => '5348',
                'estado_id' => '9',
                'descricao' => 'Barro Alto'
            ),
            348 =>
            array (
                'id' => '5349',
                'estado_id' => '9',
                'descricao' => 'Bela Vista de Goiás'
            ),
            349 =>
            array (
                'id' => '5350',
                'estado_id' => '9',
                'descricao' => 'Bom Jardim de Goiás'
            ),
            350 =>
            array (
                'id' => '5351',
                'estado_id' => '9',
                'descricao' => 'Bom Jesus de Goiás'
            ),
            351 =>
            array (
                'id' => '5352',
                'estado_id' => '9',
                'descricao' => 'Bonfinópolis'
            ),
            352 =>
            array (
                'id' => '5353',
                'estado_id' => '9',
                'descricao' => 'Bonópolis'
            ),
            353 =>
            array (
                'id' => '5354',
                'estado_id' => '9',
                'descricao' => 'Brazabrantes'
            ),
            354 =>
            array (
                'id' => '5355',
                'estado_id' => '9',
                'descricao' => 'Britânia'
            ),
            355 =>
            array (
                'id' => '5356',
                'estado_id' => '9',
                'descricao' => 'Buriti Alegre'
            ),
            356 =>
            array (
                'id' => '5357',
                'estado_id' => '9',
                'descricao' => 'Buriti de Goiás'
            ),
            357 =>
            array (
                'id' => '5358',
                'estado_id' => '9',
                'descricao' => 'Buritinópolis'
            ),
            358 =>
            array (
                'id' => '5359',
                'estado_id' => '9',
                'descricao' => 'Cabeceiras'
            ),
            359 =>
            array (
                'id' => '5360',
                'estado_id' => '9',
                'descricao' => 'Cachoeira Alta',
            ),
            360 =>
            array (
                'id' => '5361',
                'estado_id' => '9',
                'descricao' => 'Cachoeira de Goiás'
            ),
            361 =>
            array (
                'id' => '5362',
                'estado_id' => '9',
                'descricao' => 'Cachoeira Dourada'
            ),
            362 =>
            array (
                'id' => '5363',
                'estado_id' => '9',
                'descricao' => 'Caçu',
            ),
            363 =>
            array (
                'id' => '5364',
                'estado_id' => '9',
                'descricao' => 'Caiapônia'
            ),
            364 =>
            array (
                'id' => '5365',
                'estado_id' => '9',
                'descricao' => 'Caldas Novas'
            ),
            365 =>
            array (
                'id' => '5366',
                'estado_id' => '9',
                'descricao' => 'Caldazinha'
            ),
            366 =>
            array (
                'id' => '5367',
                'estado_id' => '9',
                'descricao' => 'Campestre de Goiás'
            ),
            367 =>
            array (
                'id' => '5368',
                'estado_id' => '9',
                'descricao' => 'Campinaçu'
            ),
            368 =>
            array (
                'id' => '5369',
                'estado_id' => '9',
                'descricao' => 'Campinorte'
            ),
            369 =>
            array (
                'id' => '5370',
                'estado_id' => '9',
                'descricao' => 'Campo Alegre de Goiás'
            ),
            370 =>
            array (
                'id' => '5371',
                'estado_id' => '9',
                'descricao' => 'Campo Limpo de Goiás'
            ),
            371 =>
            array (
                'id' => '5372',
                'estado_id' => '9',
                'descricao' => 'Campos Belos'
            ),
            372 =>
            array (
                'id' => '5373',
                'estado_id' => '9',
                'descricao' => 'Campos Verdes'
            ),
            373 =>
            array (
                'id' => '5374',
                'estado_id' => '9',
                'descricao' => 'Carmo do Rio Verde'
            ),
            374 =>
            array (
                'id' => '5375',
                'estado_id' => '9',
                'descricao' => 'Castelândia'
            ),
            375 =>
            array (
                'id' => '5376',
                'estado_id' => '9',
                'descricao' => 'Catalão',
            ),
            376 =>
            array (
                'id' => '5377',
                'estado_id' => '9',
                'descricao' => 'Caturaí'
            ),
            377 =>
            array (
                'id' => '5378',
                'estado_id' => '9',
                'descricao' => 'Cavalcante'
            ),
            378 =>
            array (
                'id' => '5379',
                'estado_id' => '9',
                'descricao' => 'Ceres'
            ),
            379 =>
            array (
                'id' => '5380',
                'estado_id' => '9',
                'descricao' => 'Cezarina'
            ),
            380 =>
            array (
                'id' => '5381',
                'estado_id' => '9',
                'descricao' => 'Chapadão do Céu'
            ),
            381 =>
            array (
                'id' => '5382',
                'estado_id' => '9',
                'descricao' => 'Cidade Ocidental'
            ),
            382 =>
            array (
                'id' => '5383',
                'estado_id' => '9',
                'descricao' => 'Cocalzinho de Goiás'
            ),
            383 =>
            array (
                'id' => '5384',
                'estado_id' => '9',
                'descricao' => 'Colinas do Sul'
            ),
            384 =>
            array (
                'id' => '5385',
                'estado_id' => '9',
                'descricao' => 'Córrego do Ouro'
            ),
            385 =>
            array (
                'id' => '5386',
                'estado_id' => '9',
                'descricao' => 'Corumbá de Goiás'
            ),
            386 =>
            array (
                'id' => '5387',
                'estado_id' => '9',
                'descricao' => 'Corumbaíba'
            ),
            387 =>
            array (
                'id' => '5388',
                'estado_id' => '9',
                'descricao' => 'Cristalina'
            ),
            388 =>
            array (
                'id' => '5389',
                'estado_id' => '9',
                'descricao' => 'Cristianópolis'
            ),
            389 =>
            array (
                'id' => '5390',
                'estado_id' => '9',
                'descricao' => 'Crixás'
            ),
            390 =>
            array (
                'id' => '5391',
                'estado_id' => '9',
                'descricao' => 'Cromínia'
            ),
            391 =>
            array (
                'id' => '5392',
                'estado_id' => '9',
                'descricao' => 'Cumari',
            ),
            392 =>
            array (
                'id' => '5393',
                'estado_id' => '9',
                'descricao' => 'Damianópolis'
            ),
            393 =>
            array (
                'id' => '5394',
                'estado_id' => '9',
                'descricao' => 'Damolândia'
            ),
            394 =>
            array (
                'id' => '5395',
                'estado_id' => '9',
                'descricao' => 'Davinópolis'
            ),
            395 =>
            array (
                'id' => '5396',
                'estado_id' => '9',
                'descricao' => 'Diorama'
            ),
            396 =>
            array (
                'id' => '5397',
                'estado_id' => '9',
                'descricao' => 'Doverlândia'
            ),
            397 =>
            array (
                'id' => '5398',
                'estado_id' => '9',
                'descricao' => 'Edealina'
            ),
            398 =>
            array (
                'id' => '5399',
                'estado_id' => '9',
                'descricao' => 'Edéia'
            ),
            399 =>
            array (
                'id' => '5400',
                'estado_id' => '9',
                'descricao' => 'Estrela do Norte'
            ),
            400 =>
            array (
                'id' => '5401',
                'estado_id' => '9',
                'descricao' => 'Faina'
            ),
            401 =>
            array (
                'id' => '5402',
                'estado_id' => '9',
                'descricao' => 'Fazenda Nova'
            ),
            402 =>
            array (
                'id' => '5403',
                'estado_id' => '9',
                'descricao' => 'Firminópolis'
            ),
            403 =>
            array (
                'id' => '5404',
                'estado_id' => '9',
                'descricao' => 'Flores de Goiás'
            ),
            404 =>
            array (
                'id' => '5405',
                'estado_id' => '9',
                'descricao' => 'Formosa'
            ),
            405 =>
            array (
                'id' => '5406',
                'estado_id' => '9',
                'descricao' => 'Formoso'
            ),
            406 =>
            array (
                'id' => '5407',
                'estado_id' => '9',
                'descricao' => 'Gameleira de Goiás'
            ),
            407 =>
            array (
                'id' => '5408',
                'estado_id' => '9',
                'descricao' => 'Divinópolis de Goiás'
            ),
            408 =>
            array (
                'id' => '5409',
                'estado_id' => '9',
                'descricao' => 'Goianápolis'
            ),
            409 =>
            array (
                'id' => '5410',
                'estado_id' => '9',
                'descricao' => 'Goiandira'
            ),
            410 =>
            array (
                'id' => '5411',
                'estado_id' => '9',
                'descricao' => 'Goianésia'
            ),
            411 =>
            array (
                'id' => '5412',
                'estado_id' => '9',
                'descricao' => 'Goiânia',
            ),
            412 =>
            array (
                'id' => '5413',
                'estado_id' => '9',
                'descricao' => 'Goianira'
            ),
            413 =>
            array (
                'id' => '5414',
                'estado_id' => '9',
                'descricao' => 'Goiás'
            ),
            414 =>
            array (
                'id' => '5415',
                'estado_id' => '9',
                'descricao' => 'Goiatuba'
            ),
            415 =>
            array (
                'id' => '5416',
                'estado_id' => '9',
                'descricao' => 'Gouvelândia'
            ),
            416 =>
            array (
                'id' => '5417',
                'estado_id' => '9',
                'descricao' => 'Guapó'
            ),
            417 =>
            array (
                'id' => '5418',
                'estado_id' => '9',
                'descricao' => 'Guaraíta'
            ),
            418 =>
            array (
                'id' => '5419',
                'estado_id' => '9',
                'descricao' => 'Guarani de Goiás'
            ),
            419 =>
            array (
                'id' => '5420',
                'estado_id' => '9',
                'descricao' => 'Guarinos'
            ),
            420 =>
            array (
                'id' => '5421',
                'estado_id' => '9',
                'descricao' => 'Heitoraí'
            ),
            421 =>
            array (
                'id' => '5422',
                'estado_id' => '9',
                'descricao' => 'Hidrolândia'
            ),
            422 =>
            array (
                'id' => '5423',
                'estado_id' => '9',
                'descricao' => 'Hidrolina'
            ),
            423 =>
            array (
                'id' => '5424',
                'estado_id' => '9',
                'descricao' => 'Iaciara'
            ),
            424 =>
            array (
                'id' => '5425',
                'estado_id' => '9',
                'descricao' => 'Inaciolândia'
            ),
            425 =>
            array (
                'id' => '5426',
                'estado_id' => '9',
                'descricao' => 'Indiara'
            ),
            426 =>
            array (
                'id' => '5427',
                'estado_id' => '9',
                'descricao' => 'Inhumas'
            ),
            427 =>
            array (
                'id' => '5428',
                'estado_id' => '9',
                'descricao' => 'Ipameri'
            ),
            428 =>
            array (
                'id' => '5429',
                'estado_id' => '9',
                'descricao' => 'Ipiranga de Goiás'
            ),
            429 =>
            array (
                'id' => '5430',
                'estado_id' => '9',
                'descricao' => 'Iporá'
            ),
            430 =>
            array (
                'id' => '5431',
                'estado_id' => '9',
                'descricao' => 'Israelândia'
            ),
            431 =>
            array (
                'id' => '5432',
                'estado_id' => '9',
                'descricao' => 'Itaberaí'
            ),
            432 =>
            array (
                'id' => '5433',
                'estado_id' => '9',
                'descricao' => 'Itaguari'
            ),
            433 =>
            array (
                'id' => '5434',
                'estado_id' => '9',
                'descricao' => 'Itaguaru'
            ),
            434 =>
            array (
                'id' => '5435',
                'estado_id' => '9',
                'descricao' => 'Itajá'
            ),
            435 =>
            array (
                'id' => '5436',
                'estado_id' => '9',
                'descricao' => 'Itapaci'
            ),
            436 =>
            array (
                'id' => '5437',
                'estado_id' => '9',
                'descricao' => 'Itapirapuã'
            ),
            437 =>
            array (
                'id' => '5438',
                'estado_id' => '9',
                'descricao' => 'Itapuranga'
            ),
            438 =>
            array (
                'id' => '5439',
                'estado_id' => '9',
                'descricao' => 'Itarumã',
            ),
            439 =>
            array (
                'id' => '5440',
                'estado_id' => '9',
                'descricao' => 'Itauçu'
            ),
            440 =>
            array (
                'id' => '5441',
                'estado_id' => '9',
                'descricao' => 'Itumbiara'
            ),
            441 =>
            array (
                'id' => '5442',
                'estado_id' => '9',
                'descricao' => 'Ivolândia'
            ),
            442 =>
            array (
                'id' => '5443',
                'estado_id' => '9',
                'descricao' => 'Jandaia'
            ),
            443 =>
            array (
                'id' => '5444',
                'estado_id' => '9',
                'descricao' => 'Jaraguá'
            ),
            444 =>
            array (
                'id' => '5445',
                'estado_id' => '9',
                'descricao' => 'Jataí',
            ),
            445 =>
            array (
                'id' => '5446',
                'estado_id' => '9',
                'descricao' => 'Jaupaci'
            ),
            446 =>
            array (
                'id' => '5447',
                'estado_id' => '9',
                'descricao' => 'Jesúpolis'
            ),
            447 =>
            array (
                'id' => '5448',
                'estado_id' => '9',
                'descricao' => 'Joviânia'
            ),
            448 =>
            array (
                'id' => '5449',
                'estado_id' => '9',
                'descricao' => 'Jussara'
            ),
            449 =>
            array (
                'id' => '5450',
                'estado_id' => '9',
                'descricao' => 'Lagoa Santa'
            ),
            450 =>
            array (
                'id' => '5451',
                'estado_id' => '9',
                'descricao' => 'Leopoldo de Bulhões'
            ),
            451 =>
            array (
                'id' => '5452',
                'estado_id' => '9',
                'descricao' => 'Luziânia'
            ),
            452 =>
            array (
                'id' => '5453',
                'estado_id' => '9',
                'descricao' => 'Mairipotaba',
            ),
            453 =>
            array (
                'id' => '5454',
                'estado_id' => '9',
                'descricao' => 'Mambaí'
            ),
            454 =>
            array (
                'id' => '5455',
                'estado_id' => '9',
                'descricao' => 'Mara Rosa'
            ),
            455 =>
            array (
                'id' => '5456',
                'estado_id' => '9',
                'descricao' => 'Marzagão'
            ),
            456 =>
            array (
                'id' => '5457',
                'estado_id' => '9',
                'descricao' => 'Matrinchã'
            ),
            457 =>
            array (
                'id' => '5458',
                'estado_id' => '9',
                'descricao' => 'Maurilândia'
            ),
            458 =>
            array (
                'id' => '5459',
                'estado_id' => '9',
                'descricao' => 'Mimoso de Goiás'
            ),
            459 =>
            array (
                'id' => '5460',
                'estado_id' => '9',
                'descricao' => 'Minaçu'
            ),
            460 =>
            array (
                'id' => '5461',
                'estado_id' => '9',
                'descricao' => 'Mineiros',
            ),
            461 =>
            array (
                'id' => '5462',
                'estado_id' => '9',
                'descricao' => 'Moiporá'
            ),
            462 =>
            array (
                'id' => '5463',
                'estado_id' => '9',
                'descricao' => 'Monte Alegre de Goiás'
            ),
            463 =>
            array (
                'id' => '5464',
                'estado_id' => '9',
                'descricao' => 'Montes Claros de Goiás'
            ),
            464 =>
            array (
                'id' => '5465',
                'estado_id' => '9',
                'descricao' => 'Montividiu'
            ),
            465 =>
            array (
                'id' => '5466',
                'estado_id' => '9',
                'descricao' => 'Montividiu do Norte'
            ),
            466 =>
            array (
                'id' => '5467',
                'estado_id' => '9',
                'descricao' => 'Morrinhos'
            ),
            467 =>
            array (
                'id' => '5468',
                'estado_id' => '9',
                'descricao' => 'Morro Agudo de Goiás'
            ),
            468 =>
            array (
                'id' => '5469',
                'estado_id' => '9',
                'descricao' => 'Mossâmedes'
            ),
            469 =>
            array (
                'id' => '5470',
                'estado_id' => '9',
                'descricao' => 'Mozarlândia'
            ),
            470 =>
            array (
                'id' => '5471',
                'estado_id' => '9',
                'descricao' => 'Mundo Novo'
            ),
            471 =>
            array (
                'id' => '5472',
                'estado_id' => '9',
                'descricao' => 'Mutunópolis'
            ),
            472 =>
            array (
                'id' => '5473',
                'estado_id' => '9',
                'descricao' => 'Nazário'
            ),
            473 =>
            array (
                'id' => '5474',
                'estado_id' => '9',
                'descricao' => 'Nerópolis'
            ),
            474 =>
            array (
                'id' => '5475',
                'estado_id' => '9',
                'descricao' => 'Niquelândia'
            ),
            475 =>
            array (
                'id' => '5476',
                'estado_id' => '9',
                'descricao' => 'Nova América'
            ),
            476 =>
            array (
                'id' => '5477',
                'estado_id' => '9',
                'descricao' => 'Nova Aurora'
            ),
            477 =>
            array (
                'id' => '5478',
                'estado_id' => '9',
                'descricao' => 'Nova Crixás'
            ),
            478 =>
            array (
                'id' => '5479',
                'estado_id' => '9',
                'descricao' => 'Nova Glória'
            ),
            479 =>
            array (
                'id' => '5480',
                'estado_id' => '9',
                'descricao' => 'Nova Iguaçu de Goiás'
            ),
            480 =>
            array (
                'id' => '5481',
                'estado_id' => '9',
                'descricao' => 'Nova Roma'
            ),
            481 =>
            array (
                'id' => '5482',
                'estado_id' => '9',
                'descricao' => 'Nova Veneza'
            ),
            482 =>
            array (
                'id' => '5483',
                'estado_id' => '9',
                'descricao' => 'Novo Brasil'
            ),
            483 =>
            array (
                'id' => '5484',
                'estado_id' => '9',
                'descricao' => 'Novo Gama'
            ),
            484 =>
            array (
                'id' => '5485',
                'estado_id' => '9',
                'descricao' => 'Novo Planalto'
            ),
            485 =>
            array (
                'id' => '5486',
                'estado_id' => '9',
                'descricao' => 'Orizona'
            ),
            486 =>
            array (
                'id' => '5487',
                'estado_id' => '9',
                'descricao' => 'Ouro Verde de Goiás'
            ),
            487 =>
            array (
                'id' => '5488',
                'estado_id' => '9',
                'descricao' => 'Ouvidor'
            ),
            488 =>
            array (
                'id' => '5489',
                'estado_id' => '9',
                'descricao' => 'Padre Bernardo'
            ),
            489 =>
            array (
                'id' => '5490',
                'estado_id' => '9',
                'descricao' => 'Palestina de Goiás'
            ),
            490 =>
            array (
                'id' => '5491',
                'estado_id' => '9',
                'descricao' => 'Palmeiras de Goiás'
            ),
            491 =>
            array (
                'id' => '5492',
                'estado_id' => '9',
                'descricao' => 'Palmelo'
            ),
            492 =>
            array (
                'id' => '5493',
                'estado_id' => '9',
                'descricao' => 'Palminópolis'
            ),
            493 =>
            array (
                'id' => '5494',
                'estado_id' => '9',
                'descricao' => 'Panamá'
            ),
            494 =>
            array (
                'id' => '5495',
                'estado_id' => '9',
                'descricao' => 'Paranaiguara'
            ),
            495 =>
            array (
                'id' => '5496',
                'estado_id' => '9',
                'descricao' => 'Paraúna'
            ),
            496 =>
            array (
                'id' => '5497',
                'estado_id' => '9',
                'descricao' => 'Perolândia'
            ),
            497 =>
            array (
                'id' => '5498',
                'estado_id' => '9',
                'descricao' => 'Petrolina de Goiás'
            ),
            498 =>
            array (
                'id' => '5499',
                'estado_id' => '9',
                'descricao' => 'Pilar de Goiás'
            ),
            499 =>
            array (
                'id' => '5500',
                'estado_id' => '9',
                'descricao' => 'Piracanjuba'
            ),
        ));
        \DB::table('municipios')->insert(array (
            0 =>
            array (
                'id' => '5501',
                'estado_id' => '9',
                'descricao' => 'Piranhas'
            ),
            1 =>
            array (
                'id' => '5502',
                'estado_id' => '9',
                'descricao' => 'Pirenópolis'
            ),
            2 =>
            array (
                'id' => '5503',
                'estado_id' => '9',
                'descricao' => 'Pires do Rio'
            ),
            3 =>
            array (
                'id' => '5504',
                'estado_id' => '9',
                'descricao' => 'Planaltina'
            ),
            4 =>
            array (
                'id' => '5505',
                'estado_id' => '9',
                'descricao' => 'Pontalina'
            ),
            5 =>
            array (
                'id' => '5506',
                'estado_id' => '9',
                'descricao' => 'Porangatu'
            ),
            6 =>
            array (
                'id' => '5507',
                'estado_id' => '9',
                'descricao' => 'Porteirão'
            ),
            7 =>
            array (
                'id' => '5508',
                'estado_id' => '9',
                'descricao' => 'Portelândia'
            ),
            8 =>
            array (
                'id' => '5509',
                'estado_id' => '9',
                'descricao' => 'Posse'
            ),
            9 =>
            array (
                'id' => '5510',
                'estado_id' => '9',
                'descricao' => 'Professor Jamil'
            ),
            10 =>
            array (
                'id' => '5511',
                'estado_id' => '9',
                'descricao' => 'Quirinópolis'
            ),
            11 =>
            array (
                'id' => '5512',
                'estado_id' => '9',
                'descricao' => 'Rialma'
            ),
            12 =>
            array (
                'id' => '5513',
                'estado_id' => '9',
                'descricao' => 'Rianápolis'
            ),
            13 =>
            array (
                'id' => '5514',
                'estado_id' => '9',
                'descricao' => 'Rio Quente'
            ),
            14 =>
            array (
                'id' => '5515',
                'estado_id' => '9',
                'descricao' => 'Rio Verde'
            ),
            15 =>
            array (
                'id' => '5516',
                'estado_id' => '9',
                'descricao' => 'Rubiataba'
            ),
            16 =>
            array (
                'id' => '5517',
                'estado_id' => '9',
                'descricao' => 'Sanclerlândia'
            ),
            17 =>
            array (
                'id' => '5518',
                'estado_id' => '9',
                'descricao' => 'Santa Bárbara de Goiás'
            ),
            18 =>
            array (
                'id' => '5519',
                'estado_id' => '9',
                'descricao' => 'Santa Cruz de Goiás'
            ),
            19 =>
            array (
                'id' => '5520',
                'estado_id' => '9',
                'descricao' => 'Santa Fé de Goiás'
            ),
            20 =>
            array (
                'id' => '5521',
                'estado_id' => '9',
                'descricao' => 'Santa Helena de Goiás'
            ),
            21 =>
            array (
                'id' => '5522',
                'estado_id' => '9',
                'descricao' => 'Santa Isabel'
            ),
            22 =>
            array (
                'id' => '5523',
                'estado_id' => '9',
                'descricao' => 'Santa Rita do Araguaia'
            ),
            23 =>
            array (
                'id' => '5524',
                'estado_id' => '9',
                'descricao' => 'Santa Rita do Novo Destino'
            ),
            24 =>
            array (
                'id' => '5525',
                'estado_id' => '9',
                'descricao' => 'Santa Rosa de Goiás'
            ),
            25 =>
            array (
                'id' => '5526',
                'estado_id' => '9',
                'descricao' => 'Santa Tereza de Goiás'
            ),
            26 =>
            array (
                'id' => '5527',
                'estado_id' => '9',
                'descricao' => 'Santa Terezinha de Goiás'
            ),
            27 =>
            array (
                'id' => '5528',
                'estado_id' => '9',
                'descricao' => 'Santo Antônio da Barra'
            ),
            28 =>
            array (
                'id' => '5529',
                'estado_id' => '9',
                'descricao' => 'Santo Antônio de Goiás'
            ),
            29 =>
            array (
                'id' => '5530',
                'estado_id' => '9',
                'descricao' => 'Santo Antônio do Descoberto'
            ),
            30 =>
            array (
                'id' => '5531',
                'estado_id' => '9',
                'descricao' => 'São Domingos'
            ),
            31 =>
            array (
                'id' => '5532',
                'estado_id' => '9',
                'descricao' => 'São Francisco de Goiás'
            ),
            32 =>
            array (
                'id' => '5533',
                'estado_id' => '9',
                'descricao' => 'São João D\'aliança'
            ),
            33 =>
            array (
                'id' => '5534',
                'estado_id' => '9',
                'descricao' => 'São João da Paraúna'
            ),
            34 =>
            array (
                'id' => '5535',
                'estado_id' => '9',
                'descricao' => 'São Luís de Montes Belos'
            ),
            35 =>
            array (
                'id' => '5536',
                'estado_id' => '9',
                'descricao' => 'São Luíz do Norte'
            ),
            36 =>
            array (
                'id' => '5537',
                'estado_id' => '9',
                'descricao' => 'São Miguel do Araguaia'
            ),
            37 =>
            array (
                'id' => '5538',
                'estado_id' => '9',
                'descricao' => 'São Miguel do Passa Quatro'
            ),
            38 =>
            array (
                'id' => '5539',
                'estado_id' => '9',
                'descricao' => 'São Patrício'
            ),
            39 =>
            array (
                'id' => '5540',
                'estado_id' => '9',
                'descricao' => 'São Simão'
            ),
            40 =>
            array (
                'id' => '5541',
                'estado_id' => '9',
                'descricao' => 'Senador Canedo'
            ),
            41 =>
            array (
                'id' => '5542',
                'estado_id' => '9',
                'descricao' => 'Serranópolis'
            ),
            42 =>
            array (
                'id' => '5543',
                'estado_id' => '9',
                'descricao' => 'Silvânia'
            ),
            43 =>
            array (
                'id' => '5544',
                'estado_id' => '9',
                'descricao' => 'Simolândia'
            ),
            44 =>
            array (
                'id' => '5545',
                'estado_id' => '9',
                'descricao' => 'Sítio D\'abadia'
            ),
            45 =>
            array (
                'id' => '5546',
                'estado_id' => '9',
                'descricao' => 'Taquaral de Goiás'
            ),
            46 =>
            array (
                'id' => '5547',
                'estado_id' => '9',
                'descricao' => 'Teresina de Goiás'
            ),
            47 =>
            array (
                'id' => '5548',
                'estado_id' => '9',
                'descricao' => 'Terezópolis de Goiás'
            ),
            48 =>
            array (
                'id' => '5549',
                'estado_id' => '9',
                'descricao' => 'Três Ranchos'
            ),
            49 =>
            array (
                'id' => '5550',
                'estado_id' => '9',
                'descricao' => 'Trindade'
            ),
            50 =>
            array (
                'id' => '5551',
                'estado_id' => '9',
                'descricao' => 'Trombas'
            ),
            51 =>
            array (
                'id' => '5552',
                'estado_id' => '9',
                'descricao' => 'Turvânia'
            ),
            52 =>
            array (
                'id' => '5553',
                'estado_id' => '9',
                'descricao' => 'Turvelândia'
            ),
            53 =>
            array (
                'id' => '5554',
                'estado_id' => '9',
                'descricao' => 'Uirapuru'
            ),
            54 =>
            array (
                'id' => '5555',
                'estado_id' => '9',
                'descricao' => 'Uruaçu'
            ),
            55 =>
            array (
                'id' => '5556',
                'estado_id' => '9',
                'descricao' => 'Uruana'
            ),
            56 =>
            array (
                'id' => '5557',
                'estado_id' => '9',
                'descricao' => 'Urutaí'
            ),
            57 =>
            array (
                'id' => '5558',
                'estado_id' => '9',
                'descricao' => 'Valparaíso de Goiás'
            ),
            58 =>
            array (
                'id' => '5559',
                'estado_id' => '9',
                'descricao' => 'Varjão'
            ),
            59 =>
            array (
                'id' => '5560',
                'estado_id' => '9',
                'descricao' => 'Vianópolis'
            ),
            60 =>
            array (
                'id' => '5561',
                'estado_id' => '9',
                'descricao' => 'Vicentinópolis'
            ),
            61 =>
            array (
                'id' => '5562',
                'estado_id' => '9',
                'descricao' => 'Vila Boa'
            ),
            62 =>
            array (
                'id' => '5563',
                'estado_id' => '9',
                'descricao' => 'Vila Propício'
            ),
            63 =>
            array (
                'id' => '5564',
                'estado_id' => '7',
                'descricao' => 'Brasília',
            ),
            64 =>
            array (
                'id' => '5565',
                'estado_id' => '14',
                'descricao' => 'Mojuí dos Campos'
            ),
            65 =>
            array (
                'id' => '5566',
                'estado_id' => '17',
                'descricao' => 'Nazaria'
            ),
            66 =>
            array (
                'id' => '5567',
                'estado_id' => '24',
                'descricao' => 'Pescaria Brava'
            ),
            67 =>
            array (
                'id' => '5568',
                'estado_id' => '24',
                'descricao' => 'Balneário Rincão'
            ),
            68 =>
            array (
                'id' => '5569',
                'estado_id' => '23',
                'descricao' => 'Pinto Bandeira'
            ),
            69 =>
            array (
                'id' => '5570',
                'estado_id' => '12',
                'descricao' => 'Paraíso das Aguás'
            ),
        ));
    }
}
