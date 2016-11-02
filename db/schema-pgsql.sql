create table hoge (
  hoge_id serial not null
  , title varchar(100)
  , body text
  , created_at timestamp not null
  , updated_at timestamp not null
  , constraint hoge_PKC primary key (hoge_id)
) ;
