<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/*********************************************************************************
 * Description:  Defines the Brazilian Portuguese language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): Vanio Vieira (vvanio@yahoo.com.br).
 ********************************************************************************/
 
global $timedate;
 
$mod_strings = array (
    'LBL_GOOD_FILE' => 'Importação de Arquivo de Leitura com Sucesso',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'linhas de registros foram ignoradas devido a erros.',
    'LBL_UPDATE_SUCCESSFULLY' => 'registros criados ou atualizados com sucesso.',
    'LBL_SUCCESSFULLY_IMPORTED' => 'registros foram criados',
    'LBL_STEP_4_TITLE' => 'Passo {0}: Arquivo de Importação',
    'LBL_STEP_5_TITLE' => 'Passo {0}: Visualizar Resultados',
    'LBL_CUSTOM_ENCLOSURE' => 'Campos delimitados por:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Não foi possível publicar. Existe outro mapa de Importação publicado com o mesmo nome.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Não é possível despublicar um mapa pertencente a outro usuário. Você possui um mapa de Importação com o mesmo nome.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Importações não estão configuradas para este tipo de módulo.',
    'LBL_IMPORT_TYPE' => 'O que você gostaria de fazer com os dados importados?',
    'LBL_IMPORT_BUTTON' => 'Criar somente novos registros.',
    'LBL_UPDATE_BUTTON' => 'Criar novos registros e atualizar registros existentes.',
    'LBL_CREATE_BUTTON_HELP' => 'Use esta opção para criar novos registros. Nota: As linhas no arquivo de importação contendo valores que correspondem aos IDs dos registros existentes não serão importadas se os valores estão mapeados para o campo ID.',
    'LBL_UPDATE_BUTTON_HELP' => 'Use esta opção para atualizar os registros existentes. Os dados no arquivo de importação serão comparados aos registros existentes com base no ID do registro no arquivo de importação.',
    'LBL_ERROR_INVALID_BOOL'=>'Valor booleano inválido (deve ser 1 ou 0)',
    'LBL_NO_ID' => 'ID Obrigatório',
    'LBL_PRE_CHECK_SKIPPED' => 'Pré-Verificação ignorada',
    'LBL_IMPORT_ERROR' => 'Erros na Importação:',
    'LBL_ERROR' => 'Erro',
    'LBL_NOLOCALE_NEEDED' => 'Nenhuma conversão locale é necessária',
    'LBL_FIELD_NAME' => 'Nome do Campo',
    'LBL_VALUE' => 'Valor',
    'LBL_ROW_NUMBER' => 'Número da Linha',
    'LBL_NONE' => 'Nenhum',
    'LBL_REQUIRED_VALUE' => 'Valor obrigatório faltando',
    'LBL_ERROR_SYNC_USERS' => 'Valor inválido para sincronizar com o Outlook: ',
    'LBL_ID_EXISTS_ALREADY' => 'ID já existente nesta tabela',
    'LBL_ASSIGNED_USER' => 'Se o Usuário não existir use o Usuário atual',
    'LBL_SHOW_HIDDEN' => 'Mostrar campos que não são normalmente importáveis',
    'LBL_UPDATE_RECORDS' => 'Atualizar Registros existentes em vez de importá-los (Sem Desfazer)',
    'LBL_TEST'=> 'Testar Importação (não guardar ou alterar dados)',
    'LBL_TRUNCATE_TABLE' => 'Esvaziar tabela antes de importar (excluir todos os Registros)',
    'LBL_RELATED_ACCOUNTS' => 'Não criar Contas relacionadas',
    'LBL_NO_DATECHECK' => 'Ignorar verificação da data (mais rápida mas irá falhar se alguma data estiver errada ou com formato inválido)',
    'LBL_NO_EMAILS' => 'Não enviar notificações de E-mail durante esta importação',
    'LBL_NO_PRECHECK' => 'Modo Formato Nativo',
    'LBL_STRICT_CHECKS' => 'Usar conjuto de regras estrito (Verificar endereços de E-mail e números de telefone também)',
    'LBL_ERROR_SELECTING_RECORD' => 'Erro ao selecionar registo:',
    'LBL_ERROR_DELETING_RECORD' => 'Erro ao excluir registo:',
    'LBL_NOT_SET_UP' => 'A Importação não está configurada para este tipo de módulo',
    'LBL_ARE_YOU_SURE' => 'Você tem certeza? Isto irá apagar todos os dados deste módulo.',
    'LBL_NO_RECORD' => 'Nenhum registo com este ID para atualização',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'A mportação não está configurada para este tipo de módulo',
    'LBL_DEBUG_MODE' => 'Ativar modo debugging',
    'LBL_ERROR_INVALID_ID' => 'O ID fornecido é muito extenso para caber no campo (o comprimento máximo é de 36 caracteres)',
    'LBL_ERROR_INVALID_PHONE' => 'Número de telefone inválido',
    'LBL_ERROR_INVALID_NAME' => 'String muito extensa para caber no campo',
    'LBL_ERROR_INVALID_VARCHAR' => 'String muito extensa para caber no campo',
    'LBL_ERROR_INVALID_DATE' => 'Data inválida',
    'LBL_ERROR_INVALID_DATETIME' => 'Data e hora inválidas',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Data e hora inválidas',
    'LBL_ERROR_INVALID_TIME' => 'Hora inválida',
    'LBL_ERROR_INVALID_INT' => 'Valor inteiro inválido',
    'LBL_ERROR_INVALID_NUM' => 'Valor numérico inválido',
    'LBL_ERROR_INVALID_TIME' => 'Hora Inválida',
    'LBL_ERROR_INVALID_EMAIL'=>'Endereço de E-mail inválido',
    'LBL_ERROR_INVALID_BOOL'=>'Valor booleano inválido (deve ser 1 ou 0)',
    'LBL_ERROR_INVALID_DATE'=>'Valor data inválido',
    'LBL_ERROR_INVALID_USER'=>'Nome de Usuário ou ID inválido',
    'LBL_ERROR_INVALID_TEAM' => 'Nome de Equipe ou ID inválido',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Nome de Conta ou ID inválido',
    'LBL_ERROR_INVALID_RELATE' => 'Campo relacional inválido',
    'LBL_ERROR_INVALID_CURRENCY' => 'Valor de moeda inválido',
    'LBL_ERROR_INVALID_FLOAT' => 'Valor decimal inválido',
    'LBL_ERROR_NOT_IN_ENUM' => 'O valor não está na lista Dropdown. Valores permitidos são: ',
    'LBL_NOT_MULTIENUM' => 'Não é um MultiEnum',
    'LBL_IMPORT_MODULE_NO_TYPE' => 'A Importação não está configurada para este tipo de módulo',
    'LBL_IMPORT_MODULE_NO_USERS' => 'AVISO: Você não tem Usuários definidos no seu sistema. Se você importar sem adicionar Usuários primeiro, todos os Registros irão pertencer ao Administrador.',
    'LBL_IMPORT_MODULE_MAP_ERROR' => 'Não foi possível publicar. Existe outro Mapa de Importação publicado com o mesmo nome.',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Não é possível despublicar um mapa que pertence a outro Usuário.Você possui um Mapa de Importação com o mesmo nome..',
    'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'O Diretório ',
    'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => ' não existe ou não pode ser escrito.',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Arquivo não foi carregado com sucesso. Pode ser que a definição \'upload_max_filesize\' em seu arquivo php.ini esteja definida para um tamanho pequeno.',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'O arquivo é muito grande. Max:',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Bytes. Altere $sugar_config[\'upload_maxsize\'] no arquivo config.php',
    'LBL_MODULE_NAME' => 'Importação',
    'LBL_TRY_AGAIN' => 'Tente Novamente',
    'LBL_START_OVER' => 'Recomeçar',
    'LBL_ERROR' => 'Erro:',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'O arquivo de importação contém {0} linhas. O número otimizado de linhas é {1}. Mais linhas pode tornar o processo muito lento. Clique OK para continuar importando. Clique Cancelar para revisar e recarregar o arquivo de importação.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => 'Você não pode importar um usuário administrador do sistema.',
    'ERR_MULTIPLE' => 'Múltiplas colunas foram definidas com o mesmo nome de campo.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Faltam campos obrigatórios:',
    'ERR_MISSING_MAP_NAME' => 'Falta nome de mapeamento personalizado',
    'ERR_SELECT_FULL_NAME' => 'Você não pode selecionar o Nome Completo quando o Primeiro Nome e o Sobrenome estão selecionados.',
    'ERR_SELECT_FILE' => 'Selecione um Arquivo para carregar.',
    'LBL_SELECT_FILE' => 'Selecione um Arquivo:',
    'LBL_CUSTOM' => 'Personalizado',
    'LBL_CUSTOM_CSV' => 'Arquivo Personalizado Delimitado por Vírgulas',
    'LBL_CSV' => 'Arquivo Delimitado por vírgula',
    'LBL_EXTERNAL_SOURCE' => 'uma Aplicação externa ou serviço',
    'LBL_TAB' => 'Arquivo Delimitado por TAB',
    'LBL_CUSTOM_DELIMITED' => 'Arquivo com Delimitador personalizados',
    'LBL_CUSTOM_DELIMITER' => 'Campos Delimitados Por:',
    'LBL_FILE_OPTIONS' => 'Opções de Arquivo',
    'LBL_CUSTOM_TAB' => 'Arquivo Personalizado Delimitado por Tabulações',
    'LBL_DONT_MAP' => '-- Não mapear este campo --',
    'LBL_STEP_MODULE' => 'Para qual módulo você quer para importar estes dados?',
    'LBL_STEP_1_TITLE' => 'Passo 1: Selecionar a Fonte de Dados',
    'LBL_CONFIRM_TITLE' => 'Passo {0}: Confirmar Propriedades do Arquivo de Importações',
    'LBL_CONFIRM_EXT_TITLE' => 'Passo {0}: Confirmar Propriedades da Fonte Externa',
    'LBL_WHAT_IS' => 'Meus dados estão em:',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'Os mapeamentos personalizados para Microsoft Outlook dependem da importação de arquivos sendo delimitado por vírgulas (.csv). Se o seu arquivo de importação é delimitado por tabulações, os mapeamentos não serão aplicados conforme esperado.',
    'LBL_ACT' => 'Act!',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_MY_SAVED' => 'Para usar suas configurações de importação salvas, selecione abaixo:',
    'LBL_PUBLISH' => 'Publicar',
    'LBL_DELETE' => 'Excluir',
    'LBL_PUBLISHED_SOURCES' => 'Para usar configurações de importação pré-definidas, selecione abaixo:',
    'LBL_UNPUBLISH' => 'Despublicar',
    'LBL_NEXT' => 'Próximo >',
    'LBL_BACK' => '< Anterior',
    'LBL_STEP_2_TITLE' => 'Passo {0}: Carregar Arquivo de Importação',
    'LBL_HAS_HEADER' => 'Linha de Cabeçalho:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Notas:',
    'LBL_NOW_CHOOSE' => 'Agora escolha o arquivo para importar:',
    'LBL_IMPORT_OUTLOOK_TITLE' => 'O Microsoft Outlook 98 e 2000 podem exportar dados no formato de <b>Valores Separados por Vírgula</b> (CSV:Comma Separated Values) os quais podem ser usados para importar dados no sistema. Para exportar os seus dados do Outlook, siga os seguintes passos:',
    'LBL_OUTLOOK_NUM_1' => 'Inicie o <b>Outlook</b>',
    'LBL_OUTLOOK_NUM_2' => 'Selecione o menu <b>Arquivo</b> menu, e então a opção de menu <b>Importar and Exportar...</b>',
    'LBL_OUTLOOK_NUM_3' => 'Escolha <b>Exportar para um arquivo</b> e clique <b>Próximo</b>',
    'LBL_OUTLOOK_NUM_4' => 'Escolha <b>Comma Separated Values (Windows)</b> e clique <b>Próximo</b>.<br>Nota: Você pode ser solicitado para instalar um componente de esportação.',
    'LBL_OUTLOOK_NUM_5' => 'Selecione a pasta <b>Contatos</b> e clique <b>Próximo</b>. Você pode selecionar diferentes pastas de contatos se você armazena múltiplas pastas.',
    'LBL_OUTLOOK_NUM_6' => 'Escolha o nome do arquivo e clique <b>Próximo</b>',
    'LBL_OUTLOOK_NUM_7' => 'Clique <b>Finalizar</b>',
    'LBL_IMPORT_SF_TITLE' => 'O Salesforce.com pode exportar dados no formato <b>Valores Separados por Vírgula</b> que podem ser utilizados para importar no sistema. Para exportar dados a partir do Salesforce.com, siga os passos abaixo:',
    'LBL_SF_NUM_1' => 'Abra seu browser, aceda a http://www.salesforce.com e efetue o login com o seu endereço de e-mail e senha',
    'LBL_SF_NUM_2' => 'Clique na aba <b>Relatórios</b> do menu superior',
    'LBL_SF_NUM_3' => 'Para exportar Contas:</b> Clique no link <b>Contas Ativas</b><br><b>Para exportar contatos:</b> Clique no link <b>Listas de E-mail</b>',
    'LBL_SF_NUM_4' => 'No <b>Passo 1: Selecione o seu tipo de relatório</b>, selecione <b>Relatórios tabulares</b>clique <b>Próximo</b>',
    'LBL_SF_NUM_5' => 'No <b>Passo 2: Selecione colunas do relatório</b>, escolha as colunas que deseja exportar e clique <b>Próximo</b>',
    'LBL_SF_NUM_6' => 'No <b>Passo 3: Selecione a informação a sumarizar</b>, apenas clique <b>Próximo</b>',
    'LBL_SF_NUM_7' => 'No <b>Passo 4: Ordene as colunas do relatório</b>, apenas clique <b>Próximo</b>',
    'LBL_SF_NUM_8' => 'No <b>Passo 5: Selecione os critérios de relatório</b>, sob a <b>Data de Início</b>, escolha uma data antiga o bastante para incluir todas as suas Contas. Você também pode exportar um subc das Contas utilizando um critério mais avançado. Quando estiver pronto, clique <b>Executar Relatório</b>',
    'LBL_SF_NUM_9' => 'O relatório será gerado, e a página deve apresentar <b>Estado da Geração de Relatório: Completo.</b> Agora clique <b>Exportar para Excel</b>',
    'LBL_SF_NUM_10' => 'Em <b>Exportar Relatório:</b>, para <b>Exportar Formato de Arquivo:</b>, escolha <b>Delimitado por Vírgula .csv</b>. Clique <b>Exportar</b>.',
    'LBL_SF_NUM_11' => 'Um diálogo em pop-up irá perguntar para você gravar o Arquivo exportado para o seu computador.',
    'LBL_IMPORT_ACT_TITLE' => 'O Act! pode exportar dados no formato <b>Valores Separados por Vírgula</b>, que pode ser utilizado para importar dados para o sistema. Para exportar os seus dados do Act!, siga os seguintes passos:',
    'LBL_ACT_NUM_1' => 'Iniciar o <b>ACT!</b>',
    'LBL_ACT_NUM_2' => 'Selecione o menu <b>Arquivo</b>, a opção do menu <b>Trocar Dados</b>, e depois a opção do menu <b>Exportar...</b>',
    'LBL_ACT_NUM_3' => 'Selecione o tipo de Arquivo <b>Texto-Delimitado</b>',
    'LBL_ACT_NUM_4' => 'Escolha um nome de Arquivo e o local para os dados exportados e clique em <b>Próximo</b>',
    'LBL_ACT_NUM_5' => 'Selecione <b>Registros de contatos apenas</b>',
    'LBL_ACT_NUM_6' => 'Clique no botão <b>Opções...</b>',
    'LBL_ACT_NUM_7' => 'Selecione <b>Vírgula</b> como o caractere separador de campo',
    'LBL_ACT_NUM_8' => 'Marque o checkbox <b>Sim, exportar nomes de campo</b> e clique em <b>OK</b>',
    'LBL_ACT_NUM_9' => 'Clique em <b>Próximo</b>',
    'LBL_ACT_NUM_10' => 'Selecione <b>Todos os Registros</b> e depois clique em <b>Concluir</b>',
    'LBL_IMPORT_CUSTOM_TITLE' => 'Muitas aplicações permitem que você exportar dados em um <b>Arquivo de texto Delimitado por Vírgula (.csv)</b> seguindo os passos gerais abaixo:',
    'LBL_CUSTOM_NUM_1' => 'Inicie a aplicação e abra o Arquivo de dados',
    'LBL_CUSTOM_NUM_2' => 'Selecione a opção do menu <b>Salvar Como...</b> ou <b>Exportar...</b>',
    'LBL_CUSTOM_NUM_3' => 'Salve o Arquivo no formato <b>CSV</b> ou <b>Valores Separados por Vírgula</b>',
    'LBL_IMPORT_TAB_TITLE' => 'Muitas aplicações permitem que você exportar dados em um <b>Arquivo de texto Delimitado por Vírgula (.csv)</b> seguindo os passos gerais abaixo:',
    'LBL_TAB_NUM_1' => 'Inicie a aplicação e abra o Arquivo de dados',
    'LBL_TAB_NUM_2' => 'Selecione a opção do menu <b>Salvar Como...</b> ou <b>Exportar...</b>',
    'LBL_TAB_NUM_3' => 'Salve o Arquivo no formato <b>TSV</b> ou <b>Valores Separados por Tabulador</b>',
    'LBL_STEP_3_TITLE' => 'Passo {0}: Confirme os Mapeamentos de Campos',
    'LBL_STEP_DUP_TITLE' => 'Passo {0}: Verifique os Possíveis Duplicados',
    'LBL_SELECT_FIELDS_TO_MAP' => 'Na lista abaixo, selecione os campos do seu Arquivo de Importação que devem ser importados em cada campo do sistema. Quando terminar, clique <b>Importar Agora</b>:',
    'LBL_DATABASE_FIELD' => 'Campo do Módulo',
    'LBL_HEADER_ROW' => 'Linha de Cabeçalho',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Selecione se a linha superior do arquivo de importação é uma Linha de Cabeçalho contendo rótulos de campo.',
    'LBL_ROW' => 'Linha',
    'LBL_SAVE_AS_CUSTOM' => 'Salvar como Mapeamento Customizado:',
    'LBL_SAVE_AS_CUSTOM_NAME' => 'Nome do Mapeamento Customizado:',
    'LBL_CONTACTS_NOTE_1' => 'Sobrenome ou Nome Completo devem ser mapeados.',
    'LBL_CONTACTS_NOTE_2' => 'Se Nome Completo está mapeado, então Nome e Sobrenome são ignorados.',
    'LBL_CONTACTS_NOTE_3' => 'Se Nome Completo está mapeado, então os dados deste campo serão separados em Nome e Sobrenome quando inserido no banco de dados.',
    'LBL_CONTACTS_NOTE_4' => 'Os campos Endereço e e Endereço 3 serão concatenados com o campo Endereço quando inseridos no banco de dados.',
    'LBL_ACCOUNTS_NOTE_1' => 'Os campos Endereço e e Endereço 3 serão concatenados com o campo Endereço quando inseridos no banco de dados.',
    'LBL_REQUIRED_NOTE' => 'Campo(s) Obrigatório(s): ',
    'LBL_IMPORT_NOW' => 'Importar Agora',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'Não foi possível abrir o Arquivo importado para leitura.',
    'LBL_NOT_SAME_NUMBER' => 'Não há o mesmo número de campos por linha no seu Arquivo.',
    'LBL_NO_LINES' => 'Não foram detectadas linhas em seu arquivo de importação. Por favor, ceritifique-se de que não há linhas vazias em seu arquivo e tente novamente.',
    'LBL_FILE_ALREADY_BEEN_OR' => 'O arquivo de importação já foi processado ou não existe!',
    'LBL_SUCCESS' => 'Successo:',
	'LBL_FAILURE' => 'Importação Falhou:',
    'LBL_SUCCESSFULLY' => 'Importados com Sucesso',
    'LBL_LAST_IMPORT_UNDONE' => 'A importação foi desfeita.',
    'LBL_NO_IMPORT_TO_UNDO' => 'Não há importação para desfazer.',
    'LBL_FAIL' => 'Falha:',
    'LBL_RECORDS_SKIPPED' => 'Registros ignorados por estar faltando um ou mais campos obrigatórios.',
    'LBL_IDS_EXISTED_OR_LONGER' => 'Registros ignorados porque os id\'s já existem ou são mais longos que 36 caracteres',
    'LBL_RESULTS' => 'Resultados',
    'LBL_CREATED_TAB' => 'Registros Criados',
    'LBL_DUPLICATE_TAB' => 'Duplicados',
    'LBL_ERROR_TAB' => 'Erros',
    'LBL_IMPORT_MORE' => 'Importar Novamente',
    'LBL_FINISHED' => 'Concluído',
    'LBL_UNDO_LAST_IMPORT' => 'Desfazer Importação',
    'LBL_LAST_IMPORTED'=>'Criado(s)',
    'ERR_MULTIPLE_PARENTS' => 'Você pode ter somente um ID Membro definido',
    'LBL_DUPLICATES' => 'Duplicações Encontradas',
    'LNK_DUPLICATE_LIST' => 'Download da lista de duplicados.',
    'LNK_ERROR_LIST' => 'Download da lista de erros.',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Download da lista de linhas que não foram importadas.',
    'LBL_UNIQUE_INDEX' => 'Escolha Índices para comparação de duplicados',
    'LBL_VERIFY_DUPS' => 'Para verificar registros existentes similares aos dados no arquivo de importação selecione os campos para verificar.',
    'LBL_INDEX_USED' => 'Campos para Verificar:',
    'LBL_INDEX_NOT_USED' => 'Campos Disponíveis:',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'O Arquivo não foi carregado com sucesso. Verifique as permissões do arquivo no diretório cache do sistema.',
    'LBL_IMPORT_FIELDDEF_ID' => 'Número ID único',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Nome ou ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Número de Telefone',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Nome da Equipe ou ID',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Qualquer Texto',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Qualquer Texto',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Qualquer Texto',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Hora',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Data',
    'LBL_IMPORT_FIELDDEF_DATETIME' => 'Data e Hora',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Nome de Usuário ou ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '\'0\' ou \'1\'',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Lista',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'Endereço de E-Mail',
    'LBL_IMPORT_FIELDDEF_INT' => 'Numérico (Não Decimal)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numérico (Não Decimal)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Numérico (Não Decimal)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numérico (Decimal Permitido)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numérico (Decimal Permitido)',
    'LBL_DATE_FORMAT' => 'Formato de Data:',
    'LBL_TIME_FORMAT' => 'Formato de Hora:',
    'LBL_TIMEZONE' => 'Fuso Horário:',
    'LBL_ADD_ROW' => 'Adicionar Campo',
    'LBL_REMOVE_ROW' => 'Remover Campo',
    'LBL_DEFAULT_VALUE' => 'Valor Padrão',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Mostrar Propriedades do Arquivo de Importação',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Ocultar Propriedades do Arquivo de Importação',
    'LBL_SHOW_NOTES' => 'Mostrar Anotações',
    'LBL_HIDE_NOTES' => 'Ocultar Anotações',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'Mostrar Previsualização de Colunas',
    'LBL_HIDE_PREVIEW_COLUMNS' => 'Ocultar Previsualização de Colunas',
    'LBL_SAVE_MAPPING_AS' => 'Para salvar as definições de importação, informe um nome para as definições salvas:',
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'Aspas Simples (\')',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Aspas Duplas (")',
    'LBL_OPTION_ENCLOSURE_NONE' => 'Nenhum',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'Outro:',
    'LBL_IMPORT_COMPLETE' => 'Sair',
    'LBL_IMPORT_COMPLETED' => 'Importação Concluída',
    'LBL_IMPORT_ERROR' => 'Erros de Importação Ocorridos',
    'LBL_IMPORT_RECORDS' => 'Importando Registros',
    'LBL_IMPORT_RECORDS_OF' => 'de',
    'LBL_IMPORT_RECORDS_TO' => 'até',
    'LBL_CURRENCY' => 'Moeda:',
	'LBL_CURRENCY_SIG_DIGITS' => 'Dígitos Significativos da Moeda',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Exemplo',
    'LBL_NUMBER_GROUPING_SEP' => 'Separador de 1000s:',
    'LBL_DECIMAL_SEP' => 'Símbolo decimal:',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Formato de Exibição do Nome',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Exemplo',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Saudação, "f" Nome, "l" Sobrenome</i>',
    'LBL_CHARSET' => 'Codificação do Arquivo:',
    'LBL_MY_SAVED_HELP' => 'Use esta opção para aplicar definições de importação pré-definidas, incluindo propriedades de importação, mapeamentos de campos e verificações de duplicidade para esta importação.<br><br>Clique <b>Excluir</b> para excluir um mapeamento para todos os usuários.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Use esta opção para aplicar definições de importação pré-definidas, incluindo propriedades de importação, mapeamentos de campos e verificações de duplicidade para esta importação.<br><br>Clique <b>Publicar</b> para tornar este mapeamento disponível para outros usuários.<br>Clique <b>Despublicar</b> para tornar este mapeamento indisponível para outros usuários.<br>Clique <b>Excluir</b> para excluir um mapeamento para todos os usuários.',
    'LBL_MY_PUBLISHED_HELP' => 'Use esta opção para aplicar definições de importação pré-definidas, incluindo propriedades de importação, mapeamentos de campos e verificações de duplicidade para esta importação.',
    'LBL_ENCLOSURE_HELP' => 'O <b>caractere qualificador</b> é utilizado para encerrar o conteúdo de campo pretendido, incluindo quaisquer caracteres que são utilizados como delimitadores.<br><br>Exemplo: Se o delimitador é uma vírgula (,) e o qualificador é aspas duplas ("), <b>"São Paulo, São Paulo"</b> é importado para um campo na aplicação e aparece como <b>São Paulo, São Paulo</b>.<br>Se não há caracteres qualificadores, ou se um caractere diferente é o qualificador,<b> "São Paulo, São Paulo" </b> é importado para dois campos adjacentes como <b>"São Paulo"</b> e <b>"São Paulo"</b>.<br><br>Nota: O Arquivo de importação pode não conter quaisquer caracteres qualificadores.<br> O caractere qualificador padrão para Arquivos delimitados por vírgula e tabulação criados no Excel é aspas duplas.',
    'LBL_DELIMITER_COMMA_HELP' => 'Use esta opção para selecionar e carregar um arquivo contendo os dados que você gostaria de importar. Exemplos: arquivos delimitados por vírgulas (.csv) ou exportados a prtir do Microsoft Outlook.',
    'LBL_DELIMITER_TAB_HELP' => 'Selecione esta opção se o caractere que separa os campos no Arquivo de importação é uma <b>tabulação</b>, ou se a extensão do Arquivo é .txt.',
    'LBL_DELIMITER_CUSTOM_HELP' => 'Selecione esta opção se o caractere que separa os campos no Arquivo de importação não é uma <b>vírgula</b> ou uma <b>tabulação</b>, e digite o caractere no campo ao lado.',
    'LBL_DATABASE_FIELD_HELP' => 'Esta coluna mostra todos os campos do módulo. Selecione um campo para mapear os dados nas linhas de importação.',
    'LBL_HEADER_ROW_HELP' => 'Esta coluna mostra os rótulos da linha de cabeçalho do arquivo de importação.',
    'LBL_DEFAULT_VALUE_HELP' => 'Indique um valor para ser usado para o campo no registro criado ou atualizado, se o campo no arquivo de importação não contém dados.',
    'LBL_ROW_HELP' => 'Esta coluna mostra os dados na primeira linha não cabeçalho do arquivo de importação. Se a linha de cabeçalho estiver aparecendo nesta coluna, clique <b>Voltar</b> para especificar uma linha de cabeçalho nas Propriedades do Arquivo de Importação.',
    'LBL_SAVE_MAPPING_HELP' => 'Informe um nome para as definições de importação, incluindo propriedades de importação, mapeamentos de campos e verificações de duplicidade. Definições de importação salvos podem ser usados em futuras importações de dados.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Durante o upload de seu arquivo de importação, algumas propriedades do arquivo podem ser automaticamente detectadas. Visualize e gerencie estas propriedades se necessário.<br>Nota: As definições fornecidas aqui são relativas a esta importação e não vão sobrescrever suas Definições de Usuário.',
	'LBL_IMPORT_FILE_SETTINGS' => 'Configurações de Arquivos de Importação',
    'LBL_VERIFY_DUPLCATES_HELP' => 'Encontre registros existentes no sistema que podem ser considerados duplicações dos registros que serão importados através de verificação de duplicados. Campos arrastados para a coluna "Verificar Dados" serão usados na verificação de duplicados. As linhas em seu arquivo de importação contendo dados similares serão listadas na próxima página, e você poderá selecionar que linhas quer importar.',
    'LBL_IMPORT_STARTED' => 'Importação Iniciada:',
    'LBL_IMPORT_FILE_SETTINGS' => 'Configurações de Arquivos de Importação',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'O registro não pode ser atualizado devido a problemas de permissão.',
    'LBL_DELETE_MAP_CONFIRMATION' => 'Você está certo que quer excluir este conjunto de definições de importação salvo?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'Se os dados do arquivo de importação foram exportados de uma das seguintes fontes, selecione de qual.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Selecione a fonte para aplicar automaticamente os mapeamentos personalizados para simplificar o processo de mapeamento (próximo passo).',
    'LBL_EXTERNAL_SOURCE_HELP' => 'Use esta opção para importar os dados diretamente de um aplicativo ou serviço externo, como o Gmail.',
    'LBL_EXAMPLE_FILE' => 'Download de Modelo de Arquivo de Importação',
    'LBL_CONFIRM_IMPORT' => 'Você selecionou para atualizar os registros durante o processo de importação. Atualizações feitas em registros existentes não podem ser desfeitas. No entanto, os registros criados durante o processo de importação podem ser desfeitos (excluidos), se desejar. Clique em Cancelar para selecionar para criar novos registros apenas, ou clique em OK para continuar.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Aviso: Você já selecionou um mapeamento personalizado para esta importação, você quer continuar?',
    'LBL_EXTERNAL_FIELD' => 'Campo Externo',
    'LBL_SAMPLE_URL_HELP' => 'Download de um arquivo de importação amostra contendo uma linha de cabeçalho dos campos módulo. O arquivo pode ser usado como um modelo para criar um arquivo de importação contendo os dados que você gostaria de importar.',
    'LBL_AUTO_DETECT_ERROR' => 'O campo delimitador e qualificador no arquivo de importação não pôde ser detectado. Por favor, verifique as configurações nas Propriedades do Arquivo de Importação.',
    'LBL_MIME_TYPE_ERROR_1' => 'O arquivo selecionado não parece conter uma lista delimitada. Por favor, verifique o tipo de arquivo. Recomendamos arquivos delimitados por vírgula (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'Para prosseguir com a importação do arquivo selecionado, clique em OK. Para carregar um novo arquivo, clique em Tentar Novamente.',
    'LBL_FIELD_DELIMETED_HELP' => 'O delimitador de campo especifica o caractere usado para separar as colunas de campo.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Selecione um arquivo contendo os dados que são separados por um delimitador, como um arquivo separado por vírgula ou por tabulação. Arquivos do tipo .csv são recomendados.',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Não foi possível recuperar adaptador de fonte, por favor, tente novamente mais tarde.',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Não foi possível recuperar alimentação externa, por favor, tente novamente mais tarde.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Diretório de cache de importação não é gravável.',
    'LBL_ADD_FIELD_HELP' => 'Use esta opção para adicionar um valor a um campo em todos os registros criados e/ou atualizados. Selecione o campo e então digite ou selecione um valor para esse campo na coluna Valor Padrão.',
    'LBL_MISSING_HEADER_ROW' => 'Nenhuma linha de cabeçalho encontrada.',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_SELECT_DS_INSTRUCTION' => 'Pronto para iniciar importação? Selecione a fonte de dados que você gostaria de importar.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Selecione um arquivo no seu computador que contém os dados que você gostaria de importar, ou faça o download do modelo para obter uma vantagem inicial sobre a criação do arquivo de importação.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Aqui está como as diversas linhas do arquivo de importação aparecem com as propriedades detectadas do arquivo. Se uma linha de cabeçalho foi detectada, ela é exibida na linha superior da tabela. Visualize as propriedades do arquivo de importação para fazer alterações nas propriedades detectadas e para definir propriedades adicionais. Atualizando as definições irá atualizar os dados que aparecem na tabela.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'A tabela abaixo contém todos os campos no módulo que podem ser mapeados para os dados no arquivo de importação. Se o arquivo contém uma linha de cabeçalho, as colunas no arquivo foram mapeadas para campos correspondentes. Verifique os mapeamentos para se certificar de que eles são o que você esperava, e faça alterações, se necessário. Para ajudar a verificar os mapeamentos, a Linha 1 mostra os dados no arquivo. Certifique-se de mapear todos os campos obrigatórios (marcados por um asterisco).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Para evitar a criação de registos duplicados, selecione qual dos campos mapeados você gostaria de usar para executar uma verificação de dados duplicados, enquanto os dados estão sendo importado. Valores de registros existentes nos campos selecionados serão confrontados com os dados no arquivo de importação. Se um dado correspondente for encontrado, as linhas no arquivo de importação contendo os dados serão exibidos juntamente com os resultados de importação (próxima página). Então você poderá selecionar quais dessas linhas para continuar importando.',
    'LBL_EXT_SOURCE_SIGN_IN' => 'Acessar',
    'LBL_EXT_SOURCE_SIGN_OUT' => 'Sair',
    'LBL_DUP_HELP' => 'Aqui estão as linhas do arquivo de importação que não foram importados porque contêm dados que coincidem com registros existentes baseado na verificação de duplicados. Os dados correspondentes estão realçados. Para voltar a importar estas linhas, faça o download da lista, realize as alterações e clique em <b>Importar Novamente</b>.',
    'LBL_DESELECT' => 'Desmarcar',
    'LBL_SUMMARY' => 'Sumário',
    'LBL_OK' => 'OK',
    'LBL_ERROR_HELP' => 'Aqui estão as linhas do arquivo de importação que não foram importados devido a erros. Para voltar a importar estas linhas, faça o download da lista, realize as alterações e clique em <b>Importar Novamente</b>.',
    'LBL_EXTERNAL_MAP_HELP' => 'A tabela abaixo contém os campos na fonte externa e os campos módulo para o qual eles são mapeados. Verifique os mapeamentos para se certificar de que eles são o que você esperava, e faça alterações, se necessário. Certifique-se de mapear para todos os campos obrigatórios (marcados por um asterisco).',
    'LBL_EXTERNAL_MAP_NOTE' => 'A importação irá tentar para contatos dentro de todos os grupos do Google.',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Os Nomes de Usuário dos usuários recém-criados serão por padrão os nomes completos do Contato do Google. Os Nomes de Usuário podem ser alterados após os registros de usuário serem criados.',
    'LBL_EXTERNAL_MAP_SUB_HELP' => 'Clique <b>Importar Agora</b> para iniciar a importação. Registros só serão criados para as entradas que incluem sobrenomes. Registros não serão criados para dados identificados como duplicados com base em nomes e/ou endereços de E-mail combinando com os registros existentes.',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Esta coluna mostra os campos na fonte externa contendo dados que serão usados ​​para criar novos registros.',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Indique um valor para ser usado para o campo no registro criado se o campo na fonte externa não contém dados.',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Para atribuir os novos registros para um usuário diferente de si mesmo, use a coluna Valor Padrão para selecionar um usuário diferente.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Para atribuir os novos registros para outras equipes diferentes de sua(s) equipe(s) padrão(ões), use a coluna Valor Padrão para selecionar equipes diferentes.',
    'LBL_SIGN_IN_HELP' => 'Para habilitar este serviço, por favor, acesse Contas Externas na aba Contas Externas de sua página de configurações do usuário.'
);
?>
