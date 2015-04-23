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
 
$mod_strings = array (
'LBL_NAME' => 'Nome do Job',
'LBL_EXECUTE_TIME'			=> 'Horário de Execução',
'LBL_SCHEDULER_ID' 	=> 'Agendador',
'LBL_STATUS' 	=> 'Estado do Job',
'LBL_RESOLUTION' 	=> 'Resultado',
'LBL_MESSAGE' 	=> 'Mensagens',
'LBL_DATA' 	=> 'Dados do Job',
'LBL_REQUEUE' 	=> 'Tentar novamente em caso de falha',
'LBL_RETRY_COUNT' 	=> 'Número máximo de novas tentativas',
'LBL_FAIL_COUNT' 	=> 'Falhas',
'LBL_INTERVAL' 	=> 'Intervalo mínimo entre tentativas',
'LBL_CLIENT' 	=> 'Possuir cliente',
'LBL_PERCENT'	=> 'Percentual concluído',
// Errors
'ERR_CALL' 	=> "Não foi possível chamar a função: %s",
'ERR_CURL' => "Nenhum CURL - não foi possível executar a URL dos jobs.",
'ERR_FAILED' => "Falha não esperada, por favor verifique os logs do PHP e sugarcrm.log.",
'ERR_PHP' => "%s [%d]: %s em %s na linha %d",
'ERR_NOUSER' => "Nenhum ID de Usuário especificado para o job.",
'ERR_NOSUCHUSER' => "ID do Usuário %s não encontrado.",
'ERR_JOBTYPE' 	=> "Tipo de job desconhecido: %s",
'ERR_TIMEOUT' => "Falha forçada no tempo limite (timeout).",
'ERR_JOB_FAILED_VERBOSE' => 'O Job %1$s (%2$s) falhou na execução do CRON.',
);
