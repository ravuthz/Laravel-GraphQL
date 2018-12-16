docker pull redis

docker run -p 6379:6379 --name my-redis -d redis:latest redis-server

docker ps -a |  grep "laradock"

# Find images with partern
docker images -a |  grep "laradock"

# Find images and remove with partern
docker images -a | grep "laradock" | awk '{print $3}' | xargs docker rmi
