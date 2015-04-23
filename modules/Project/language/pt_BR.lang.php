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
	'LBL_MODULE_NAME' => 'Projeto',
	'LBL_MODULE_TITLE' => 'Projetos: Tela Principal',
	'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Projetos',
    'LBL_LIST_FORM_TITLE' => 'Listar Projetos',
    'LBL_HISTORY_TITLE' => 'Histórico',

	'LBL_ID' => 'Id:',
	'LBL_DATE_ENTERED' => 'Data de Criação:',
	'LBL_DATE_MODIFIED' => 'Data de Modificação:',
	'LBL_ASSIGNED_USER_ID' => 'Atribuído para:',
    'LBL_ASSIGNED_USER_NAME' => 'Atribuído para:',
	'LBL_MODIFIED_USER_ID' => 'Modificado por:',
	'LBL_CREATED_BY' => 'Criado por:',
	'LBL_TEAM_ID' => 'Equipe:',
	'LBL_NAME' => 'Nome:',
    'LBL_PDF_PROJECT_NAME' => 'Nome do Projeto:',
	'LBL_DESCRIPTION' => 'Descrição:',
	'LBL_DELETED' => 'Excluído:',
    'LBL_DATE' => 'Date:',
	'LBL_DATE_START' => 'Data de Início:',
	'LBL_DATE_END' => 'Data de Término:',
	'LBL_PRIORITY' => 'Priority:',
    'LBL_STATUS' => 'Status:',
    'LBL_MY_PROJECTS' => 'Meus Projetos',
    'LBL_MY_PROJECT_TASKS' => 'Minhas Tarefas de Projeto',
    
	'LBL_TOTAL_ESTIMATED_EFFORT' => 'Esforço Total Estimado (hs):',
	'LBL_TOTAL_ACTUAL_EFFORT' => 'Esforço Total Atual (hs):',

	'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_DAYS' => 'dias',
	'LBL_LIST_ASSIGNED_USER_ID' => 'Atribuído para',
	'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Esforço Total Estimado (hs)',
	'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Esforço Total Atual (hs)',
    'LBL_LIST_UPCOMING_TASKS' => 'Próximas Tarefas (1 Semana)',
    'LBL_LIST_OVERDUE_TASKS' => 'Tarefas Vencidas',
    'LBL_LIST_OPEN_CASES' => 'Ocorrências Abertas',
    'LBL_LIST_END_DATE' => 'Data de Término',
    'LBL_LIST_TEAM_ID' => 'Equipe',
    

	'LBL_PROJECT_SUBPANEL_TITLE' => 'Projetos',
	'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tarefas de Projeto',
	'LBL_CONTACT_SUBPANEL_TITLE' => 'Contatos',
	'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Contas',
	'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunidades',
	'LBL_QUOTE_SUBPANEL_TITLE' => 'Cotações',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Novo Projeto',

	'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Are you sure you want to remove this contact from this project?',

	'LNK_NEW_PROJECT'	=> 'Criar Projeto',
	'LNK_PROJECT_LIST'	=> 'Visualizar Lista de Projetos',
	'LNK_NEW_PROJECT_TASK'	=> 'Criar Tarefa de Projeto',
	'LNK_PROJECT_TASK_LIST'	=> 'Visualizar Tarefas de Projeto',
	
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projetos',
	'LBL_ACTIVITIES_TITLE'=>'Atividades',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Atividades',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Histórico',
	'LBL_QUICK_NEW_PROJECT'	=> 'Novo Projeto',
	
	'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tarefas de Projeto',
	'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
	'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Contas',
	'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produtos',
    

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nome da Tarefa',
    'LBL_DURATION' => 'Duração',
    'LBL_ACTUAL_DURATION' => 'Duração Atual',
    'LBL_START' => 'Início',
    'LBL_FINISH' => 'Término',
    'LBL_PREDECESSORS' => 'Predecessoras',
    'LBL_PERCENT_COMPLETE' => '% Concluído',
    'LBL_MORE'  => 'Mais...',

    'LBL_PERCENT_BUSY' => '% Ocupado',
    'LBL_TASK_ID_WIDGET' => 'id',
    'LBL_TASK_NAME_WIDGET' => 'descrição',
    'LBL_DURATION_WIDGET' => 'duração',
    'LBL_START_WIDGET' => 'date_start',
    'LBL_FINISH_WIDGET' => 'date_finish',
    'LBL_PREDECESSORS_WIDGET' => 'predecessors_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'percent_complete',
    'LBL_EDIT_PROJECT_TASKS_TITLE'=> 'Editar Tarefas de Projeto',
    
    'LBL_OPPORTUNITIES' => 'Oportunidades',
	'LBL_LAST_WEEK' => 'Anterior',
	'LBL_NEXT_WEEK' => 'Próxima',
	'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Recursos do Projeto',
	'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Tarefas de Projeto',
	'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Feriados',
	'LBL_PROJECT_INFORMATION' => 'Visão Geral do Projeto',
	'LBL_EDITLAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
	'LBL_INSERTROWS' => 'Inserir Linhas' /*for 508 compliance fix*/,
	'LBL_PROJECT_INFORMATION' => 'Visão Geral',

);
?>
