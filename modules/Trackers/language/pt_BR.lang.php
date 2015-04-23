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

$mod_strings = array (
		  //Labels for methods in the RastreadorReporter.php file that are shown in RastreadorDashlet
		  'ShowActiveUsers'      => 'Mostrar usuários Ativos',
		  'ShowLastModifiedRecords' => 'Últimos 10 Registros Modificados',
		  'ShowTopUser' => 'Top User',
		  'ShowMyModuleUsage' => 'Minhas Utilizações de Módulos',
		  'ShowMyWeeklyActivities' => 'Minha Atividade Semanal',
		  'ShowTop3ModulesUsed' => 'Meus Top 3 Módulos Utilizados',
		  'ShowLoggedInUserCount' => 'Contagem de Usuários Ativos',
		  'ShowMyCumulativeLoggedInTime' => 'Meu Tempo de Login Acumulado (Esta Semana)',
		  'ShowUsersCumulativeLoggedInTime' => 'Tempo de Login Acumulado dos Usuários (Esta Semana)',
		  
		  //Column header mapping
		  'action' => 'Ação',
		  'active_users' => 'Contagem de usuários Ativos',
		  'date_modified' => 'Data da Última Ação',
		  'different_modules_accessed' => 'Número de Módulos Acessados',
		  'first_name' => 'Nome',
		  'item_id' => 'ID',
		  'item_summary' => 'Nome',
		  'last_action' => 'Data/Hora da Última Ação',
		  'last_name' => 'Sobrenome',
		  'module_name' => 'Nome do Módulo',
		  'records_modified' => 'Total de Registros Modificados',
		  'top_module' => 'Módulos Mais Acessados',
		  'total_count' => 'Total de Visualizações de Páginas',
		  'total_login_time' => 'Tempo (hh:mm:ss)',
		  'user_name' => 'Nome de Usuário',
		  'users' => 'Usuários',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'Ativo',
		  'LBL_MODULE_NAME_TITLE' => 'Rastreadores',
		  'LBL_MODULE_NAME' => 'Rastreadores',
		  'LBL_TRACKER_SETTINGS' => 'Configurações do Rastreador',
		  'LBL_TRACKER_QUERIES_DESC' => 'Rastreador de Consultas',
		  'LBL_TRACKER_QUERIES_HELP' => 'Rastrear instruções SQL quando "Registar as consultas lentas" estiver ativo e o tempo de execução da consulta exceder o valor "Limite de  tempo para consultas lentas".',
		  'LBL_TRACKER_PERF_DESC' => 'Rastreador de Performance',
		  'LBL_TRACKER_PERF_HELP' => 'Rastrear "idas e vindas" do banco de dados, arquivos acessados e uso de memória.',
		  'LBL_TRACKER_SESSIONS_DESC' => 'Rastreador de Sessões',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Rastrear usuários ativos e informações de sessão dos usuários.',
		  'LBL_TRACKER_DESC' => 'Rastreador de Ações',
		  'LBL_TRACKER_HELP' => 'Rastrear visualizações de páginas dos usuários (módulos e registros acessados) e registros salvos.',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Número de Dias dos dados de Rastreamento para armazenar quando o Agendador podar as tabelas.',
		  'LBL_TRACKER_PRUNE_RANGE' => 'Número de Dias',
);
?>
