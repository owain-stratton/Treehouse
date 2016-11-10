const expect = require('chai').expect;

const add = (x, y) => x + y;

describe('add', () => {
  it('should add positive numbers', () => {
    expect(add(1, 2)).to.equal(3);
  });
});
