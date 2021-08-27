const client = algoliasearch("R8BKZD3IKX", "ac512f88d4428a1302b8c8ee7596be29");
const index = client.initIndex('posts');


autocomplete('#aa-search-input', {}, [
    {
      source: autocomplete.sources.hits(index, { hitsPerPage: 5 }),
      displayKey: 'name',
      templates: {
        header: '<div class="aa-suggestions-category">posts</div>',
        suggestion({_highlightResult}) {
          return `<span>${_highlightResult.title.value}</span><p>by ${_highlightResult.user_id.value}</p>`;
          
        },
        empty: function(result){
          return 'sorry,we did not find any result for"'+ result.query+ '"';
        }
      }
    }
]).on('autocomplete:selected',function(event,suggestion,dataset){
  window.location.href =window.location.origin + '/post/'+suggestion.slug;
});
