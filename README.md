# Objetivo
Criado para facilitar a integração com o LeadLovers

# Requisitos
PHP: Versão 7 ou acima | oizumi-junho/lead-lovers-php: Qualquer versão

# Configuração do arquivo composer.json

```

    "require": {
        "oizumi-junho/lead-lovers-php": "dev-master",
        "php": ">=7.0"
    }

```

# Configuração do arquivo config.php

```

<?php

define("LeadLoversToken", "Seu Token LeadLover");

```

# Exemplo de uso

```

<?php

require "vendor/autoload.php";

use OizumiJunho\LeadLovers\LeadLovers;

$dados = array(
    "email" => "email@email.com.br",
    "name" => "Nome",
    "machineCode" => "1512",
    "emailSequenceCode" => "4",
    "sequenceLevelCode" => "1",
    "phome" => "(00)0000-0000"
);

var_dump(LeadLovers::ReadMachine());

var_dump(LeadLovers::InsertLead($dados));

```