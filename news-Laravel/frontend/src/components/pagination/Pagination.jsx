import "./pagination.css";

const Pagination = ({ pages, currentPage, setCurrentPage }) => {

  const generatedPages = []
  for (let i = 1; i <= pages; i++) {
    generatedPages.push(i)
  }


  return (
    <div className="pagination">
      <div className={currentPage === 1 ? 'page previous hid' : 'page previous'} onClick={() => setCurrentPage(prev => currentPage > 1 ? prev - 1 : prev)}>Previous</div>
      {generatedPages.map((page) => (
        <div onClick={() => setCurrentPage(page)} className={currentPage === page ? 'page active' : 'page'} key={page}>
          {page}
        </div>
      ))}
      <div className={currentPage === generatedPages.length ? 'page next hid' : 'page next'} onClick={() => setCurrentPage(prev => currentPage < generatedPages.length ? prev + 1 : prev)}>Next</div>
    </div>
  );
};

export default Pagination;
