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


	'LBL_RE'					=> 'RE:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Login ou Senha Incorreta',
	'ERR_BODY_TOO_LONG'		=> '\rCorpo de Texto muito longo para capturar E-mail COMPLETO. Ajustado.',
	'ERR_INI_ZLIB'			=> 'Não foi possível desativar a Compressão Zlib compression temporariamente.  "Definições de Teste" podem falhar.',
	'ERR_MAILBOX_FAIL'		=> 'Não foi possível recuperar nenhuma conta de E-mail.',
	'ERR_NO_IMAP'			=> 'Nenhuma biblioteca IMAP encontrada. Por favor resolva isto antes de prosseguir com o E-mail Recebido.',
	'ERR_NO_OPTS_SAVED'		=> 'Nenhum "optimums" foi salvo com sua conta de E-mail Recebido. Por favor verifique suas definições.',
	'ERR_TEST_MAILBOX'		=> 'Por favor verifique as suas definições e tente novamente.',

	'LBL_APPLY_OPTIMUMS'	=> 'Aplicar "Optimums"',
	'LBL_ASSIGN_TO_USER'	=> 'Atribuir para',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Opções de Auto-Resposta',
	'LBL_AUTOREPLY'			=> 'Modelo de Auto-Resposta',
	'LBL_AUTOREPLY_HELP'	=> 'Selecione uma resposta automática para notificar aos remetentes de E-mail que suas respostas foram recebidas.',
	'LBL_BASIC'				=> 'Informações da Conta de E-mail',
	'LBL_CASE_MACRO'		=> 'Macro de Ocorrência',
	'LBL_CASE_MACRO_DESC'	=> 'Ajustar a macro que será analisada e utilizada para linkar e-mails importados a uma Ocorrência.',
	'LBL_CASE_MACRO_DESC2'	=> 'Defina isto para qualquer valor, mas preserver o <b>"%1"</b>.',
	'LBL_CERT_DESC'			=> 'Forçar validação do Certificado de Segurança do servidor de E-mail - não usar se for auto-assinado.',
	'LBL_CERT'				=> 'Validar Certificado',
	'LBL_CLOSE_POPUP'		=> 'Fechar Janela',
	'LBL_CREATE_NEW_GROUP'	=> '--Criar Grupo ao Salvar--',
	'LBL_CREATE_TEMPLATE'	=> 'Criar',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Subscrver Pastas',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Padrão: ',
	'LBL_DEFAULT_FROM_NAME'	=> 'Padrão: ',
	'LBL_DELETE_SEEN'		=> 'Excluir E-mails Lidos após Importação',
	'LBL_EDIT_TEMPLATE'		=> 'Editar',
	'LBL_EMAIL_OPTIONS'		=> 'Opções de Tratamento de E-mail',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opções de Tratamento de Devoluções',
	'LBL_FILTER_DOMAIN_DESC'=> 'Especificar um domínio para o qual não enviar respostas automáticas.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Selecionar para criar registros de E-mail automaticamente no sistema para todos os E-mails Recebidos.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Para a opção Criar Ocorrência, uma Pasta de Grupo deve ser selecionada.',
	'LBL_FILTER_DOMAIN'		=> 'Nenhuma Auto-resposta para estes domínios',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '<br>Procurando variáveis "optimum" de conexão.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Procurar Configuração "Optimum"',
	'LBL_FIND_SSL_WARN'		=> '<br>Testar SSL pode levar muito tempo. Por favor, seja paciente<br>',
	'LBL_FORCE_DESC'		=> 'Alguns servidores IMAP e POP3 exigem chaveadores especiais. Marque para forçar o chaveador negativo para conetar (exemplo: /notls).',
	'LBL_FORCE'				=> 'Forçar Negativo',
	'LBL_FOUND_MAILBOXES'	=> 'Encontradas as seguintes pastas utilizáveis.<br>Clique em uma para escolhê-la:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br>Encontradas configurações "optimum".  Pressione o botão abaixo para aplicar as configurações para sua conta de E-mail.',
	'LBL_FROM_ADDR'			=> 'Endereço "De"',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "O endereço de E-mail fornecido aqui pode não aparecer na seção endereço &quot;De&quot; do E-mail enviado devido a restrições impostas pelo provedor do serviço de E-mail. Nestes casos, o endereço de E-mail definido no servidor de envio de E-mail será utilizado.",
	'LBL_FROM_NAME_ADDR'	=> 'De Nome/E-mail',
	'LBL_FROM_NAME'			=> 'Nome "De"',
	'LBL_GROUP_QUEUE'		=> 'Atribuir para Grupo',
    'LBL_HOME'              => 'Prinicpal',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Uso da Conta de E-mail',
	'LBL_LIST_NAME'			=> 'Nome:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Tipo',
	'LBL_LIST_SERVER_URL'	=> 'Servidor de E-mail',
	'LBL_LIST_STATUS'		=> 'Estado',
	'LBL_LOGIN'				=> 'Nome de Usuário',
	'LBL_MAILBOX_DEFAULT'	=> 'CAIXA DE ENTRADA',
	'LBL_MAILBOX_SSL_DESC'	=> 'Usar SSL quando conectar. Se isto não funcionar, verifique se sua instalação do PHP inclui "--with-imap-ssl" na configuração.',
	'LBL_MAILBOX_SSL'		=> 'Usar SSL',
	'LBL_MAILBOX_TYPE'		=> 'Ações Possíveis',
	'LBL_DISTRIBUTION_METHOD' => 'Método de Distribuição',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Novo Modelo de Auto-resposta para Ocorrência',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Selecione uma resposta automática para notificar os remetentes de E-mail que uma ocorrência foi criada. O e-mail contém o número da ocorrência na linha de Assunto, conforme a definição da Macro das Ocorrências. Esta resposta só é enviada quando o primeiro email for recebido pelo destinatário.',
	'LBL_MAILBOX'			=> 'Pastas Monitoradas',
	'LBL_TRASH_FOLDER'		=> 'Pasta Lixeira',
	'LBL_GET_TRASH_FOLDER'	=> 'Obter Pasta Lixeira',
	'LBL_SENT_FOLDER'		=> 'Pasta Enviados',
	'LBL_GET_SENT_FOLDER'	=> 'Obter Pasta Enviados',
	'LBL_SELECT'				=> 'Selecionar',
	'LBL_MARK_READ_DESC'	=> 'Marcar mensagens lidas no servidor de E-mail na Importação; não excluir.',
	'LBL_MARK_READ_NO'		=> 'E-mail marcado para exclusão após a importação',
	'LBL_MARK_READ_YES'		=> 'E-mail deixado no servidor após a importação',
	'LBL_MARK_READ'			=> 'Deixar Mensagens no Servidor',
	'LBL_MAX_AUTO_REPLIES'	=> 'Múmero de Auto-respostas',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Defina o número máximo de auto-respostas enviadas para um único endereço de E-mail num período de 24 horas.',
	'LBL_PERSONAL_MODULE_NAME' => 'Conta de E-mail Pessoal',
	'LBL_CREATE_CASE'      => 'Criar Ocorrência de E-mail',
	'LBL_CREATE_CASE_HELP'  => 'Selecione para criar automaticamente registros ocorrência no sistema a partir de E-mails Recebidos.',
	'LBL_MODULE_NAME'		=> 'Conta de E-mail de Grupo',
	'LBL_BOUNCE_MODULE_NAME' => 'Caixa de Correio de Tratamento de Devoluções',
	'LBL_MODULE_TITLE'		=> 'E-mail de Entrada',
	'LBL_NAME'				=> 'Nome',
    'LBL_NONE'              => 'Nenhum',
	'LBL_NO_OPTIMUMS'		=> 'Não foi possível encontrar "optimums". Por favor, verifique suas definições e tente novamente.',
	'LBL_ONLY_SINCE_DESC'	=> 'Quando a utilizar POP3, o PHP não pode filtrar mensagens Novas/Não Lidas. Esta opção permite solicitar para verificar por mensagens desde a última vez que a caixa de correio foi acessada. Isto melhora significativamente a performance se o seu servidor de E-mail não suporta IMAP.',
	'LBL_ONLY_SINCE_NO'		=> 'Não. Verificar todos os E-mails no servidor de mail.',
	'LBL_ONLY_SINCE_YES'	=> 'Sim.',
	'LBL_ONLY_SINCE'		=> 'Importar Somente a Partir da Última Verificação:',
	'LBL_OUTBOUND_SERVER'	=> 'Servidor de E-mail de Saída',
	'LBL_PASSWORD_CHECK'	=> 'Confirmação de Senha',
	'LBL_PASSWORD'			=> 'Senha',
	'LBL_POP3_SUCCESS'		=> 'Seu testes de conexão POP3 obteve sucesso.',
	'LBL_POPUP_FAILURE'		=> 'Teste de conexão falhou. O erro é mostrado a seguir.',
	'LBL_POPUP_SUCCESS'		=> 'Teste de conexão com sucesso. Suas definições de E-mail estão funcionando.',
	'LBL_POPUP_TITLE'		=> 'Testar Definições',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Obtendo Lista de Pastas',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Selecionar Pasta(s) Subscrita(s)',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Selecionar Pasta Lixeira',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Selecionar Pasta Enviados',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'A(s) seguinte(s) pasta(s) %s não existem ou foram excluídas do servidor.',
	'LBL_PORT'				=> 'Porta do Servidor de E-mail',
	'LBL_QUEUE'				=> 'Fila da Conta de Correio',
	'LBL_REPLY_NAME_ADDR'	=> 'Responder Nome/E-mail',
	'LBL_REPLY_TO_NAME'		=> '"Responder para" Nome',
	'LBL_REPLY_TO_ADDR'		=> '"Responder para" Endereço de E-mail',
	'LBL_SAME_AS_ABOVE'		=> 'Usando Nome/E-mail "De"',
	'LBL_SAVE_RAW'			=> 'Salvar Fonte Base',
	'LBL_SAVE_RAW_DESC_1'	=> 'Selecione "Sim" se vocês gostaria de preservar a fonte base de cada E-mail importado.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Anexos grandes podem causar falhas com bancos de dados conservadores ou incorretamente configurados.',
	'LBL_SERVER_OPTIONS'	=> 'Configurações Avançadas',
	'LBL_SERVER_TYPE'		=> 'Protocolo do Servidor de E-mail',
	'LBL_SERVER_URL'		=> 'Endereço do Servidor de E-mail',
	'LBL_SSL_DESC'			=> 'Se seu servidor de E-mail suporta conexões seguras por socket, ativar isto forçará conexões SSL para importar E-mails.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'A equipe selecionada tem acesso a uma conta de E-mail.',
	'LBL_SSL'				=> 'Usar SSL',
	'LBL_STATUS'			=> 'Estado',
	'LBL_SYSTEM_DEFAULT'	=> 'Padrão do Sistema',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Testar',
	'LBL_TEST_SETTINGS'		=> 'Testar Configurações',
	'LBL_TEST_SUCCESSFUL'	=> 'Conexão concluída com sucesso.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Um momento por favor...',
	'LBL_TLS_DESC'			=> 'Usar Transport Layer Security (TLS) quando conectar ao servidor de E-mail - use isto somente se seu servidor de E-mail suporta este protocolo.',
	'LBL_TLS'				=> 'Usar TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'E-mail de Entrada Desativado',
	'LBL_WARN_IMAP'			=> 'Avisos:',
	'LBL_WARN_NO_IMAP'		=> 'o E-mail de Entrada <b>não pode</b> funcionar sem as bibliotecas IMAP c-client ativadas/compiladas no módulo PHP. Por favor, contate seu Administrador para resolver este problema.',

	'LNK_CREATE_GROUP'		=> 'Criar Novo Grupo',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Nova Conta de E-mail de Grupo',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nova Conta de Tratamento de Devoluções',
	'LNK_LIST_MAILBOXES'	=> 'Todas as Contas de E-mail',
	'LNK_LIST_QUEUES'		=> 'Todas as Filas',
	'LNK_LIST_SCHEDULER'	=> 'Agendadores',
	'LNK_LIST_TEST_IMPORT'	=> 'Testar Importação de E-mails',
	'LNK_NEW_QUEUES'		=> 'Criar Nova Fila',
	'LNK_SEED_QUEUES'		=> 'Alimentar Filas Provenientes de Equipes',
	'LBL_IS_PERSONAL'       => 'Conta de E-mail Pessoal',
	'LBL_GROUPFOLDER_ID'	=> 'ID da Pasta de grupo',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Atribuir para Pasta de Grupo',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Permitir aos Usuários enviar E-mails usando o "De" (Nome e Endereço) como o endereço para resposta.',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Quando esta opção for selecionada, o nome "De" e endereço de E-mail "De" associados a esta conta de E-mail do grupo vão aparecer como uma opção para o campo "De" quando se redige E-mails para usuários que têm acesso à conta de E-mail do grupo.',
    'LBL_STATUS_ACTIVE'     => 'Ativo',
    'LBL_STATUS_INACTIVE'   => 'Inativo',
    'LBL_IS_PERSONAL' => 'pessoal',
    'LBL_IS_GROUP' => 'grupo',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importar E-mails Automaticamente',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Aviso: você está modificando suas definições de importação automática o que pode resultar em perda de dados.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Aviso: Importação automática deve ser ativada quando estiver criando ocorrências automaticamente.',
	'LBL_EDIT_LAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
);
?>
