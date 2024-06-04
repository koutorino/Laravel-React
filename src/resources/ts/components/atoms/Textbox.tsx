import React from "react";

type Props = {
  className?: string;
};

const Textbox = (props: Props) => {
  return (
    <textarea
      className={`w-full outline outline-1 outline-gray-500 p-1 rounded-lg ${props.className}`}
      rows={3}
    />
  );
};

export default Textbox;
