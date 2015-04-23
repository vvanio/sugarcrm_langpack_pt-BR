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
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): Vanio Vieira (vvanio@yahoo.com.br).
 ********************************************************************************/

$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'Os seguintes módulos foram instalados:',
	'DESC_MODULES_QUEUED'						=> 'Os seguintes módulos estão prontos para serem instalados:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Não foi possível determinar o Grupo',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Não foi possível determinar o Proprietário',
	'ERR_UW_CONFIG_WRITE'						=> 'Erro durante a atualização do arquivo config.php com informações da nova versão.',
	'ERR_UW_CONFIG'								=> 'Por favor, torne seu arquivo config.php gravável e recarregue esta página.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Diretório não gravável',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Arquivo não copiado',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Problema ao remover pacote ',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Arquivo não pode ser lido.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Arquivo não pode ser movido ou escrito para',
	'ERR_UW_FLAVOR_2'							=> 'Atualização para versão: ',
	'ERR_UW_FLAVOR'								=> 'Versão do Sistema SugarCRM: ',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log não pode ser criado ou escrito para. Por favor corrija as permissões do diretório SugarCRM.',
	'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload definioda para um valor maior que 1. Por favor modifique isto no seu arquivo php.ini e reinicie o servidor web.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM requer MySQL versão 4.1.2 ou superior newer. Versão encontrada: ',
	'ERR_UW_OCI8_VERSION'				        => 'Sua versão do Oracle não é suportada pelo Sugar. Você irá precisar instalar uma versão que é compatível com a aplicação. Por favor, consulte a Matriz de Compatibilidade em Notas da Release para verificar as versões do Oracle suportadas. Versão atual: ',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Por favor, especifique um arquivo e tente novamente!',
	'ERR_UW_NO_FILES'							=> 'Ocorreu um erro, nenhum arquivo encontrado para verificar.',
	'ERR_UW_NO_MANIFEST'						=> 'O arquivo .zip  não possui um arquivo manifest.php . Impossível prosseguir.',
	'ERR_UW_NO_VIEW'							=> 'Tela especificada inválida.',
	'ERR_UW_NO_VIEW2'							=> 'Tela não defininda. Por favor, vá para a página de Administração para navegar para esta página.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Não é um upload válido.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Não foi possível criar o diretório temp. Verifique as permissões de arquivo.',
	'ERR_UW_ONLY_PATCHES'						=> 'YVocê só pode carregar patches nesta página.',
	'ERR_UW_PREFLIGHT_ERRORS'					=> 'Erros encontrados durante a verificação de pré-vôo.',
	'ERR_UW_UPLOAD_ERR'							=> 'Ocorreu um erro durante o upload do arquivo, por favor tente novamente!<br>\n',
	'ERR_UW_VERSION'							=> 'Versão do Sistema SugarCRM: ',
	'ERR_UW_WRONG_TYPE'							=> 'Esra página não é para visualização ',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'O arquivo carregado excede a diretiva upload_max_filesize do php.ini.',
													2 => 'O arquivo carregado excede a diretiva MAX_FILE_SIZE que foi especificada no formulário HTML.',
													3 => 'O arquivo carregado foi carregado apenas parcialmente.',
													4 => 'Nenhum arquivo foi carregado.',
													5 => 'Erro desconhecido.',
													6 => 'Faltando o diretório temporário.',
													7 => 'Falha ao escrever o arquivo para o disco.',
													8 => 'Upload do arquivo cancelado pela extensão.',
),
	'LBL_BUTTON_BACK'							=> '< Voltar',
	'LBL_BUTTON_CANCEL'							=> 'Cancelar',
	'LBL_BUTTON_DELETE'							=> 'Excluir Pacote',
	'LBL_BUTTON_DONE'							=> 'Concluído',
	'LBL_BUTTON_EXIT'							=> 'Sair',
	'LBL_BUTTON_INSTALL'						=> 'Atualização Pré-vôo',
	'LBL_BUTTON_NEXT'							=> 'Próximo >',
	'LBL_BUTTON_RECHECK'						=> 'Verificar Novamente',
	'LBL_BUTTON_RESTART'						=> 'Reiniciar',

	'LBL_UPLOAD_UPGRADE'						=> 'Carregar Pacote de Atualização ',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Arquivo carregado não encontrado',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Arquivos de Backup',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Arquivos de backup deste upgrade pode ser encontrados em',
	'LBL_UW_BACKUP'								=> 'Arquivos de Backup',
	'LBL_UW_CANCEL_DESC'						=> 'TA atualização foi cancelada. Quaisquer arquivos temporários copiados e quaisquer arquivos de atualização que tenham sido carregados, foram excluídos.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Alterações de Esquema de Conjunto de Caracteres',
	'LBL_UW_CHECK_ALL'							=> 'Marcar Todos',
	'LBL_UW_CHECKLIST'							=> 'Passo da Atualização',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Backups dos Arquivos Sobrescritos estão no seguinte Diretório: \n",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Meslagem manual dos seguintes arquivos:\n",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Processo de Atualização: Mesclagem Manual de Arquivos',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Por favor, use o método que diff mais familiar para você mesclar esses arquivos. Até que isso seja concluído, sua instalação SugarCRM estará em um estado incerto, e a atualização incompleta.',
	'LBL_UW_COMPLETE'							=> 'Concluída',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Esta nova versão do Sugar contém um novo acordo de licença. Você gostaria de continuar?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Todos os Requerimentos do Sistema foram Satisfeitos',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'Configuração PHP: chamada po referência',
	'LBL_UW_COMPLIANCE_CURL'					=> 'Módulo cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'Módulo IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'Módulo MBStrings',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'Parâmetro MBStrings mbstring.func_overload',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'Configuração PHP: Limite de Memória',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'Configuração PHP: Stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Versão Mínima do MySQL',
    'LBL_UW_COMPLIANCE_DB'                      => 'Versão Mínima do Banco de Dados',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Localização do arquivo php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Versão Mínima do PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'Configuração PHP: Modo de Segurança',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Verificar Configurações do Servidor',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Configuração Detectada',
	'LBL_UW_COMPLIANCE_XML'						=> 'XML Parsing',
	'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Suporte para Zip',
	'LBL_UW_COMPLIANCE_PCRE_VERSION'			=> 'Versão PCRE',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Arquivos Copiados com Sucesso',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Alterações de Esquema de Tabelas Persobalizada',

	'LBL_UW_DB_CHOICE1'							=> 'O Assistente de Atualização executa o SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Execução Manual do SQL',
	'LBL_UW_DB_INSERT_FAILED'					=> 'Falha de INSERT - resultados comparados diferem',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Privilégios do Banco de Dados',
	'LBL_UW_DB_ISSUES'							=> 'Problemas com Banco de Dados',
	'LBL_UW_DB_METHOD'							=> 'Método de Atualização do Banco de Dados',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [table] ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [table] CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREATE TABLE [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETE FROM [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABLE [table] DROP COLUMN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Todos os Privilégios Disponíveis',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [table]',
	'LBL_UW_DB_PERMS'							=> 'Privilégios Necessários',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Os seguintes pacotes de atualização foram instalados:',
	'LBL_UW_END_DESC'							=> 'O Sistema foi atualizado.',
	'LBL_UW_END_DESC2'							=> 'Se você escolheu executar manualmente qualquer passo com uma mesclagem de arquivos ou execução de SQL, por favor faça isso agora. Seu sistema estará em estado instável até que esses passos sejam concluídos.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'A atualização foi concluída.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Clique Finalizado para sair do Assistente de Atualização.',
	'LBL_UW_END_LOGOUT'							=> 'Se você planeja aplicar outro pacote de atualização usando o Assistente de Atualização, faça logou e login novamente antes de prosseguir.',
	'LBL_UW_END_LOGOUT2'						=> 'Logout',
	'LBL_UW_REPAIR_INDEX'						=> 'Para prover performance de Banco de Dados, por favor execute o script <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Reparar Índices</a>.',

	'LBL_UW_FILE_DELETED'						=> " foi removido.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Grupo',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Permissões de Arquivo',
	'LBL_UW_FILE_ISSUES'						=> 'Problemas com Arquivos',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Arquivo Requer Diff manual',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Todos os Arquivos Graváveis</b>',
	'LBL_UW_FILE_OWNER'							=> 'Proprietário',
	'LBL_UW_FILE_PERMS'							=> 'Permissões',
	'LBL_UW_FILE_UPLOADED'						=> ' foi carregado',
	'LBL_UW_FILE'								=> 'Nome do Arquivo',
	'LBL_UW_FILES_QUEUED'						=> 'Os seguintes pacotes de atualização estão prontos para serem instalados:',
	'LBL_UW_FILES_REMOVED'						=> "Os seguintes arquivos serão removidos do sistema:<br>\n",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>Clique Próximo para carregar os pacotes de atualização.</b>",
	'LBL_UW_FROZEN'								=> 'Carregar um pacote antes de continuar.',
	'LBL_UW_HIDE_DETAILS'						=> 'Ocultar Detalhes',
	'LBL_UW_IN_PROGRESS'						=> 'Em Progresso',
	'LBL_UW_INCLUDING'							=> 'Incluindo',
	'LBL_UW_INCOMPLETE'							=> 'Incompleto',
	'LBL_UW_INSTALL'							=> 'Arquivo de INSTALAÇÂO',
	'LBL_UW_MANUAL_MERGE'						=> 'Mesclagem de Arquivo',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "O Módulo está pronto para ser desinstalado.  Clique \"Commit\" para prosseguir com a desinstalação.<br>\n",
	'LBL_UW_MODULE_READY'						=> "O Módulo está pronto para ser instalado.  Clique \"Commit\" para prosseguir com a instalação.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Nenhum registro de atualização encontrado.',
	'LBL_UW_NONE'								=> 'Nenhum',
	'LBL_UW_NOT_AVAILABLE'						=> 'Indisponível',
	'LBL_UW_OVERWRITE_DESC'						=> "Todos os arquivos modificados serão sobrescritos, incluindo qualquer personalização de código e alterações nos templates que você fez. Você está certo que quer prosseguir?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Sobrescrever todos os Arquivos',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Mesclagem Manual - Preservar Todos',
	'LBL_UW_OVERWRITE_FILES'					=> 'Método de Mesclagem',
	'LBL_UW_PATCH_READY'						=> 'O patch está pronto para prosseguir. Clique "Commit" para concluir o processo de atualização.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Nota: Layouts Personalizados encontrados.</h2><br />O(s) seguinte(s) arquivo(s) tem novos campos ou layoutes de tela modificados através do Studio. O patch que você está para instalar também contém modificações de arquivo(s). Para <u>cada arquivo</u> você pode:<br><ul><li>[<b>Padrão</b>] Manter sua versão deixando de marcar o checkbox. As modificações do parch serão ignoradas.</li>ou<li>Aceitar os arquivos atualizados selecionado o checkbox. Seus layouts deverão ser reaplicados através do Studio.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Criar Tarefa para Mesclagem Manual?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Verificação de Pré-vôo',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Diferenciado ',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Enviar E-mail para você com um lembrete da Mesclagem Manual?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Os arquivos listados abaixo foram modificados. Desmarque os itens que requerem mesclagem manual. <i>Quaiquers modificações de layout serão automaticamente desmarcadas; marque qualquer uma que possa ser sobrescrita.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Nenhuma Mesclagem manual de arquivos é necessária.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Não Necessários.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Arquivos auto-preservados:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Todos os teste de pré-vôo passaram.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Clique Próximo para copiar os arquivos atualizados para o sistema.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Nota: </b> O restanto do processo de atualização é obrigatório, e clicando em Próximo irá rquerir que você conlua o processo. Se você não quer prosseguir, clique no botão Cancelar.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Ativar todos os arquivos',

	'LBL_UW_REBUILD_TITLE'						=> 'Resultado da Reconstrução',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Modificações de Esquema',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Mostrar Configurações Detectadas',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Mostrar Permissões de Banco de Dados Faltantes',
	'LBL_UW_SHOW_DETAILS'						=> 'Mostrar Detalhes',
	'LBL_UW_SHOW_DIFFS'							=> 'Mostrar Arquivos que Requerem Mesclagem Manual',
	'LBL_UW_SHOW_NW_FILES'						=> 'Mostrar Arquivos com Permissões Ruins',
	'LBL_UW_SHOW_SCHEMA'						=> 'Mostrar Script de Mudança de Esquema',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Mostrar Consultas Ruins',
	'LBL_UW_SHOW'								=> 'Mostrar',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Arquivos Ignorados',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Ignorando Sobrescrita de Arquivos - Mesclagem Manual Selecionada.',
	'LBL_UW_SQL_RUN'							=> 'Marque quando o SQL foi executado manualmente',
	'LBL_UW_START_DESC'							=> 'Este assistente irá ajudar você no processo de atualização desta instância do SugarCRM.',
	'LBL_UW_START_DESC2'						=> 'Nota: Nós recomendamos que você faça um backup completo do Sugar, banco de dados e arquivos de sistema (todos os arquivos do diretórios SugarCRM), antes de prosseguir com a atualização de seu sistema de produção. Nós recomendamos fortemente que você faça um teste da atualização numa instância clone de seu sistema de produção primeiro.',
	'LBL_UW_START_DESC3'						=> 'Clique Próximo para realizar uma verificação em seu sistema para certificar que o sistema está pronto para a atualização. Esta verificação inclui: permissões de arquivo, privilégios de banco de dados, e configurações do servidor.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'O novo Assistente de Atualização agora irá retomar o processos de atualização. Por favor continue a sua atualização.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Bem vindo ao novo Assistente de Atualização',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Verificando agora, por favor aguarde. Isto pode levar mais de 30 segundos...',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Encontrando todos os arquivos pertinentes para verificar.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Arquivos',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Encontrados',

	'LBL_UW_TITLE_CANCEL'						=> 'Cancelar',
	'LBL_UW_TITLE_COMMIT'						=> 'Commit Atualização',
	'LBL_UW_TITLE_END'							=> 'Debrief',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Verificação Pré-vôo',
	'LBL_UW_TITLE_START'						=> 'Bem vindo',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Verificação do Sistema',
	'LBL_UW_TITLE_UPLOAD'						=> 'Pacote de Atualização',
	'LBL_UW_TITLE'								=> 'Assistente de Atualização',
	'LBL_UW_UNINSTALL'							=> 'Desinstalar',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Aceitar Licença',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Converter Licença',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Módulos Atualizados/Personalizados',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Os seguintes módulos foram detectados como personalizados e preservados.',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Os seguintes módulos foram detectados como personalizados pelo Studio e foram atualizados.',

	'LBL_UW_SUGAR_COMMUNITY_EDITION_LICENSE'    => 'O Sugar Community Edition 5.0 usa a GNU Affero General Public License versão 3. Esta atualização vai converter sua licensa para as novas licenças mostradas abaixo.',


	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Início em progresso...',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Verificação do Sistema em progresso...',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Verificação de Licenças em progresso...',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Verificação Pré-vôo em progresso...',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Cópia de Arquivos em progresso...',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Commit Atualização em progresso...',
    'LBL_UW_COMMIT_DESC'						=> 'Clique Próximo para executar scripts de atualização adicional..',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Scripts de Atualização em progresso...',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Sumário de Atualização em progresso...',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'em progresso     ',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Tempo decorrido',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Cancelamento de Atualização e Limpeza em progresso...',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'A Atualização pode levar um certo tempo',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Verificação do Upload em progresso...',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Carregando Pacote de Atualização ',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Você quer que o Sugar apaque o obsoleto esquema 451 (drop schema)?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Assitentes de Atualização apagando antigo esquema 451',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Apagar esquema manualmente após a atualização',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Método de Exclusão do Antigo Esquema',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Mostrar esquema antigo que pode ser apagado',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Consultas Ignoradas',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'PHP versão 5 ou superior é requerida.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Sua versão do PHP não é suportada pelo Sugar. Você vai precisar instalar uma versão que seja compatível. Por favor, consulte a Matriz de Compatibilidade nas Notas da Relesease para saber as versões suportadas.Sua versão é: ',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'A Compatibilidade com Versões Anteriores do PHP está ativa. Defina zend.ze1_compatibility_mode para Off para prosseguir.',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Ação',
    'LBL_ML_CANCEL'             => 'Cancelar',
    'LBL_ML_COMMIT'=>'Commit',
    'LBL_ML_DESCRIPTION' => 'Descrição',
    'LBL_ML_INSTALLED' => 'a de Instalação',
    'LBL_ML_NAME' => 'Nome',
    'LBL_ML_PUBLISHED' => 'Data de Publicação',
    'LBL_ML_TYPE' => 'Tipo',
    'LBL_ML_UNINSTALLABLE' => 'Desinstalável',
    'LBL_ML_VERSION' => 'Versão',
	'LBL_ML_INSTALL'=>'Instalar',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Tracker',
	'LBL_CURRENT_PHP_VERSION' => '(Sua versão atual do PHP é ',
	'LBL_RECOMMENDED_PHP_VERSION' => '. É recomendado o PHP versão 5.2.2 ou superior.)',
	'LBL_MODULE_NAME' => 'UpgradeWizard',
	'LBL_UPLOAD_SUCCESS' => 'Pacote de Atualização carregado com sucesso. Clique Próximo para realizar a verificação final.',
	'LBL_UW_TITLE_LAYOUTS' => 'Confirmar Layouts',
	'LBL_LAYOUT_MODULE_TITLE' => 'Layouts',
	'LBL_LAYOUT_MERGE_DESC' => 'Há novos campos disponíveis que foram adicionados com parte desta atualização e que podem ser adicionados automaticamente para os layouts dos módulos. Para aprender mais a respeito deste novos campos, por favor leia as Notas da Release para a versão que você está atualizando.<br><br>Se você não quer adicionar os novos campos, por favor desmarque o módulo, e seus layouts personalizados permanecerão como estão. Os campos estrão disponíveis no Studio após a atualização.<br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'Clique Próximo para confirmar as alterações e para concluir a atualização.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Clique Próximo para concluir a atualização.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Confirmar Layouts',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Confirmar Layout Resultantes',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Os seguintes layouts foram mesclados com sucesso:',
	'LBL_SELECT_FILE' => 'Selecionar Arquivo:',
    'ERROR_VERSION_INCOMPATIBLE' => 'O arquivo carregado não é compatível com esta versão do sistema: ',
    'ERROR_FLAVOR_INCOMPATIBLE'  => 'O arquivo carregado não é compatível com esta versão (Community Edition, Professional, ou Enterprise) do Sugar: ',
	'LBL_LANGPACKS' => 'Pacotes de Idiomas' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Carregador de Módulos' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Pacotes de Atualização' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Temas' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Atualização' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Processando' /*for 508 compliance fix*/,
);
