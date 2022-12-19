<?php
enum UserType: string {
	case Admin      = 'Tutor Admin';
	case Instructor = 'Tutor Instructor';
	case Student    = 'Tutor Student';
}


class User {

	public static function set_user_role( UserType $role ) {
		echo 'Role is set to ' . $role->name;
	}
}

echo '<pre>';
print_r( UserType::Instructor );
