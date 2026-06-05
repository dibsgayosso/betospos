-- open_close_register_permission --
INSERT INTO `phppos_modules_actions` (`action_id`, `module_id`, `action_name_key`, `sort`) VALUES ('open_close_register', 'sales', 'common_open_close_register', 506);
INSERT INTO phppos_permissions_actions (module_id, person_id, action_id)
SELECT 'sales', 1, 'open_close_register'
WHERE EXISTS (SELECT 1 FROM phppos_permissions WHERE module_id = 'sales' AND person_id = 1);
