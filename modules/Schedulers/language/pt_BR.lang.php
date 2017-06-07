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
 
global $sugar_config;

$mod_strings = array (
// OOTB Agendador Job Names:
'LBL_OOTB_WORKFLOW'		=> 'Processar Tarefas de Workflow',
'LBL_OOTB_REPORTS'		=> 'Executar Tarefas Agendadas de Geração de Relatórios',
'LBL_OOTB_IE'			=> 'Verificar Caixas de E-mail de Entrada',
'LBL_OOTB_BOUNCE'		=> 'Executar Processo Noturno de E-mails de Campanhas Devolvidos',
'LBL_OOTB_CAMPAIGN'		=> 'Executar Processo Noturno de Campanhas de E-mail em Masa',
'LBL_OOTB_PRUNE'		=> 'Aparar Banco de Dados no 1º dia do Mês',
'LBL_OOTB_TRACKER'		=> 'Aparar Tabelas de Tracker',
'LBL_OOTB_SUGARFEEDS'   => 'Aparar Tabelas de SugarFeeds',
'LBL_UPDATE_TRACKER_SESSIONS' => 'Atualizar Tabela tracker_sessions',
'LBL_OOTB_SEND_EMAIL_REMINDERS'	=> 'Executar Notificações de Lembrete por E-mail',
'LBL_OOTB_CLEANUP_QUEUE' => 'Limpar Filas de Jobs',
'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Remoção de documentos do Sistema de Arquivos',

// List Labels
'LBL_LIST_JOB_INTERVAL' => 'Intervalo:',
'LBL_LIST_LIST_ORDER' => 'Agendadores:',
'LBL_LIST_NAME' => 'Agendador:',
'LBL_LIST_RANGE' => 'Série:',
'LBL_LIST_REMOVE' => 'Remover:',
'LBL_LIST_STATUS' => 'Estado:',
'LBL_LIST_TITLE' => 'Lista de Agendamentos:',
'LBL_LIST_EXECUTE_TIME' => 'Irá Executar em:',
// human readable:
'LBL_SUN'		=> 'Domingo',
'LBL_MON'		=> 'Segunda',
'LBL_TUE'		=> 'Terça',
'LBL_WED'		=> 'Quarta',
'LBL_THU'		=> 'Quinta',
'LBL_FRI'		=> 'Sexta',
'LBL_SAT'		=> 'Sábado',
'LBL_ALL'		=> 'Todos os Dias',
'LBL_EVERY_DAY'	=> 'Todos os Dias ',
'LBL_AT_THE'	=> 'às ',
'LBL_EVERY'		=> 'Todos ',
'LBL_FROM'		=> 'De ',
'LBL_ON_THE'	=> 'No(a) ',
'LBL_RANGE'		=> ' até ',
'LBL_AT' 		=> ' às ',
'LBL_IN'		=> ' em ',
'LBL_AND'		=> ' e ',
'LBL_MINUTES'	=> ' minutos ',
'LBL_HOUR'		=> ' horas',
'LBL_HOUR_SING'	=> ' hora',
'LBL_MONTH'		=> ' mês',
'LBL_OFTEN'		=> ' Tão frequentemente quanto possível.',
'LBL_MIN_MARK'	=> ' na marca de minuto',


// crontabs
'LBL_MINS' => 'min',
'LBL_HOURS' => 'hs',
'LBL_DAY_OF_MONTH' => 'data',
'LBL_MONTHS' => 'mêses',
'LBL_DAY_OF_WEEK' => 'dia',
'LBL_CRONTAB_EXAMPLES' => 'A lista acima usa a notação crontab padrão.',
'LBL_CRONTAB_SERVER_TIME_PRE' =>  'As especificações do cron são executadas com base no fuso horário do servidor (',
'LBL_CRONTAB_SERVER_TIME_POST' => '). Por favor, especifique o agendamento do horário de execução observando isto.',
// Labels
'LBL_ALWAYS' => 'Sempre',
'LBL_CATCH_UP' => 'Executar se Falhar',
'LBL_CATCH_UP_WARNING' => 'Desmarque isto se este job deomorar para ser executado.',
'LBL_DATE_TIME_END' => 'Data e Hora de Término',
'LBL_DATE_TIME_START' => 'Data e Hora de Início',
'LBL_INTERVAL' => 'Intervalo',
'LBL_JOB' => 'Job',
'LBL_JOB_URL' => 'URL do Job',
'LBL_LAST_RUN' => 'Última Execução com Sucesso',
'LBL_MODULE_NAME' => 'Agendador',
'LBL_MODULE_TITLE' => 'Agendadores',
'LBL_NAME' => 'Nome do Job',
'LBL_NEVER' => 'Nunca',
'LBL_NEW_FORM_TITLE' => 'Novo Agendamento',
'LBL_PERENNIAL' => 'permanente',
'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Agendadores',
'LBL_SCHEDULER' => 'Agendador:',
'LBL_STATUS' => 'Estado',
'LBL_TIME_FROM' => 'Ativo a partir de',
'LBL_TIME_TO' => 'Ativo até',
'LBL_WARN_CURL_TITLE' => 'Aviso de cURL:',
'LBL_WARN_CURL' => 'Aviso:',
'LBL_WARN_NO_CURL' => 'Este sistema não tem a biblioteca cURL ativa/compilada como um módulo PHP (--with-curl=/path/to/curl_library). Por favor, contate seu Administrador para resolver este problema. Sem a funcionalidade cURL, o Agendador não pode executar suas tarefas.',
'LBL_BASIC_OPTIONS' => 'Configuração Básica',
'LBL_ADV_OPTIONS'		=> 'Opções Avançadas',
'LBL_TOGGLE_ADV' => 'Mostrar Opções Avançadas',
'LBL_TOGGLE_BASIC' => 'Mostrar Opções Básicas',
// Links
'LNK_LIST_SCHEDULER' => 'Agendadores',
'LNK_NEW_SCHEDULER' => 'Criar Agendador',
'LNK_LIST_SCHEDULED' => 'Jobs Agendados',
// Messages
'SOCK_GREETING' => "\nEsta é a interface para o Agendador de Serviços Sugar. \n[ Comandos do daemon disponíveis: start|restart|shutdown|status ]\nPara finalizar, digite 'quit'.  Para desligar o serviço 'shutdown'.\n",
'ERR_DELETE_RECORD' => 'Você deve especificar um número de registro para excluir o agendamento.',
'ERR_CRON_SYNTAX' => 'Sintaxe Cron Inválida.',
'NTC_DELETE_CONFIRMATION' => 'Você está certo que quer excluir este registro?',
'NTC_STATUS' => 'Defina o Estado para Inativo para remover este agendamento das listas Dropdown do Agendador.',
'NTC_LIST_ORDER' => 'Defina a ordem que este agendamento irá aparecer nas listas Dropdown do Agendador.',
'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Para Configurar o Agendador (Windows)',
'LBL_CRON_INSTRUCTIONS_LINUX' => 'Para Configurar o Crontab',
'LBL_CRON_LINUX_DESC' => 'Nota: Para executar os Agendadores, adicione a linha a seguir ao arquivo crontab: ',
'LBL_CRON_WINDOWS_DESC' => 'Nota: Para executar os Agendadores, crie um arquivo de lote (batch) para executar usando as Tarefas Agendadas do Windows. O arquivo de lote deve incluir os seguintes comandos: ',
'LBL_NO_PHP_CLI' => 'Se seu servidor não tem o binário PHP disponível, você pode usar o <b>wget</b> ou o <b>curl</b> para executar os seus Jobs.<br><br>Para wget:<b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose '.$sugar_config['site_url'].'/cron.php > /dev/null 2>&1</b><br><br>para curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent '.$sugar_config['site_url'].'/cron.php > /dev/null 2>&1</b>',
// Subpanels
'LBL_JOBS_SUBPANEL_TITLE'	=> 'Registro de Jobs (Log)',
'LBL_EXECUTE_TIME'			=> 'Horário de Execução',

//jobstrings
'LBL_REFRESHJOBS' => 'Atualizar Jobs',
'LBL_POLLMONITOREDINBOXES' => 'Verificar Contas de E-mail de Entrada',
'LBL_PERFORMFULLFTSINDEX' => 'Indexar Sistema de Pesquisa de Texto Completo (Full-text Search)',

'LBL_RUNMASSEMAILCAMPAIGN' => 'Executar Processo Noturno de Campanhas de E-mail em Massa',
'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Executar Processo Noturno de E-mails de Campanhas Devolvidos',
'LBL_PRUNEDATABASE' => 'Aparar Banco de Dados no 1º dia do Mês',
'LBL_TRIMTRACKER' => 'Aparar Tabelas de Tracker',
'LBL_TRIMSUGARFEEDS'   => 'Aparar Tabelas de SugarFeeds',
'LBL_SENDEMAILREMINDERS'=> 'Executar Notificações de Lembrete por E-mail',
'LBL_CLEANJOBQUEUE' => 'Limpar Filas de Jobs',
'LBL_REMOVEDOCUMENTSFROMFS' => 'Remoção de documentos do Sistema de Arquivos',
);
?>
