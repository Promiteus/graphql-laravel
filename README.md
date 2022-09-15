## Данный проект черпал идеи из статьи https://dev-gang.ru/article/sozdavaite-i-zasczisczaite-api-graphql-s-pomosczu-laravel-vxjbwvy7ls/

### Тест запроса к graphql
1. Запустить проект (команды вызываются в корне проекта):

> docker-compose up -d --build 

> ./init-env.sh

> ./init-app.sh

> ./fill-db.sh

2. Пройти по <a href="http://localhost:1010/graphql-playground">ссылке</a> для отладки запросов graphql. В левой части экрана вписать слкдующий запрос:

<code>
query GetIssues {
  issues {
    id
    title
    description
    author {
      id
      name
    }
    assignee {
      id
      name
    }
    comments {
      id
      content
      author {
        name
      }
    }
  }
}
</code>
