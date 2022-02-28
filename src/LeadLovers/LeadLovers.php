<?php

namespace OizumiJunho\LeadLovers;

class LeadLovers
{

    /*
        $dados = array(
            "email" => "email@email.com.br",
            "name" => "Nome",
            "machineCode" => "1512",
            "emailSequenceCode" => "4",
            "sequenceLevelCode" => "1",
            "phome" => "(00)0000-0000"
        );
    */

    public static function InsertLead($dados)
    {

        $url = 'http://llapi.leadlovers.com/webapi';
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url . '/lead' . '?token=' . LeadLoversToken,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => "Email={$dados['email']}&Name={$dados['name']}&MachineCode={$dados['machineCode']}&EmailSequenceCode={$dados['emailSequenceCode']}&SequenceLevelCode={$dados['sequenceLevelCode']}&Phone={$dados['phome']}",
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'authorization: bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWVfbmFtZSI6IldlYkFwaSIsInN1YiI6IldlYkFwaSIsInJvbGUiOlsicmVhZCIsIndyaXRlIiwicmVhZGRhc2giXSwiaXNzIjoiaHR0cDovL3dlYmFwaWxsLmF6dXJld2Vic2l0ZXMubmV0IiwiYXVkIjoiMWE5MThjMDc2YTViNDA3ZDkyYmQyNDRhNTJiNmZiNzQiLCJleHAiOjE1OTg3MDgyNzMsIm5iZiI6MTQ2OTEwODI3M30.SBSYmUSrWKSDcpP-dUegMTdq0COOd079OY4HgC2f70I'
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return $err; //Deu certo? Não
        } else {
            return $response; //Deu certo? Sim
        }
    }

    public static function ReadMachine()
    {

        $url = 'http://llapi.leadlovers.com/webapi';
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url . '/machines' . '?token=' . LeadLoversToken,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'accept: application/json',
                'authorization: bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWVfbmFtZSI6IldlYkFwaSIsInN1YiI6IldlYkFwaSIsInJvbGUiOlsicmVhZCIsIndyaXRlIiwicmVhZGRhc2giXSwiaXNzIjoiaHR0cDovL3dlYmFwaWxsLmF6dXJld2Vic2l0ZXMubmV0IiwiYXVkIjoiMWE5MThjMDc2YTViNDA3ZDkyYmQyNDRhNTJiNmZiNzQiLCJleHAiOjE1OTg3MDgyNzMsIm5iZiI6MTQ2OTEwODI3M30.SBSYmUSrWKSDcpP-dUegMTdq0COOd079OY4HgC2f70I'
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "Não"; //Deu certo? Não
        } else {
            return $response; //Deu certo? Sim
        }
    }

    /*
        $dados = array(
            "machineCode" => 1512,
        );
    */

    public static function ReadMachineCode($dados)
    {

        $url = 'http://llapi.leadlovers.com/webapi';
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url . '/emailsequences' . '?token=' . LeadLoversToken . '&machineCode=' . $dados['machineCode'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'accept: application/json',
                'authorization: bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWVfbmFtZSI6IldlYkFwaSIsInN1YiI6IldlYkFwaSIsInJvbGUiOlsicmVhZCIsIndyaXRlIiwicmVhZGRhc2giXSwiaXNzIjoiaHR0cDovL3dlYmFwaWxsLmF6dXJld2Vic2l0ZXMubmV0IiwiYXVkIjoiMWE5MThjMDc2YTViNDA3ZDkyYmQyNDRhNTJiNmZiNzQiLCJleHAiOjE1OTg3MDgyNzMsIm5iZiI6MTQ2OTEwODI3M30.SBSYmUSrWKSDcpP-dUegMTdq0COOd079OY4HgC2f70I'
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "Não"; //Deu certo? Não
        } else {
            return $response; //Deu certo? Sim
        }
    }

    /*
        $dados = array(
            "machineCode" => 1512,
            "sequenceCode" => 15
        );
    */

    public static function ReadSequenceCode($dados)
    {

        $url = 'http://llapi.leadlovers.com/webapi';
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url . '/levels' . '?token=' . LeadLoversToken . '&machinecode=' . $dados['machineCode'] . '&sequencecode=' . $dados['sequenceCode'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'accept: application/json',
                'authorization: bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWVfbmFtZSI6IldlYkFwaSIsInN1YiI6IldlYkFwaSIsInJvbGUiOlsicmVhZCIsIndyaXRlIiwicmVhZGRhc2giXSwiaXNzIjoiaHR0cDovL3dlYmFwaWxsLmF6dXJld2Vic2l0ZXMubmV0IiwiYXVkIjoiMWE5MThjMDc2YTViNDA3ZDkyYmQyNDRhNTJiNmZiNzQiLCJleHAiOjE1OTg3MDgyNzMsIm5iZiI6MTQ2OTEwODI3M30.SBSYmUSrWKSDcpP-dUegMTdq0COOd079OY4HgC2f70I'
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "Não"; //Deu certo? Não
        } else {
            return $response; //Deu certo? Sim
        }
    }

    /*
        $dados = array(
            "email" => "email@email.com.br",
            "machineCode" => "1512",
            "phome" => "(00)0000-0000"
        );
    */

    function RemoveLead($dados)
    {

        $url = 'http://llapi.leadlovers.com/webapi';
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url . '/lead' . '?token=' . LeadLoversToken . '&email=' . $dados['email'] . '&machinecode=' . $dados['machineCode'] . '&Phone=' . $dados['phone'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => array(
                'accept: application/json',
                'authorization: bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWVfbmFtZSI6IldlYkFwaSIsInN1YiI6IldlYkFwaSIsInJvbGUiOlsicmVhZCIsIndyaXRlIiwicmVhZGRhc2giXSwiaXNzIjoiaHR0cDovL3dlYmFwaWxsLmF6dXJld2Vic2l0ZXMubmV0IiwiYXVkIjoiMWE5MThjMDc2YTViNDA3ZDkyYmQyNDRhNTJiNmZiNzQiLCJleHAiOjE1OTg3MDgyNzMsIm5iZiI6MTQ2OTEwODI3M30.SBSYmUSrWKSDcpP-dUegMTdq0COOd079OY4HgC2f70I',
                'content-type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo 'cURL Error #:' . $err;
        } else {
            echo $response;
        }
    }
}
