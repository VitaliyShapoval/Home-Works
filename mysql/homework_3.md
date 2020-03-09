
```mysql
select film_name, director_name, actor_name 
  from 
    film 
  join director_film 
      on (film.id = director_film.film_id)
  join director
      on (director_film.director_id = director.id)
  join actor_film
      on (film.id = actor_film.film_id) 
  join actor
      on (actor_film.actor_id = actor.id);
```