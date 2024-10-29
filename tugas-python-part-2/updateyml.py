import yaml


with open('compose.yml', 'r') as file:
    data = yaml.safe_load(file)

data['services']['db']['image'] = 'mysql:7.8'

data['services']['db']['environment']['MYSQL_ROOT_PASSWORD_FILE'] = 'password123'
data['services']['db']['environment']['MYSQL_DATABASE'] = 'DB'
data['services']['db']['environment']['MYSQL_USER_FILE'] = 'alzi'
data['services']['db']['environment']['MYSQL_PASSWORD_FILE'] = 'password'

data['services']['web']['environment']['DB_HOST'] = 'password123'
data['services']['web']['environment']['DB_NAME'] = 'DB'
data['services']['web']['environment']['DB_USER_FILE'] = 'alzi'
data['services']['web']['environment']['DB_PASSWORD_FILE'] = 'password'

data['services']['web']['ports'] = '"7000:7000"'


with open('docker-compose_updated.yml', 'w') as file:
    yaml.dump(data, file)